<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiMasukController;
use App\Http\Controllers\SupplierController;

Route::apiResource('transaksi_masuks', TransaksiMasukController::class);
Route::apiResource('suppliers', SupplierController::class);