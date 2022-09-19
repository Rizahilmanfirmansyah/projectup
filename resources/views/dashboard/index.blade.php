@extends('pembeli.layout')

@section('content')
<br><br><br>

    <div class="container">
        <div class="">
            
            {{-- <div class="card text-center" style="width: 24rem;">
                <div class="card-header">
                    JUMLAH PENJUAL
                </div>
                <div class="card-body">
                    <p>{{$countpenjual}}</p>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                    <div class="inner">
                    <h3>{{$countpembeli}}</h3>
                    <p>Jumlah Penjual</p>
                    </div>
                    <div class="icon">
                    <i class="bi bi-person"></i>
                    <br>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    </div>
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-info">
                        <div class="inner">
                        <h3>{{$countpenjual}}</h3>
                        <p>Jumlah Penjual</p>
                        </div>
                        <div class="icon">
                        <i class="bi bi-person"></i>
                        </div>
                        <br>
                        <a href="{{route('penjual.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>
                
            </div>
   
    </div>
</div>
@endsection