@extends('master')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>List Barang</h6>
                    <a href="/barang/create" class="btn btn-sm btn-primary">Tambah</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">No.</th>
                                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Stok</th>
                                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center">{{$loop->iteration}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center">{{$item->namabarang}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center">{{$item->stok}}</h6>
                                    </td>
                                    <td class="text-center">
                                        <a href="/barang/edit/{{$item->idproduk}}" class="btn btn-sm btn-primary">
                                            Edit
                                        </a>
                                        <form action="/barang/delete/{{$item->idproduk}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="{{$item->idproduk}}">
                                            <button {{auth()->user()->role == 'karyawan' ? 'hidden' : ''}} onclick="return confirm('Apakah anda yakin untuk menghapus item ini?')" type="submit" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</div>
@endsection