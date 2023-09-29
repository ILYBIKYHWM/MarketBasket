@extends('layouts.app')

@section('title', 'Data Barang')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 gap-6 ml-64 p-4">    
    <div class="col-span-12 flex justify-between items-center">
        <div class="flex items-center space-x-2 ml-2 text-gray-500">
            <i class="fa-solid fa-box fa-xl"></i> 
            <p class="text-2xl">Data Barang</p>
        </div>
        <div class="flex space-x-2">
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
                          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Data Barang</h3>
                          <form class="space-y-6" action="{{ route('databarang.store') }}" method="POST">
                                @csrf
                                <div>
                                    <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
                                    <input type="text" name="nama_barang" id="nama_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                </div>
                                <button type="submit" class="w-full text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Data Barang</button>                              
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
            <p class="text-sm font-medium text-putty-300">Daftar Data Barang</p>
        </div>
        <div class="p-4">
            <table class="min-w-full border border-gray-300">
                <thead class="bg-putty-300 text-white">
                  <tr>
                    <th class="py-2 w-12 border">No</th>
                    <th class="py-2 px-4 border">Kode Barang</th>
                    <th class="py-2 px-4 border">Nama Barang</th>
                    <th class="py-2 px-4 border">Aksi</th>
                  </tr>
                </thead>
                <tbody class="text-gray-800">
                @php $no = 1 @endphp
                @foreach ($barang as $b)
                    <tr>
                        <td class="py-2 px-4 border text-center">{{ $no++ }}</td>
                        <td class="py-2 px-4 border text-center">{{ $b->kode_barang }}</td>
                        <td class="py-2 px-4 border text-center">{{ $b->nama_barang }}</td>
                        <td class="py-2 px-4 border flex justify-center space-x-2">
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

@endsection