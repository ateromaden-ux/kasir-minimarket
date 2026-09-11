<?php

use Illuminate\Support\Facades\Route;

Route::get('/produk-toko', function () {
    $produk = [
        [
            'nama' => 'Beras',
            'sku' => 'BR001',
            'harga' => 60000,
            'stok' => 20,
            'foto' => '/images/Beras.jpg'
        ],
        [
            'nama' => 'Minyak Goreng',
            'sku' => 'MG002',
            'harga' => 15000,
            'stok' => 35,
            'foto' => 'https://images.unsplash.com/photo-1474979266404-7eaacbcd87c5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y29va2luZyUyMG9pbHxlbnwwfHwwfHx8MA%3D%3D'
        ],
        [
            'nama' => 'Gula Pasir',
            'sku' => 'GL003',
            'harga' => 12000,
            'stok' => 40,
            'foto' => '/images/Sugar.jpg'
        ],
    ];

    return view('daftar_produk', ['produk' => $produk]);
});
