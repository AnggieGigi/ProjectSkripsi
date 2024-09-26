@extends('master')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    @foreach($peramalan as $itemFt)
                    <div>
                        <h3>Alpha 0,{{$loop->iteration}} dengan MAPE {{$avgmape[$loop->index]}}%</h3>
                    </div>
                    <div class="table-responsive p-0">
                    <!-- style="background-color: #80B9AD;" warna background forecast--> 
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase kolom-forecast text-center text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                                    <th class="text-uppercase kolom-forecast text-center text-xxs font-weight-bolder opacity-7 ps-2">Periode</th>
                                    <th class="text-uppercase kolom-forecast text-center text-xxs font-weight-bolder opacity-7 ps-2">Penjualan Tahu</th>
                                    <th class="text-uppercase kolom-forecast text-center text-xxs font-weight-bolder opacity-7 ps-2">S'_t</th>
                                    <th class="text-uppercase kolom-forecast text-center text-xxs font-weight-bolder opacity-7 ps-2">S"_t</th>
                                    <th class="text-uppercase kolom-forecast text-center text-xxs font-weight-bolder opacity-7 ps-2">a_t</th>
                                    <th class="text-uppercase kolom-forecast text-center text-xxs font-weight-bolder opacity-7 ps-2">b_t</th>
                                    <th class="text-uppercase kolom-forecast text-center text-xxs font-weight-bolder opacity-7 ps-2">Forecasting</th>
                                    <th class="text-uppercase kolom-forecast text-center text-xxs font-weight-bolder opacity-7 ps-2">MAPE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($itemFt as $item)
                                <tr>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center" style="color: #000000;">{{$item['tanggal']}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center"style="color: #000000;">{{$loop->iteration}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center" style="color: #000000;">{{$item['penjualan']}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center" style="color: #000000;">{{$item['st1']}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center" style="color: #000000;">{{$item['st2']}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center" style="color: #000000;">{{$item['at']}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center" style="color: #000000;">{{$item['bt']}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center" style="color: #000000;">{{$item['forecasting']}}</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm text-center" style="color: #000000;">{{$item['mape']}}</h6>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</div>
@endsection