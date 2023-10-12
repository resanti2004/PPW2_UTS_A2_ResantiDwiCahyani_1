@extends('layout.master')
<!-- @include('include.navbar') -->

@section('title', 'Data Pemain')
@section('header', 'Data Pemain')

@section('content')
    <div class="container">
        <table border="1px" class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama Pemain</th>
                    <th>No Punggung</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_pemain as $pemain)
                    <tr> 
                        <td>{{ $pemain->id }}</td> 
                        <td> {{ $pemain->nama_pemain }} </td>
                        <td> {{ $pemain->no_panggung }} </td>
                        <td>{{ $pemain->posisi}}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection