<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' => $produk->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //tampilkan seluruh data table kategori produk
        $kategori_produk = KategoriProduk::all();
        //tampilkan seluruh data table produk
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //buat instance/instan/class baru dari model/class produk
        //ambil data yang diinputkan user dengan menggunakan parameter request
        //lalu masukkan kedalam kolom table produk
        //save data yang sudah diambil menggunakann parameter request dengan method save()
        //kembalikan ke tampilan view produk setelah mengklik buttonn simpan
        $produk = new Produk();
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
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
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.produk.edit', compact('produk', 'kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //ambil instance class baru dari model yang bernama produk
        //ambil data yang diinputkan user dengan menggunakan parameter request
        //lalu masukkan kedalam kolom tabel produk
        //save data yang sudah diambil menggunakan parameter request dengan method
        //kembalikan ke tampilan view produk setelah mengklik button simpan
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli= $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok= $request->min_stok;
        $produk->deskripsi= $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //buka table produk
        //cari data yang ingin dihapus berdasrkan id nya
        //hapus data menggunakan methode delete()
        DB::table('produk')->where('id', $id)->delete();
        return redirect('admin/produk');
    }
}
