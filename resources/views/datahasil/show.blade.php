@extends('layouts.app')

@section('title', 'Data Hasil')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 gap-6 ml-64 p-4">    
    <div class="col-span-12 flex justify-between items-center">
        <div class="flex items-center space-x-2 ml-2 text-gray-500">
            <i class="fa-solid fa-money-bill-wave fa-xl"></i> 
            <p class="text-2xl">Data Hasil</p>
        </div>
    </div>
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
                  <td class="py-2 px-4 border text-gray-800">75%</td>
                </tr>
                <tr>
                  <td class="py-2 px-4 border w-64 bg-putty-300 text-white">Minimal Confidence</td>
                  <td class="py-2 px-4 border text-gray-800">80</td>
                </tr>
                <tr>
                  <td class="py-2 px-4 border w-64 bg-putty-300 text-white">Start Date</td>
                  <td class="py-2 px-4 border text-gray-800">01/02/2023</td>
                </tr>
                <tr>
                  <td class="py-2 px-4 border w-64 bg-putty-300 text-white">End Date</td>
                  <td class="py-2 px-4 border text-gray-800">19/02/2023</td>
                </tr>
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Asosiation Rules</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">X => Y</th>                  
                  <th class="py-2 px-4 border">Support</th>                  
                  <th class="py-2 px-4 border">Confidence</th>
                  <th class="py-2 px-4 border">Lift Ratio</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                <tr>
                  <td class="py-2 px-4 border text-center">1</td>
                  <td class="py-2 px-4 border text-center">Mentega => Terigu</td>
                  <td class="py-2 px-4 border text-center">100%</td>
                  <td class="py-2 px-4 border text-center">100%</td>
                  <td class="py-2 px-4 border text-center">1.33</td>
                  <td class="py-2 px-4 border text-center">Berpengaruh Positif</td>
                </tr>
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex justify-between p-4 bg-gray-100 rounded-t-md">
                <div class="flex items-center space-x-2">
                    <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                    <p class="text-sm font-medium text-putty-300">Hasil Analisa</p>
                </div>
                <a href="#" class="flex items-center space-x-2 py-2 px-4 bg-putty-300 text-sm font-medium rounded-sm text-white hover:bg-putty-400">
                    <i class="fa-solid fa-print"></i>
                    <span>Print</span>
                </a>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                <tr>
                  <td class="py-2 px-4 border text-center">1</td>
                  <td class="py-2 px-4 border text-center">Jika Pembeli Membeli Mentega. Maka Pemebeli juga akan Membeli Telur</td>
                </tr>
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Perhitungan Item Set 1</p>
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
                <tr>
                  <td class="py-2 px-4 border text-center">1</td>
                  <td class="py-2 px-4 border text-center">Mentega</td>
                  <td class="py-2 px-4 border text-center">3/3</td>
                  <td class="py-2 px-4 border text-center">100%</td>
                  <td class="py-2 px-4 border text-center">Lolos</td>
                </tr>
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
                <tr>
                  <td class="py-2 px-4 border text-center">1</td>
                  <td class="py-2 px-4 border text-center">Mentega</td>
                  <td class="py-2 px-4 border text-center">3/3</td>
                  <td class="py-2 px-4 border text-center">100%</td>
                  <td class="py-2 px-4 border text-center">Lolos</td>
                </tr>
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Perhitungan Item Set 2</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">Nama Barang 1</th>
                  <th class="py-2 px-4 border">Nama Barang 2</th>
                  <th class="py-2 px-4 border">Jumlah</th>
                  <th class="py-2 px-4 border">Support</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                <tr>
                  <td class="py-2 px-4 border text-center">1</td>
                  <td class="py-2 px-4 border text-center">Mentega</td>
                  <td class="py-2 px-4 border text-center">Terigu</td>
                  <td class="py-2 px-4 border text-center">3/3</td>
                  <td class="py-2 px-4 border text-center">100%</td>
                  <td class="py-2 px-4 border text-center">Lolos</td>
                </tr>
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
                  <th class="py-2 px-4 border">Nama Barang 1</th>
                  <th class="py-2 px-4 border">Nama Barang 2</th>
                  <th class="py-2 px-4 border">Jumlah</th>
                  <th class="py-2 px-4 border">Support</th>
                  <th class="py-2 px-4 border">Keterangan</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                <tr>
                  <td class="py-2 px-4 border text-center">1</td>
                  <td class="py-2 px-4 border text-center">Mentega</td>
                  <td class="py-2 px-4 border text-center">Terigu</td>
                  <td class="py-2 px-4 border text-center">3/3</td>
                  <td class="py-2 px-4 border text-center">100%</td>
                  <td class="py-2 px-4 border text-center">Lolos</td>
                </tr>
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
                <tr>
                  <td class="py-2 px-4 border text-center">1</td>
                  <td class="py-2 px-4 border text-center">Mentega => Terigu</td>
                  <td class="py-2 px-4 border text-center">33.33</td>
                  <td class="py-2 px-4 border text-center">33.33</td>
                  <td class="py-2 px-4 border text-center">100</td>
                  <td class="py-2 px-4 border text-center">Lolos</td>
                </tr>
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
                <tr>
                  <td class="py-2 px-4 border text-center">1</td>
                  <td class="py-2 px-4 border text-center">Mentega => Terigu</td>
                  <td class="py-2 px-4 border text-center">2/2</td>
                  <td class="py-2 px-4 border text-center">3/4</td>
                  <td class="py-2 px-4 border text-center">1.33</td>
                  <td class="py-2 px-4 border text-center">Positif</td>
                </tr>
                <!-- More data rows... -->
              </tbody>
            </table>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Perhitungan Item Set 3</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-putty-300 text-white">
                  <tr>
                    <th class="py-2 w-12 border">No</th>
                    <th class="py-2 px-4 border">Nama Barang 1</th>
                    <th class="py-2 px-4 border">Nama Barang 2</th>
                    <th class="py-2 px-4 border">Nama Barang 3</th>
                    <th class="py-2 px-4 border">Jumlah</th>
                    <th class="py-2 px-4 border">Support</th>
                    <th class="py-2 px-4 border">Keterangan</th>
                  </tr>
                </thead>
                <tbody class="text-gray-800">
                  <tr>
                    <td class="py-2 px-4 border text-center">1</td>
                    <td class="py-2 px-4 border text-center">Mentega</td>
                    <td class="py-2 px-4 border text-center">Terigu</td>
                    <td class="py-2 px-4 border text-center">Telur</td>
                    <td class="py-2 px-4 border text-center">3/3</td>
                    <td class="py-2 px-4 border text-center">100%</td>
                    <td class="py-2 px-4 border text-center">Lolos</td>
                  </tr>
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
                    <th class="py-2 px-4 border">Nama Barang 1</th>
                    <th class="py-2 px-4 border">Nama Barang 2</th>
                    <th class="py-2 px-4 border">Nama Barang 3</th>
                    <th class="py-2 px-4 border">Jumlah</th>
                    <th class="py-2 px-4 border">Support</th>
                    <th class="py-2 px-4 border">Keterangan</th>
                  </tr>
                </thead>
                <tbody class="text-gray-800">
                  <tr>
                    <td class="py-2 px-4 border text-center">1</td>
                    <td class="py-2 px-4 border text-center">Mentega</td>
                    <td class="py-2 px-4 border text-center">Terigu</td>
                    <td class="py-2 px-4 border text-center">Telur</td>
                    <td class="py-2 px-4 border text-center">3/3</td>
                    <td class="py-2 px-4 border text-center">100%</td>
                    <td class="py-2 px-4 border text-center">Lolos</td>
                  </tr>
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
                  <tr>
                    <td class="py-2 px-4 border text-center">1</td>
                    <td class="py-2 px-4 border text-center">Mentega, Telur => Terigu</td>
                    <td class="py-2 px-4 border text-center">33.33</td>
                    <td class="py-2 px-4 border text-center">33.33</td>
                    <td class="py-2 px-4 border text-center">100</td>
                    <td class="py-2 px-4 border text-center">Lolos</td>
                  </tr>
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
                  <tr>
                    <td class="py-2 px-4 border text-center">1</td>
                    <td class="py-2 px-4 border text-center">Mentega, Telur => Terigu</td>
                    <td class="py-2 px-4 border text-center">2/2</td>
                    <td class="py-2 px-4 border text-center">3/4</td>
                    <td class="py-2 px-4 border text-center">1.33</td>
                    <td class="py-2 px-4 border text-center">Berpengaruh Positif</td>
                  </tr>
                  <!-- More data rows... -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection