@extends('pembeli.layout')

@section('content')

<br><br><br>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <div class="card-header">
                DETAIL DATA PENJUAL
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>FOTO</td>
                        <td>:</td>
                        <td><img src="data:image/png;base64,{{ chunk_split(base64_encode($penjual->foto_penjual)) }}" height="100" width="100"></td>
                    </tr>
                    <tr>
                        <td>NAMA PENJUAL</td>
                        <td>:</td>
                        <td>{{$penjual->nama_penjual}}</td>
                    </tr>
                    <tr>
                        <td>NOMOR TELEPON</td>
                        <td>:</td>
                        <td>{{$penjual->no_tlp}}</td>
                    </tr>
                </table>
                <br>
                <a href="{{route('penjual.index')}}" class="btn btn-success">Kembali</a>
            </div>
        </div>
    </div>

</div>
    
@endsection