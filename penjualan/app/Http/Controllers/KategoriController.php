<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_produk = new KategoriProduk();
        return view('admin.kategoriproduk.kategori_produk', ['kategori_produk' => $kategori_produk->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        return view('admin.kategoriproduk.create', compact('kategori_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori_produk = new KategoriProduk();
        $kategori_produk->nama = $request->nama; 
        $kategori_produk->save();
        return redirect('admin/kategoriproduk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->where('id', $id)->get();
        return view('admin.kategoriproduk.edit', compact('kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori_produk = KategoriProduk::find($request->id);
        $kategori_produk->nama = $request->nama; 
        $kategori_produk->save();
        return redirect('admin/kategoriproduk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori_produk')->where('id',$id)->delete();
        return redirect('admin/kategoriproduk');
    }
}
