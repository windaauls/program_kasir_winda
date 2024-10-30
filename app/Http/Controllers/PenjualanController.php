<?php

namespace App\Http\Controllers;
use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\detailpenjualan;

use Illuminate\Http\Request;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = penjualan::all();
        return view('home.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = pelanggan::all();
        return view('home.penjualan.tambah',compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        penjualan::create([
            'nama_customer' => $request->nama_customer,
            'total' => $request->total,
            'tanggal_transaksi' => $request->tanggal_transaksi,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = penjualan::find($id);
        return view('home.penjualan.edit', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penjualan = penjualan::find($id);
        $penjualan->update([
            'nama_customer' => $request->nama_customer,
            'total' => $request->total,
            'tanggal_transaksi' => $request->tanggal_transaksi,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan = penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }
    public function struk($id)
    {
    $penjualan = detailpenjualan::find($id);
    return view('home.penjualan.struk', compact('penjualan'));
    }
}
