@extends('layouts.app')

@section('title', 'Data Proses')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 gap-6 ml-64 p-4">    
    <div class="col-span-12 flex items-center text-gray-500 space-x-2 ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>
        <p class="text-2xl">Data Proses</p>
    </div>    
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Langkah 1: Cari Data Transaksi</p>
            </div>
            <form id="form-cari-data" action="{{ route('search.data') }}" method="POST" class="col-span-12 grid grid-cols-12 gap-4 p-4">
            @csrf            
                <div class="col-span-10 flex items-center">
                    <div class="border-l border-y bg-gray-100 border-gray-400 rounded-l-md" style="padding:7px 13px">
                        <i class="fa-solid fa-calendar" style="color: #7eaa92;"></i>
                    </div>
                    <input type="text" name="daterange" value="07/17/2023 - 07/18/2023" class="border-gray-400 w-full h-10 rounded-r-md focus:ring-0 focus:border-putty-300 focus:ring-putty-300"/>
                </div>
                <div class="col-span-2">
                    <button type="submit" class="flex items-center justify-center space-x-1 w-full h-full bg-green-400 text-white rounded-md">
                        <i class="fa-solid fa-magnifying-glass fa-sm"></i>
                        <span class="font-medium">Cari Data</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    @if (isset($dataSort) && $dataSort->isEmpty())

    @elseif (isset($dataSort))
    <div class="col-span-12 bg-white rounded-md shadow-xl">
      <div class="p-4 flex items-center space-x-2 bg-gray-100 rounded-t-md">
          <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
          <p class="text-sm font-medium text-putty-300">Daftar Data Barang</p>
      </div>
      <div class="p-4">
          <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">Tanggal</th>
                  <th class="py-2 px-4 border">Produk</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
              @php $no = 1 @endphp
                    @foreach ($dataSort as $dt)
                        <tr>
                            <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                            <td class="py-2 px-4 border text-center">{{ $dt->tanggal }}</td>
                            <td class="py-2 px-4 border text-center">{{ $dt->products }}</td>
                        </tr>
                    @endforeach
                    <!-- More data rows... -->
              </tbody>
            </table>
          </div>
    </div>
    @endif
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Langkah 1: Cari Data Transaksi</p>
            </div>
            <form action="{{ route('proses.data') }}" method="POST" class="col-span-12 grid grid-cols-12 gap-4 p-4">
              @csrf
                <div class="col-span-10 grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <div class="border-l border-y w-36 bg-gray-100 border-gray-400 rounded-l-md text-center text-sm font-medium text-gray-600" style="padding: 9px 10px">
                            <span>Min Support</span>
                        </div>
                        <input id="support" name="support" type="text" class="border-gray-400 w-full h-10 rounded-r-md focus:ring-0 focus:border-putty-300 focus:ring-putty-300">
                    </div>
                    <div class="flex items-center">
                        <div class="border-l border-y w-44 bg-gray-100 border-gray-400 rounded-l-md text-center text-sm font-medium text-gray-600" style="padding: 9px 0px">
                            <span>Min Confidence</span>
                        </div>
                        <input id="confidence" name="confidence" type="text" class="border-gray-400 w-full h-10 rounded-r-md focus:ring-0 focus:border-putty-300 focus:ring-putty-300">
                    </div>
                </div>
                <div class="col-span-2">
                    <button type="submit" class="flex items-center justify-center space-x-1 w-full h-full bg-green-400 text-white rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                        <span class="font-medium">Proses Data</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    @if (empty($support) && empty($confidence) && empty($startDate) && empty($endDate))

    @else
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Data Proses</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <tbody>
                <tr>
                  <td class="py-2 px-4 border w-64 bg-putty-300 text-white">Minimal Support</td>
                  <td class="py-2 px-4 border text-gray-800">{{ $support }}</td>
                </tr>
                <tr>
                  <td class="py-2 px-4 border w-64 bg-putty-300 text-white">Minimal Confidence</td>
                  <td class="py-2 px-4 border text-gray-800">{{ $confidence }}</td>
                </tr>
                <tr>
                  <td class="py-2 px-4 border w-64 bg-putty-300 text-white">Start Date</td>
                  <td class="py-2 px-4 border text-gray-800">{{ $startDate }}</td>
                </tr>
                <tr>
                  <td class="py-2 px-4 border w-64 bg-putty-300 text-white">End Date</td>
                  <td class="py-2 px-4 border text-gray-800">{{ $endDate }}</td>
                </tr>
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    @endif
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Item Set 1</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">Nama Barang</th>
                  <th class="py-2 px-4 border">Jumlah</th>
                  <th class="py-2 px-4 border">Support</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                
                  @if (empty($itemSupport))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($itemSupport as $item)
                    <tr>
                      <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                      <td class="py-2 px-4 border text-center">{{ $item['item'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $item['support'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $item['percentage'] }} %</td>
                      <td class="py-2 px-4 border text-center">{{ $item['information'] }}</td>
                    </tr>
                  @endforeach

                  @endif
            
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Item Set 1 yang Lolos</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">Nama Barang</th>
                  <th class="py-2 px-4 border">Jumlah</th>
                  <th class="py-2 px-4 border">Support</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                @if (empty($itemSupport))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($itemSupport as $item)
                    @if ($item['information'] == 'Lolos')
                      <tr>
                        <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                        <td class="py-2 px-4 border text-center">{{ $item['item'] }}</td>
                        <td class="py-2 px-4 border text-center">{{ $item['support'] }}</td>
                        <td class="py-2 px-4 border text-center">{{ $item['percentage'] }} %</td>
                        <td class="py-2 px-4 border text-center">{{ $item['information'] }}</td>
                      </tr>
                    @endif
                  @endforeach

                  @endif
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Item Set 2</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">Nama Barang</th>
                  <th class="py-2 px-4 border">Jumlah</th>
                  <th class="py-2 px-4 border">Support</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                @if (empty($kandidat2ItemSet))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($kandidat2ItemSet as $item2)
                    <tr>
                      <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                      <td class="py-2 px-4 border text-center">{{ $item2['item'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $item2['support'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $item2['percentage'] }}%</td>
                      <td class="py-2 px-4 border text-center">{{ $item2['information'] }}</td>
                    </tr>
                  @endforeach

                  @endif
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Item Set 2 yang Lolos</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">Nama Barang</th>
                  <th class="py-2 px-4 border">Jumlah</th>
                  <th class="py-2 px-4 border">Support</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                @if (empty($kandidat2ItemSet))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($kandidat2ItemSet as $item2)
                    @if ($item2['information'] == 'Lolos')
                      <tr>
                        <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                        <td class="py-2 px-4 border text-center">{{ $item2['item'] }}</td>
                        <td class="py-2 px-4 border text-center">{{ $item2['support'] }}</td>
                        <td class="py-2 px-4 border text-center">{{ $item2['percentage'] }}%</td>
                        <td class="py-2 px-4 border text-center">{{ $item2['information'] }}</td>
                      </tr>
                  @endif
                @endforeach

                @endif
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Confidence dari Item Set 2</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">X => Y</th>                  
                  <th class="py-2 px-4 border">Support X => Y</th>                  
                  <th class="py-2 px-4 border">Support X</th>
                  <th class="py-2 px-4 border">Confidence</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                @if (empty($rules))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($rules as $confidence1)
                    <tr>
                      <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence1['itemX'] }} => {{ $confidence1['itemY'] }} </td>
                      <td class="py-2 px-4 border text-center">{{ $confidence1['supportXY'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence1['supportX'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence1['confidence'] }}%</td>
                      <td class="py-2 px-4 border text-center">Lolos</td>
                    </tr>
                @endforeach

                @endif
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Lift Ratio dari Item Set 2</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">X => Y</th>                  
                  <th class="py-2 px-4 border">Confidence X => Y</th>                  
                  <th class="py-2 px-4 border">Benchmark Conf X => Y</th>                  
                  <th class="py-2 px-4 border">Lift Ratio</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                @if (empty($rules))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($rules as $confidence2)
                    <tr>
                      <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence2['itemX'] }} => {{ $confidence2['itemY'] }} </td>
                      <td class="py-2 px-4 border text-center">{{ $confidence2['confidence'] }}%</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence2['bencmark'] }}%</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence2['liftRatio'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence2['informationLiftRatio'] }}</td>
                    </tr>
                  @endforeach

                  @endif
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Item Set 3</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-putty-300 text-white">
                  <tr>
                    <th class="py-2 w-12 border">No</th>
                    <th class="py-2 px-4 border">Nama Barang</th>
                    <th class="py-2 px-4 border">Jumlah</th>
                    <th class="py-2 px-4 border">Support</th>
                    <th class="py-2 px-4 border">Keterangan</th>
                  </tr>
                </thead>
                <tbody class="text-gray-800">
                  @if (empty($kandidat3ItemSet))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($kandidat3ItemSet as $item3)
                    <tr>
                      <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                      <td class="py-2 px-4 border text-center">{{ $item3['item'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $item3['support'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $item3['percentage'] }}%</td>
                      <td class="py-2 px-4 border text-center">{{ $item3['information'] }}</td>
                    </tr>
                  @endforeach

                  @endif
                  <!-- More data rows... -->
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Item Set 3 yang Lolos</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-putty-300 text-white">
                  <tr>
                    <th class="py-2 w-12 border">No</th>
                    <th class="py-2 px-4 border">Nama Barang</th>
                    <th class="py-2 px-4 border">Jumlah</th>
                    <th class="py-2 px-4 border">Support</th>
                    <th class="py-2 px-4 border">Keterangan</th>
                  </tr>
                </thead>
                <tbody class="text-gray-800">
                  @if (empty($kandidat3ItemSet))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($kandidat3ItemSet as $item3)
                    @if ($item3['information'] == 'Lolos')
                      <tr>
                        <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                        <td class="py-2 px-4 border text-center">{{ $item3['item'] }}</td>
                        <td class="py-2 px-4 border text-center">{{ $item3['support'] }}</td>
                        <td class="py-2 px-4 border text-center">{{ $item3['percentage'] }}%</td>
                        <td class="py-2 px-4 border text-center">{{ $item3['information'] }}</td>
                      </tr>
                    @else
                    
                    @endif
                @endforeach

                @endif
                  <!-- More data rows... -->
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Confidence dari Item Set 3</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-putty-300 text-white">
                  <tr>
                    <th class="py-2 w-12 border">No</th>
                    <th class="py-2 px-4 border">X => Y</th>
                    <th class="py-2 px-4 border">Support X => Y</th>
                    <th class="py-2 px-4 border">Support X</th>
                    <th class="py-2 px-4 border">Confidence</th>
                    <th class="py-2 px-4 border">Keterangan</th>
                  </tr>
                </thead>
                <tbody class="text-gray-800">
                  @if (empty($rules3))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($rules3 as $confidence3)
                    <tr>
                      <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence3['itemX'] }} => {{ $confidence3['itemY'] }} </td>
                      <td class="py-2 px-4 border text-center">{{ $confidence3['supportXY'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence3['supportX'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence3['confidence'] }}%</td>
                      <td class="py-2 px-4 border text-center">Lolos</td>
                    </tr>
                @endforeach

                @endif
                  <!-- More data rows... -->
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Lift Ratio dari Item Set 3</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-putty-300 text-white">
                  <tr>
                    <th class="py-2 w-12 border">No</th>
                    <th class="py-2 px-4 border">X => Y</th>
                    <th class="py-2 px-4 border">Confidence X => Y</th>
                    <th class="py-2 px-4 border">Benchmark Conf X => Y</th>
                    <th class="py-2 px-4 border">Lift Ratio</th>
                    <th class="py-2 px-4 border">Keterangan</th>
                  </tr>
                </thead>
                <tbody class="text-gray-800">
                  @if (empty($rules3))

                  @else
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($rules3 as $confidence3)
                    <tr>
                      <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence3['itemX'] }} => {{ $confidence3['itemY'] }} </td>
                      <td class="py-2 px-4 border text-center">{{ $confidence3['confidence'] }}%</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence3['bencmark3'] }}%</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence3['liftRatio3'] }}</td>
                      <td class="py-2 px-4 border text-center">{{ $confidence3['informationLiftRatio3'] }}</td>
                    </tr>
                  @endforeach

                  @endif
                  <!-- More data rows... -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
      const formElements = document.querySelectorAll("input, select, textarea");

      formElements.forEach(function (element) {
          element.addEventListener("input", function () {
              sessionStorage.setItem(element.id, element.value);
          });
      });

      formElements.forEach(function (element) {
          const storedValue = sessionStorage.getItem(element.id);
          if (storedValue !== null) {
              element.value = storedValue;
          }
      });
  });
</script>

@endsection