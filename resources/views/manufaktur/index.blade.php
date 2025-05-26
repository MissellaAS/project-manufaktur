@extends('manufaktur.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center mb-4">Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri</h1>
</div>
<div class="col-md-12">
    <div class="card shadow-lg rounded-lg">
        <div class="card-body">
            <h2 class="text-center mb-4">Daftar Pemeriksaan Mesin</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Tanggal Pemeriksaan</th>
                        <th>Nama Mesin</th>
                        <th>Nomor Mesin</th>
                        <th>Kondisi Mesin</th>
                        <th>Perawatan Besar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($manufakturs as $manufaktur)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $manufaktur->nama_pegawai }}</td>
                            <td>{{ $manufaktur->tanggal_pemeriksaan }}</td>
                            <td>{{ $manufaktur->nama_mesin }}</td>
                            <td>{{ $manufaktur->nomor_mesin }}</td>
                            <td>{{ $manufaktur->kondisi_mesin }}</td>
                            <td>{{ $manufaktur->perawatan_besar}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <endsection('content')
    