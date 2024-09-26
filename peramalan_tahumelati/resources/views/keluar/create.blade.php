@extends('master')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Barang Keluar</h6>
                </div>
                <form class="card-body px-4" action="/keluar" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id Produk</label>
                        <select name="idproduk" class="form-control">
                            @foreach($barang as $item)
                            <option value="{{$item->idproduk}}">{{$loop->iteration}} - {{$item->namabarang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penerima</label>
                        <input type="text" class="form-control" name="penerima">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="text" class="form-control" name="quantity">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('footer')
</div>
@endsection