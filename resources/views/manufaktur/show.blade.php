@extends('manufaktur.layout')
@section('content')
<div class="container row">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h2>Show Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('manufaktur.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pegawai:</strong>
                {{ $manufaktur->nama_pegawai }}
            </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pemeriksaan:</strong>
                {{ $manufaktur->tanggal_pemeriksaan }}  
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mesin:</strong>
                {{ $manufaktur->nama_mesin }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Mesin:</strong>
                {{ $manufaktur->nomor_mesin }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kondisi Mesin:</strong>
                {{ $manufaktur->kondisi_mesin }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Komponen Mesin Yang Rusak:</strong>
                {{ $manufaktur->komponen_kerusakan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apakah Memerlukan Perawatan Besar:</strong>
                {{ $manufaktur->perawatan_besar }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catatan Operasional:</strong>
                {{ $manufaktur->catatan_kelayakan }}
            </div>
        </div>
</div>
@endsection
