@extends('pembeli.layout')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>FOTO </th>
                <th>NAMA</th>
                <th>FOTO PEMBELI</th>
            </tr>
            <tr>
                @foreach ($collection as $item)
                <td></td>
                <td></td>
                <td></td>
                @endforeach
            </tr>
        </table>
    </div>
@endsection