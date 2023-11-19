<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTransaksi;

class DataProsesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dataproses.index');
    }

    public function searchData(Request $request)
    {
        $daterange = $request->input('daterange');        
        list($startDate, $endDate) = explode(' - ', $daterange);
        $startDate = date('Y-m-d', strtotime($startDate));
        $endDate = date('Y-m-d', strtotime($endDate));

        $dataSort = DataTransaksi::whereBetween('tanggal', [$startDate, $endDate])->get();
        
        $request->session()->put('dataSort', $dataSort);
        $request->session()->put('startDate', $startDate);
        $request->session()->put('endDate', $endDate);

        
        return view('dataproses.index', ['dataSort' => $dataSort]);
    }

    public function prosesData(Request $request)
    {
        $minSupport = $request->input('support');
        $confidenceThreshold = $request->input('confidence');

        $dataSort = $request->session()->get('dataSort');
        $startDate = $request->session()->get('startDate');
        $endDate = $request->session()->get('endDate');
//Proset Get ID Transaksi
        $idTransaksi = [];
        foreach ($dataSort as $dataList) {
            $idTransaksi[] = $dataList->id_transaksi;
        }
        
//Proses Get Product List
        $productList = [];
        foreach ($idTransaksi as $id_transaksi){
            $products = DataTransaksi::where('id_transaksi', $id_transaksi)->pluck('products')->toArray();;
            $productList[$id_transaksi] = $products;
        }
        // dd($productList);
        $allItems = [];
        foreach($productList as $product_list){
            foreach($product_list as $product){
                $product = explode(',', $product);
                $allItems = array_merge($allItems, $product);
            }
        }
        $allItems = array_unique($allItems);
        // dd($allItems);
        $binaryTable = [];
        foreach ($productList as $productId => $product_list) {
            $binaryTable[$productId] = array_fill_keys($allItems, 0);
        }
        // dd($binaryTable);
        foreach ($productList as $productId => $product_list) {
            foreach ($product_list as $product) {
                $product = explode(',', $product);
                foreach ($product as $item) {
                    $binaryTable[$productId][$item] = 1;
                }
            }
        }
        // dd($binaryTable);

        // dd($productId);
        // $minSupport = 30;
        
        $totalTransaction = count($binaryTable);

        $itemSupport = [];
        foreach ($allItems as $item) {
            $support = 0;
            foreach ($binaryTable as $productId => $binary) {
                if ($binary[$item] == 1) {
                    $support++;
                }
            }
            
            $percentage = ($support / $totalTransaction) * 100; 
            $roundedPercentage = number_format($percentage, 2);
            if ($roundedPercentage > $minSupport){
                $information = 'Lolos';
            }else{
                $information = 'Tidak Lolos';
            }
            $itemSupport[$item] = [
                'item' => $item,
                'support' => $support . '/' . $totalTransaction,
                'percentage' => $roundedPercentage,
                'information' => $information,
            ];
        }

        $filteredItems = [];
            foreach ($itemSupport as $itemData) {
                if ($itemData['information'] == 'Lolos') {
                    $filteredItems[] = $itemData['item'];
                }
            }
        $newItemCombinations = [];
        $filteredItemCount = count($filteredItems);
        
        for ($i = 0; $i < $filteredItemCount - 1; $i++) {
            for ($j = $i + 1; $j < $filteredItemCount; $j++) {
                $newItem = $filteredItems[$i] . ',' . $filteredItems[$j];
                $newItemCombinations[] = $newItem;
            }
        }
        
        $kandidat2ItemSet = [];
        $kandidatTrue = [];
        foreach ($newItemCombinations as $newItem) {
            $support = 0;
            foreach ($binaryTable as $productId => $binary) {
                $items = explode(',', $newItem);
                $itemFound = true;
                foreach ($items as $item) {
                    if ($binary[$item] != 1) {
                        $itemFound = false;
                        break;
                    }
                }
                if ($itemFound) {
                    $support++;
                }
            }

            $percentage = ($support / $totalTransaction) * 100;
            $roundedPercentage = number_format($percentage, 2);
            
            if ($roundedPercentage > $minSupport) {
                $information = 'Lolos';
                $kandidatTrue[$newItem] = [
                    'item' => $newItem,
                    'support' => $support . '/' . $totalTransaction,
                    'percentage' => $roundedPercentage,
                    'information' => $information
                ];
            } else {
                $information = 'Tidak Lolos';
            }
            
            $kandidat2ItemSet[$newItem] = [
                'item' => $newItem,
                'support' => $support . '/' . $totalTransaction,
                'percentage' => $roundedPercentage,
                'information' => $information,
            ];
        }
        // dd($kandidat2ItemSet);
        $rules = [];
        foreach ($kandidatTrue as $kandidat2Item => $data) {
            $items = explode(',', $kandidat2Item);
            list($supportXYNum, $supportYNum) = explode('/', $data['support']);
            $supportXY = (float) $supportXYNum;
            $supportY = (float) $supportYNum;
            $resultSupportXY = round($supportXY / $supportY, 2);
            
            foreach ($items as $item) {
                $itemX = implode(',', array_diff($items, [$item]));

                $supportXString = isset($itemSupport[$itemX]) ? $itemSupport[$itemX]['support'] : '0/0';
                list($supportXNum, $totalTransactionNum) = explode('/', $supportXString);
                $supportX = (float) $supportXNum;
                $resultSupportX = round($supportX / $supportY, 2);
                
                // Hitung confidence
                if ($supportX > 0) {
                    $confi = ($resultSupportXY / $resultSupportX) * 100;
                    $confidence = number_format($confi, 2);
                    // Menghitung lift ratio
                    $confX = isset($itemSupport[$itemX]) ? $itemSupport[$itemX]['percentage'] : 0;
                    $confY = isset($itemSupport[$item]) ? $itemSupport[$item]['percentage'] : 0;
                    $nc = $confidence * 100;
                    $benc = $supportX / $totalTransaction * 100;
                    $bencmark = number_format($benc, 2);
                    $liftR =  ($nc / $bencmark) / 100;
                    $liftRatio = number_format($liftR, 2);
                    // dd($liftRatio);

                    if ($liftRatio > 1) {
                        $informationLiftRatio = 'Positif';
                    } else if($liftRatio == 1){
                        $informationLiftRatio = 'Normal';
                    } else {
                        $informationLiftRatio = 'Negatif';
                    }
                    // Cek apakah confidence melewati threshold
                    if ($confidence >= $confidenceThreshold) {
                        $rules[] = [
                            'itemX' => $itemX,
                            'itemY' => $item,
                            'supportXY' => $resultSupportXY,
                            'supportX' => $resultSupportX,
                            'confidence' => $confidence,
                            'bencmark' => $bencmark,
                            'liftRatio' => $liftRatio,
                            'informationLiftRatio' => $informationLiftRatio,
                        ];
                    }
                }
            }
        }

        //Knandidat 3 item set
        $filteredItems3 = [];
        foreach ($itemSupport as $itemData3) {
            if ($itemData3['information'] == 'Lolos') {
                $filteredItems3[] = $itemData3['item'];
            }
        }

        $newItemCombinations3 = [];
        $filteredItemCount3 = count($filteredItems3);

        for ($i = 0; $i < $filteredItemCount3 - 2; $i++) {
            for ($j = $i + 1; $j < $filteredItemCount3 - 1; $j++) {
                for ($k = $j + 1; $k < $filteredItemCount3; $k++) {
                    $newItem3 = $filteredItems3[$i] . ',' . $filteredItems3[$j] . ',' . $filteredItems3[$k];
                    $newItemCombinations3[] = $newItem3;
                }
            }
        }

        $kandidat3ItemSet = [];
        $kandidatTrue3 = [];
        foreach ($newItemCombinations3 as $newItem3) {
            $supportAB = 0;
            foreach ($binaryTable as $productId => $binary) {
                $items3 = explode(',', $newItem3);
                $item3Found = true;
                foreach ($items3 as $item3) {
                    if ($binary[$item3] != 1) {
                        $item3Found = false;
                        break;
                    }
                }
                if ($item3Found) {
                    $supportAB++;
                }
            }
            // dd($supportAB);
        
            $percentage3 = ($supportAB / $totalTransaction) * 100;
            $roundedPercentage3 = number_format($percentage3, 2);
            // dd($supportAB, $roundedPercentage3);

            foreach ($filteredItems3 as $itemSatu) {
                foreach ($filteredItems3 as $itemDua) {
                    if ($itemSatu != $itemDua) {
                        $supportB = 0;
                        foreach ($binaryTable as $productId => $binary) {
                            if ($binary[$itemSatu] == 1 && $binary[$itemDua] == 1) {
                                $supportB++;
                            }
                        }
                    }
                }
            }
        
        // dd($supportB);

            if ($roundedPercentage3 > $minSupport) {
                $information = 'Lolos';
                $kandidatTrue3[$newItem3] = [
                    'item' => $newItem3,
                    'support' => $support . '/' . $totalTransaction,
                    'percentage' => $roundedPercentage3,
                    'information' => $information
                ];
            } else {
                $information = 'Tidak Lolos';
            }
            
            $kandidat3ItemSet[$newItem3] = [
                'item' => $newItem3,
                'support' => $support . '/' . $totalTransaction,
                'percentage' => $roundedPercentage3,
                'information' => $information,
            ];
        }

        $rules3 = [];
        foreach ($kandidatTrue3 as $kandidat3Item => $data3) {
            $items3 = explode(',', $kandidat3Item);
            list($supportXYNum3, $supportYNum3) = explode('/', $data3['support']);
            $supportXY3 = (float) $supportXYNum3;
            $supportY3 = (float) $supportYNum3;
            $resultSupportXY3 = round($supportXY3 / $supportY3, 2);

            foreach ($items3 as $item3) {
                $itemXList3 = array_diff($items3, [$item3]);
                foreach ($itemXList3 as $itemX3) {
                    $supportXString3 = isset($itemSupport[$itemX3]) ? $itemSupport[$itemX3]['support'] : '0/0';
                    list($supportXNum3, $totalTransactionNum3) = explode('/', $supportXString3);
                    $supportX3 = (float) $supportXNum3;
                    $resultSupportX3 = round($supportX3 / $supportY3, 2);

                    // Hitung confidence
                    if ($supportX3 > 0) {
                        $confi3 = ($resultSupportXY3 / $resultSupportX3) * 100;
                        $confidence3 = number_format($confi3, 2);
                    
                        // Menghitung lift ratio
                        $confX3 = isset($itemSupport[$itemX3]) ? $itemSupport[$itemX3]['percentage'] : 0;
                        $confY3 = isset($itemSupport[$item3]) ? $itemSupport[$item3]['percentage'] : 0;
                        $nc3 = $confidence3 * 100;
                        $benc3 = $supportX3 / $totalTransaction * 100;
                        $bencmark3 = number_format($benc3, 2);
                        $liftR3 = ($nc3 / $bencmark3) / 100;
                        $liftRatio3 = number_format($liftR3, 2);

                        if ($liftRatio3 > 1) {
                            $informationLiftRatio3 = 'Positif';
                        } else if ($liftRatio3 == 1) {
                            $informationLiftRatio3 = 'Normal';
                        } else {
                            $informationLiftRatio3 = 'Negatif';
                        }
                        
                        // Cek apakah confidence melewati threshold
                        if ($confidence3 >= $confidenceThreshold) {
                            $rules3[] = [
                                'itemX' => $itemX3,
                                'itemY' => $item3,
                                'supportXY' => $resultSupportXY3,
                                'supportX' => $resultSupportX3,
                                'confidence' => $confidence3,
                                'bencmark3' => $bencmark3,
                                'liftRatio3' => $liftRatio3,
                                'informationLiftRatio3' => $informationLiftRatio3,
                            ];
                        }
                    }
                }
            }
        }
        // dd($kandidat3ItemSet);
        return view('dataproses.index', [
            'startDate' => $startDate,
            'endDate' => $endDate,
            'dataSort' => $dataSort,
            'support' => $minSupport,
            'confidence' => $confidenceThreshold,
            'itemSupport' => $itemSupport,
            'kandidat2ItemSet' => $kandidat2ItemSet,
            'rules' => $rules,
            'kandidat3ItemSet' => $kandidat3ItemSet,
            'rules3' => $rules3,
        ]);
    }
}