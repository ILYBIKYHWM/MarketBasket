@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @include('components.sidebar')

    <div class="grid grid-cols-12 gap-6 ml-64 p-4">
        <div class="flex col-span-3 bg-white">
            <div class="p-4 bg-red-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-2 align">
                <p>Jumlah Barang</p>
                <p>20</p>
            </div>
        </div>
        <div class="flex col-span-3 bg-white">
            <div class="p-4 bg-blue-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
            </div>
            <div class="ml-2 align">
                <p>Jumlah Transaksi</p>
                <p>100</p>
            </div>
        </div>
    </div>

@endsection
