@extends('manufaktur.layout')

@section('content')

<div class ="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Data Mesin</h2>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('manufaktur.store') }}" method="POST">

        @csrf
        <div class="mb-4">
            <label for="nama pegawai" class="block text-gray-700">Nama Lengkap Pegawai </label>
            <input type="text" name="nama pegawai" id="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>
        
        <div class="mb-4">
        <label for="nama mesin" class="block text-gray-700">Nama Mesin</label>
        <select>
            <option value="1">Milling</option>
            <option value="2">Milling CNC</option>
            <option value="3">Turning</option>
            <option value="4">Grinding</option>
            <option value="5">Welding</option>
            <option value="6">Drilling</option>
        </select>
        </div>

        <div class="mb-4">
        <label for="nomor mesin" class="block text-gray-700">Nomor Mesin</label>
        <select>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
        </div>

        <label for="kondisi mesin" class="block text-gray-700">Kondisi Mesin</label>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="kondisi_mesin" id="kondisi_normal" value="Normal">
        <label class="form-check-label" for="kondisi_normal">Normal</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="kondisi_mesin" id="kondisi_bermasalah" value="Bermasalah" checked>
        <label class="form-check-label" for="kondisi_bermasalah">Bermasalah</label>
        </div>

        <div class="mb-4">
            <label for="komponen kerusakan" class="block text-gray-700">Komponen Kerusakan Mesin</label>
            <input type="text" name="nama pegawai" id="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>

        <label for="kondisi mesin" class="block text-gray-700">Apakah Memerlukan Perawatan Besar</label>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">Ya</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">Tidak</label>
        </div>

        <div class="mb-4">
            <label for="catatan kelayakan operasional" class="block text-gray-700">Catatan Kelayakan Operasional</label>
            <input type="text" name="nama pegawai" id="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>

        <div>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="submit" class="btn btn-danger">Reset</button>
        </div>
</div>
    </form>

@endsection