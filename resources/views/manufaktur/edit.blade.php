@extends('manufaktur.layout')
@section('content')
<div class="container row ">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Data</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('manufaktur.index') }}"> Back</a>
        </div>      
        
    </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('manufaktur.update', $manufaktur->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Lengkap Pegawai:</strong>
                <input type="text" name="nama_pegawai" value="{{ $manufaktur->nama_pegawai }}" class="form-control" placeholder="Nama Pegawai">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Pemeriksaan:</strong>
                <input type="date" name="tanggal_pemeriksaan" value="{{ $manufaktur->tanggal_pemeriksaan }}" class="form-control" placeholder="Tanggal Pemeriksaan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mesin:</strong>
                <select name="nama_mesin" class="form-control">
                    <option value="1" {{ $manufaktur->nama_mesin == '1' ? 'selected' : '' }}>Milling</option>
                    <option value="2" {{ $manufaktur->nama_mesin == '2' ? 'selected' : '' }}>Milling CNC</option>
                    <option value="3" {{ $manufaktur->nama_mesin == '3' ? 'selected' : '' }}>Turning</option>
                    <option value="4" {{ $manufaktur->nama_mesin == '4' ? 'selected' : '' }}>Grinding</option>
                    <option value="5" {{ $manufaktur->nama_mesin == '5' ? 'selected' : '' }}>Welding</option>
                    <option value="6" {{ $manufaktur->nama_mesin == '6' ? 'selected' : '' }}>Drilling</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Mesin:</strong>
                <select name="nomor_mesin" class="form-control">
                    @for ($i = 1; $i <= 8; $i++)
                        <option value="{{ $i }}" {{ $manufaktur->nomor_mesin == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kondisi Mesin:</strong>
                <select name="kondisi_mesin" class="form-control">
                    <option value="Normal" {{ $manufaktur->kondisi_mesin == 'Normal' ? 'selected' : '' }}>Normal</option>
                    <option value="Bermasalah" {{ $manufaktur->kondisi_mesin == 'Bermasalah' ? 'selected' : '' }}>Bermasalah</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Komponen Mesin Yang Rusak:</strong>
                <input type="text" name="komponen_kerusakan" value="{{ $manufaktur->komponen_kerusakan }}" class="form-control" placeholder="Komponen Mesin Yang Rusak">    
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apakah Memerlukan Perawatan Besar:</strong>
                <select name="perawatan_besar" class="form-control">
                    <option value="Ya" {{ $manufaktur->perawatan_besar == 'Ya' ? 'selected' : '' }}>Ya</option>
                    <option value="Tidak" {{ $manufaktur->perawatan_besar == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catatan Operasional:</strong>
                <textarea class="form-control" style="height:150px" name="catatan_kelayakan" placeholder="Catatan Operasional">{{ $manufaktur->catatan_kelayakan }}</textarea>
            </div>
        </div>


        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('manufaktur.index') }}"> Submit</a>
        </div>
 </div>

    
</form>


@endsection