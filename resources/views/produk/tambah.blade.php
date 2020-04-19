@extends('layouts.master')

@section('title')
    <title>Kelola Produk</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
            <a href="{{ url('/admin/produk/tambah') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Peoduk</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="varian">Varian</label>
                                <input type="text" name="varian" class="form-control" id="varian" placeholder="Varian Produk">
                            </div>
                            <div class="form-group">
                                <label for="varian">Varian</label>
                                <input type="text" name="varian" class="form-control" id="varian" placeholder="Varian Produk">
                            </div>
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" name="merk" class="form-control" id="merk" placeholder="Merk Produk">
                            </div>
                            <div class="form-group">
                                <label for="plat">Plat</label>
                                <input type="text" name="plat" class="form-control" id="plat" placeholder="Plat Kendaraan">
                            </div>
                            <div class="form-group">
                                <label for="varian">Varian</label>
                                <input type="text" name="varian" class="form-control" id="varian" placeholder="Varian Produk">
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <button class="btn btn-primary btn-sm">Simpan Produk</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

