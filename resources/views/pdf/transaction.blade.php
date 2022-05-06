@extends('layouts.front')

@section('title', ' Detail')

@section('content')
    <section class="container py-4">
        <div class="flex justify-between items-center">
            <img src="{{ asset('frontend/images/main-logo.png') }}" class="w-24" alt="logo">
            <div class="flex flex-col text-right">
                <h1 class="font-medium text-lg">INVOICE</h1>
                <h1 class="font-bold text-xl">BRJ-12121212</h1>
            </div>
        </div>
        <div class="border-2 rounded-md border-indigo-500/100 my-4 p-4">
            <div class="" style="background-color: red;">
                <h5>Nama : Bertjorak</h5>
            </div>
        </div>
    </section>

@endsection




{{-- <!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

    </style>
    <center>
        <h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
            <h6><a target="_blank"
                    href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a>
        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Pekerjaan</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($transaksi as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->title }}</td>
                    <td>{{ $p->price }}</td>
                    <td>{{ $p->stock }}</td>
                    <td>{{ $p->jumlaj }}</td>
                    <td>{{ $p->desc }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html> --}}
