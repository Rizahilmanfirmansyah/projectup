@extends('pembeli.layout')

@section('content')

   <div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 70rem;">
            <div class="card-body">
                <br>
                <h3 class="text-center">DATA PENJUAL E-KANTIN</h3>
                <br>
                <a href="{{route('penjual.create')}}" class="btn btn-success">Tambah</a>
                <br><br>
                <div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success " role="alert">
                        <strong><p>{{ $message }}</p></strong>
                        <div class="text-end">
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif
                </div>
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>FOTO</th>
                            <th>NAMA</th>
                            <th>NO TELEPON</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    @foreach ($penjuals as $item)
                    <tbody>
                        <tr> 
                            <td><img src="data:image/png;base64,{{ chunk_split(base64_encode($item->foto_penjual)) }}" height="100" width="100"></td>
                            <td>{{$item->nama_penjual}}</td>
                            <td>{{$item->no_tlp}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <form action="{{ route('penjual.destroy', $item->id_toko)}}" method="post">
            
                                     <a href="{{route('penjual.edit', $item->id_toko)}}" class="btn btn-success bi bi-pencil"></a>
                                     <a href="{{route('penjual.show', $item->id_toko)}}" class="btn btn-primary bi bi-file-text" ></a>
            
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger bi bi-trash"></button>
                
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
              
@endsection