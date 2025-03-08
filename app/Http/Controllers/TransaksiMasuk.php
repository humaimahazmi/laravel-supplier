<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\http\Controllers\TransaksiMasukController;
use App\Models\TransaksiMasuk;

class TransaksiMasukController extends Controller
{
    public function index()
    {
        $transaksimasuk = TransaksiMasuk::all();

        return response()->json([
            'status' => 200,
            'message' => 'Transaksi Masuk retrieved successfully.',
            'data' => $transaksimasuk
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Id_Barang' => 'required|string|max:255',
            'Id_Supplier' => 'required|string|max:255',
            'Tanggal' => 'required|string|max:255',
            'Jumlah' => 'required|string|max:255',
            'Harga Beli' => 'required|string|max:255'
        ]);

        $transaksimasuk = TransaksiMasuk::create($request->all());

        return response()->json([
            'status' => 201,
            'message' => 'Transaksi Masuk created successfully.',
            'data' => $transaksimasuk
        ], 201);
    }

    public function show($id)
    {
        $transaksimasuk = TransaksiMasuk::find($id);

        if (!$transaksimasuk) {
            return response()->json([
                'status' => 404,
                'message' => 'Transaksi Masuk not found.',
                'data' => null
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Transaksi Masuk retrieved successfully.',
            'data' => $transaksimasuk
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $transaksimasuk = TransaksiMasuk::find($id);

        if (!$transaksimasuk) {
            return response()->json([
                'status' => 404,
                'message' => 'Transaksi Masuk not found.',
                'data' => null
            ], 404);
        }

        $request->validate([
            'Id_Barang' => 'required|string|max:255',
            'Id_Supplier' => 'required|string|max:255',
            'Tanggal' => 'required|string|max:255',
            'Jumlah' => 'required|string|max:255',
            'Harga Beli' => 'required|string|max:255'
        ]);
        $transaksimasuk->update($request->all());

        return response()->json([
            'status' => 200,
            'message' => 'Transaksi Masuk updated successfully.',
            'data' => $transaksimasuk
        ], 200);
    }

    public function destroy($id)
    {
        $transaksimasuk = TransaksiMasuk::find($id);

        if (!$transaksimasuk) {
            return response()->json([
                'status' => 404,
                'message' => 'Transaksi Masuk not found.',
                'data' => null
            ], 404);
        }

        $transaksimasuk->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Transaksi Masuk deleted successfully.',
            'data' => null
        ], 200);
    }
}
