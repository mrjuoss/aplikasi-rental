<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::orderBy('created_by', 'DESC')->paginate(20);
        return view('produk.index', compact('produk'));
    }

    public function tambah()
    {
        return view('produk.tambah');
    }
}
