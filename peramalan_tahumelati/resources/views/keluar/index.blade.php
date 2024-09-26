@extends('master')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>List Barang Keluar</h6>
                    <a href="/keluar/create" class="btn btn-sm btn-primary">Tambah</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">NO.</th>
                                    <!-- <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">id produk</th> -->
                                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Penerima</th>
                                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Quantity</th>
                                    <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center">{{$loop->iteration}}</h6>
                                    </td>
                                    <!-- <td>
                                        <h6 class="mb-0 text-sm text-center">{{$item->idproduk}}</h6>
                                    </td> -->
                                    <td>
                                        <h6 class="mb-0 text-sm text-center">{{$item->tanggal}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center">{{$item->penerima}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center">{{$item->quantity}}</h6>
                                    </td>
                                    <td class="text-center">
                                        <a href="/keluar/edit/{{$item->idkeluar}}" class="btn btn-sm btn-primary">
                                            Edit
                                        </a>
                                        <form action="/keluar/delete/{{$item->idkeluar}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="{{$item->idkeluar}}">
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