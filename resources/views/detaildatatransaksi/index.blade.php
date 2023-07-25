@extends('layouts.app')

@section('title', 'Detail Data Transaksi')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 gap-6 ml-64 p-4">
    <div class="col-span-3 text-center font-semibold text-2xl rounded-md bg-gray-700 text-white py-2">
        <p>Detail Data Transaksi</p>
    </div>    
    <div class="relative col-span-12 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga Jual
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SKU
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stok Awal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Penjualan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Barang Masuk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Stok Tersedia
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        10
                    </td>
                    <td class="px-6 py-4">
                        10
                    </td>
                    <td class="px-6 py-4">
                        10
                    </td>
                    <td class="px-6 py-4">
                        10
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection