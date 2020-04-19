@extends('layouts.master')

@section('title')
    <title>Kelola Produk</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Produk</h1>
            <a href="{{ url('/admin/produk/tambah') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Peoduk</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="offset-9 col-md-3 mb-3">
                            <input type="text" name="q" class="form-control" placeholder="Cari...">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <th>#</th>
                                    <th>Varian</th>
                                    <th>Merk</th>
                                    <th>Plat</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @forelse($produk as $item)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
