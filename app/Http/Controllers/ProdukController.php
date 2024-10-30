<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = produk::all();
        return view('home.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.produk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:7000',
            'nama_produk' => 'required|min:5',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',


            
         ]);
         $image = $request->file('gambar');
         $image->storeAs('products', $image->hashName(),'public');

        produk::create([
            'gambar' =>$image->hashName(),
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = produk::find($id);
        return view('home.produk.edit', compact('produk'));
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
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:7000',
            'nama_produk' => 'required|min:5',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
         ]);
         $produk = produk::find($id);

         if($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('products', $image->hashName(),'public');


            storage::delete('public/products/' . $produk->gambar);

            $produk->update([
                'gambar' => $image->hashName(),
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'stok' => $request->stok,
            ]);
            return redirect('/produk')->with('success', 'Data berhasil diubah!.');
         }else{
            $produk->update([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'stok' => $request->stok,
            ]);
            return redirect('/produk')->with('success', 'Data berhasil diubah!.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = produk::find($id);
        $produk->delete();
        return redirect('/produk');
    }
}
