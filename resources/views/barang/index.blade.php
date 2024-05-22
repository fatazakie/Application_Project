
@extends('layouts.master')
@section('title','Halaman Dashboard')
@section('heading','Halaman Dashboard')
@section('content')
    <div class="card">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        <div class="card-header">
            <a href="/penjadwalan/form/" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tabel Barang</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Barang</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th> Merk</th>
                                    <th>Nama Barang</th>
                        
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bar as $item )
                                <tr>
                                    <td>{{ $nomor++ }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->merk }}</td>
                                    
                                    <td>
                                        <a href="/barang/edit/{{$item->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil-alt"></i></a>

                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{$item->kode}}">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="hapus{{$item->kode}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Yakin ingin menghapus data penjadwalan <b>{{$item->kelas}}</b>?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <form action="/barang/{{$item->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">Tidak Ada Data</td>
                        </tr>
                        @endforelse
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-footer-->
    </div>
@endsection