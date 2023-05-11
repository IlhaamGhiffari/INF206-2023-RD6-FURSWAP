<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = produk::all();

        return view('dashboard', ['allProducts' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahkanproduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama = $request->input('nama');
        $produk->jenis = $request->input('jenis');
        $produk->jumlah = $request->input('jumlah');
        $produk->deskripsi = $request->input('deskripsi');
    
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoBarang/', $request->file('foto')->getClientOriginalName());    
            $produk->foto = $request->file('foto')->getClientOriginalName();
        }
    
        $produk->save();
    
        return redirect('/produks');
    }
    
    
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $product = produk::find($id);

    if (!$product) {
        return redirect('/produks')->with('error', 'Product not found.');
    }

    return view('deskripsiproduk', ['product' => $product]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
