@extends('pembeli.layout')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 40rem;">
                <div class="card-header">
                    Tambah
                </div>
                <div class="card-body">
                    <form action="{{route('penjual.create')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Foto">UPLOAD FOTO</label>
                            <input type="file" class="form-control" name="foto_penjual">
                        </div>
                        <div class="form-group">
                            <label for="nama">NAMA PENJUAL</label>
                            <input type="text" class="form-control" name="nama_penjual">
                        </div>
                        <div class="form-group">
                            <label for="nama">NOMOR TELEPON</label>
                            <input type="text" class="form-control" name="no_tlp">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection