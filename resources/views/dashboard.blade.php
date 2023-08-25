@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @include('components.sidebar')

    <div class="grid grid-cols-12 gap-6 ml-64 p-4">
        <div class="col-span-12 flex items-center text-gray-500 space-x-2 ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
            </svg>
            <p class="text-2xl">Dashboard</p>
        </div>
        <div class="flex justify-between items-center col-span-4 bg-white px-4 py-6 border-l-4 border-putty-400 rounded-sm text-gray-500">
            <p class="font-medium text-xl">Data Transaksi</p>
            <i class="fa-solid fa-money-bill-wave fa-2xl"></i>
        </div>
        <div class="flex justify-between items-center col-span-4 bg-white px-4 py-6 border-l-4 border-putty-400 rounded-sm text-gray-500">
            <p class="font-medium text-xl">Data Proses</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>              
        </div>
        <div class="flex justify-between items-center col-span-4 bg-white px-4 py-6 border-l-4 border-putty-400 rounded-sm text-gray-500">
            <p class="font-medium text-xl">Data Hasil</p>
            <i class="fa-solid fa-coins fa-2xl"></i>
        </div>        
    </div>

@endsection
