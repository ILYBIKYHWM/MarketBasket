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
    <div class="col-span-12 bg-white rounded-md shadow-xl">
        <div class="p-4 flex items-center space-x-2 bg-gray-100 rounded-t-md">
            <i class="fa-solid fa-table" style="color: #7eaa92;"></i>
            <p class="text-sm font-medium text-putty-300">Daftar Data Hasil</p>
        </div>
        <div class="p-4">
            <table id="myHasilTable" class="display cell-border pt-6">
                <thead class="rounded">
                  <tr class="bg-putty-300 text-white">
                    <th class="w-10">No</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Min Support</th>
                    <th>Min Confidende</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="text-gray-500">
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">01/01/2021</td>
                    <td class="text-center">01/01/2021</td>
                    <td class="text-center">10</td>
                    <td class="text-center">50</td>
                    <td class="flex items-center justify-center space-x-2">
                        <a href="#" class="py-1 px-2.5 bg-green-400 rounded-sm text-white">
                            <i class="fa-solid fa-eye fa-sm"></i>
                          </a>
                          <a href="#" class="py-1 px-2.5 bg-blue-500 rounded-sm text-white">
                            <i class="fa-solid fa-print fa-sm"></i>
                          </a>
                    </td>
                  </tr>
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
    var table = $('#myHasilTable').DataTable({
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