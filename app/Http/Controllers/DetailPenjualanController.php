<?php

namespace App\Http\Controllers;
use App\Models\detailpenjualan;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $id_penjualan = $id;
        $detailpenjualan = detailpenjualan::where('id_penjualan',$id)->select('*')->get();
        return view('home.detailpenjualan.index', compact('id_penjualan','detailpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $id_penjualan = $id;
        return view('home.detailpenjualan.tambah',compact('id_penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        detailpenjualan::create([
            'id_penjualan' => $request->id_penjualan,
            'id_menu' => $request->id_menu,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detailpenjualan = detailpenjualan::find($id);
        return view('home.detailpenjualan.edit', compact('detailpenjualan'));
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
        $detailpenjualan = detailpenjualan::find($id);
        $detailpenjualan->update([
            'id_penjualan' => $request->id_penjualan,
            'id_menu' => $request->id_menu,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'subtotal' => $request->subtotal,
        ]);
        return redirect('/detailpenjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailpenjualan = detailpenjualan::find($id);
        $detailpenjualan->delete();
        return redirect('/penjualan');
    }
}
