@extends('layouts.master')
@section('title','Edit Barang')
@section('judul','Edit Barang')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
        <li class="breadcrumb-item active">Edit Barang</li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">


        <div class="card-tools">
        </div>
        </div>
        <div class="card-body">
            <form method="POST" action="/barang/{{$bar->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode</label>
                    <input type="text" readonly value="{{$bar->kode}}" class="form-control" name="kode">
                </div>
                <div class="mb-3">
                    <label class="form-label">Merk</label>
                    <input type="text"  value="{{$bar->merk}}" class="form-control" name="merk">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" value="{{$bar->nama}}" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" value="{{$bar->harga}}" class="form-control" name="harga">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga Barang</label>
                    <input type="number" value="{{$bar->qty}}" class="form-control" name="qty">
                </div>
                
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection