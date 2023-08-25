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
            <div class="col-span-12 grid grid-cols-12 gap-4 p-4">
                <div class="col-span-10 flex items-center">
                    <div class="border-l border-y bg-gray-100 border-gray-400 rounded-l-md" style="padding:7px 13px">
                        <i class="fa-solid fa-calendar" style="color: #7eaa92;"></i>
                    </div>
                    <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" class="border-gray-400 w-full h-10 rounded-r-md focus:ring-0 focus:border-putty-300 focus:ring-putty-300"/>
                </div>
                <div class="col-span-2">
                    <button class="flex items-center justify-center space-x-1 w-full h-full bg-green-400 text-white rounded-md">
                        <i class="fa-solid fa-magnifying-glass fa-sm"></i>
                        <span class="font-medium">Cari Data</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Langkah 1: Cari Data Transaksi</p>
            </div>
            <div class="col-span-12 grid grid-cols-12 gap-4 p-4">
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
                    <button class="flex items-center justify-center space-x-1 w-full h-full bg-green-400 text-white rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                        <span class="font-medium">Proses Data</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-2 bg-white rounded-md">
            <div class="col-span-12 flex items-center p-4 space-x-2 bg-gray-100 rounded-t-md">
                <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
                <p class="text-sm font-medium text-putty-300">Data Transaksi</p>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow-md overflow-hidden">
            <table class="min-w-full border border-gray-300">
              <thead class="bg-putty-300 text-white">
                <tr>
                  <th class="py-2 w-12 border">No</th>
                  <th class="py-2 px-4 border">Tanggal</th>
                  <th class="py-2 px-4 border">Produk</th>
                </tr>
              </thead>
              <tbody class="text-gray-800">
                <tr>
                  <td class="py-2 px-4 border text-center">1</td>
                  <td class="py-2 px-4 border text-center">01/01/2021</td>
                  <td class="py-2 px-4 border">Brio Satya, CRV</td>
                </tr>
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

@endsection