@extends('layouts.app')

@section('title', 'Detail Data Transaksi')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 gap-6 ml-64 p-4">
    <div class="col-span-12 flex justify-between items-center">
        <div class="flex items-center space-x-2 ml-2 text-gray-500">
            <i class="fa-solid fa-money-bill-wave fa-xl"></i> 
            <p class="text-2xl">Data Transaksi</p>
        </div>
        <div class="flex space-x-2">          
            <button data-modal-target="upload-modal" data-modal-toggle="upload-modal" class="flex items-center space-x-2 py-1.5 px-4 mr-2 text-sm font-semibold text-white bg-blue-500 rounded-md mt-1">
                <i class="fa-solid fa-upload"></i>
                <span>Upload Data</span>
            </button>
            <div id="upload-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative w-full max-w-md max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="upload-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                      <div class="px-6 py-6 lg:px-8">
                          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Upload Data Transaksi</h3>
                          <form class="space-y-6" action="{{ route('datatransaksi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                              <div>
                                  <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih file</label>
                                  <input id="upload_file" type="file" name="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                  <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Excel Only.</p>
                              </div>
                              <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload Data Transaksi</button>                              
                          </form>
                      </div>
                  </div>
              </div>
            </div>
            
            <button data-modal-target="tambah-modal" data-modal-toggle="tambah-modal" class="flex items-center space-x-2 py-1.5 px-4 mr-2 text-sm font-semibold text-white bg-green-400 rounded-md mt-1">
                <i class="fa-solid fa-plus"></i>
                <span>Tambah Data</span>
            </button>
            <div id="tambah-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative w-full max-w-md max-h-full">
                  <!-- Modal content -->
                  <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                      <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="tambah-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                      <div class="px-6 py-6 lg:px-8">
                          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Data Transaksi</h3>
                          <form class="space-y-6" action="{{ route('manual.input') }}" method="POST">     
                          @csrf                         
                              <div>
                                  <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                  <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                      </svg>
                                    </div>
                                    <input datepicker type="text" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                  </div>                                  
                              </div>
                              <div>
                                  <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Produk</label>
                                  <input type="product" name="product" id="product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                              </div>
                              <button type="submit" class="w-full text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Data Transaksi</button>                              
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
    <div class="col-span-12 bg-white rounded-md shadow-xl">
        <div class="p-4 flex items-center space-x-2 bg-gray-100 rounded-t-md">
            <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
            <p class="text-sm font-medium text-putty-300">Daftar Data Transaksi</p>
        </div>
        <div class="p-4">
            <table id="myTable" class="display cell-border pt-6">
                <thead class="rounded">
                  <tr class="bg-putty-300 text-white">
                    <th class="w-14">No</th>
                    <th>Tanggal</th>
                    <th>Produk</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="text-gray-500">
                  @foreach ($transaksi as $t)
                  <tr>
                    <td class="text-center">{{ $t->id }}</td>
                    <td class="text-center">{{ $t->tanggal }}</td>
                    <td>{{ $t->products }}</td>
                    <td class="flex items-center justify-center space-x-2">
                      <a href="#" class="py-1 px-2.5 bg-yellow-400 rounded-sm text-white">
                        <i class="fa-solid fa-pen-to-square fa-sm"></i>
                      </a>
                      <a href="#" class="py-1 px-2.5 bg-red-500 rounded-sm text-white">
                        <i class="fa-solid fa-trash fa-sm"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  <!-- More data rows... -->
                </tbody>
            </table>
        </div>
    </div>  
    
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


<script>
  $(document).ready(function() {
    // Initialize DataTable with options
    var table = $('#myTable').DataTable({
      "paging": true,         // Enable pagination
      "lengthChange": true,   // Enable changing number of records shown per page
      "lengthMenu": [10, 25, 50],  // Define options for "Show [number] entries"
      "searching": true,      // Enable search bar
      "ordering": true,       // Enable sorting
      "info": true,           // Show information about current page and total records
      "autoWidth": true       // Automatically adjust column widths
    });
  });
</script>

<style>
    /* Custom CSS for adjusting the width of the lengthMenu dropdown */
    .dataTables_length select {
      width: 70px; /* Change this value to adjust the width as needed */
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        color: #fff !important;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        color: #fff !important;
        /*text-white*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #7eaa92 !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        /* color: #fff !important; */
        /*text-white*/
        font-weight: 700;
        /*font-bold*/
        border-radius: .25rem;
        /*rounded*/
        background: #7eaa92 !important;
        /*bg-indigo-500*/
        border: 1px solid transparent;
        /*border border-transparent*/
    }
  </style>

@endsection