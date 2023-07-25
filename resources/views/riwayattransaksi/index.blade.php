@extends('layouts.app')

@section('title', 'Riwayat Transaksi')

@section('content')

@include('components.sidebar')

<div class="grid grid-cols-12 gap-6 ml-64 p-4">    
    <div class="col-span-3 text-center font-semibold text-2xl rounded-md bg-gray-700 text-white py-2">
        <p>Riwayat Transaksi</p>
    </div>    
    <div class="relative col-span-12 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="py-3 px-6 uppercase text-base font-semibold text-left bg-blue-500 text-white dark:bg-gray-800">
                Penjualan Produk
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Bulan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Januari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Februari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Maret
                    </th>
                    <th scope="col" class="px-6 py-3">
                        April
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mei
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Juni
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Juli
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Agustus
                    </th>
                    <th scope="col" class="px-6 py-3">
                        September
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Oktober
                    </th>
                    <th scope="col" class="px-6 py-3">
                        November
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Desember
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Penjualan produk nomer 1
                    </th>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        10
                    </td>
                    <td class="px-6 py-4">
                        15
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Total
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="relative col-span-12 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="py-3 px-6 uppercase text-base font-semibold text-left bg-green-500 text-white dark:bg-gray-800">
                Nilai Penjualan Produk
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Bulan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Januari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Februari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Maret
                    </th>
                    <th scope="col" class="px-6 py-3">
                        April
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mei
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Juni
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Juli
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Agustus
                    </th>
                    <th scope="col" class="px-6 py-3">
                        September
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Oktober
                    </th>
                    <th scope="col" class="px-6 py-3">
                        November
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Desember
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Penjualan produk nomer 1
                    </th>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        10
                    </td>
                    <td class="px-6 py-4">
                        15
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Total
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="relative col-span-12 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="py-3 px-6 uppercase text-base font-semibold text-left bg-red-500 text-white dark:bg-gray-800">
                Pengeluaran
            </caption>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Bulan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Januari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Februari
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Maret
                    </th>
                    <th scope="col" class="px-6 py-3">
                        April
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mei
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Juni
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Juli
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Agustus
                    </th>
                    <th scope="col" class="px-6 py-3">
                        September
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Oktober
                    </th>
                    <th scope="col" class="px-6 py-3">
                        November
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Desember
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Penjualan produk nomer 1
                    </th>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        10
                    </td>
                    <td class="px-6 py-4">
                        15
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Total
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection