@extends('manufaktur.layout')
@section('content')
       <h2 class="container text-2xl font-bold mb-4 text-center">
  Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri
</h2>

<div class='row p-5'>
    <div class='col-lg-12 margin-tb'>
        <div class='pull-left'>
             <h2 class="text-2xl font-bold mb-4"></h2>
        </div>
        <div class='pull-right mb-2'>
            <a class="btn btn-success" href="{{ route('manufaktur.create') }}"> Create New Data</a>
        </div>
        @if ($messege = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $messege }}</p>
    </div>
@endif
    <div class="bg-white shadow-md rounded-lg p-6">
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
                        <td>
                            {{-- Action Buttons --}}
                            <form action="{{ route('manufaktur.destroy', $manufaktur->id) }}" method="POST" class="d-inline">
                                <a class="btn btn-info btn-sm" href="{{ route('manufaktur.show', $manufaktur->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('manufaktur.edit', $manufaktur->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>


@endsection('content')
    