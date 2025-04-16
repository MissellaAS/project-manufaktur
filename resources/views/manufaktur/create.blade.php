@extends('manufaktur.layout')

@section('content')

<div class ="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Data Mesin</h2>

    <!-- @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    
    <form action="{{ route('manufaktur.store') }}" method="POST">

        @csrf
        <div class="mb-4">
            <label for="nama_pegawai" class="block text-gray-700">Nama Lengkap Pegawai </label>
            <input type="text" name="nama_pegawai" id="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>

        <div class="mb-4">
        <label for="tanggal_pemeriksaan" class="block text-gray-700">Tanggal Pemeriksaan</label>
        <input type="date" name="tanggal_pemeriksaan" id="tanggal_pemeriksaan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>
        
        <div class="mb-4" >
        <label for="nama_mesin" class="block text-gray-700">Nama Mesin</label>
        <select name="nama_mesin" id="nama_mesin"> 
            <option value="1">Milling</option>
            <option value="2">Milling CNC</option>
            <option value="3">Turning</option>
            <option value="4">Grinding</option>
            <option value="5">Welding</option>
            <option value="6">Drilling</option>
        </select>
        </div>

        <div class="mb-4">
        <label for="nomor_mesin" class="block text-gray-800">Nomor Mesin</label>
        <select name="nomor_mesin" id="nomor_mesin">>
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

        <label for="kondisi_mesin" class="block text-gray-700">Kondisi Mesin</label>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="kondisi_mesin" id="kondisi_normal" value="Normal">
        <label class="form-check-label" for="kondisi_normal">Normal</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="kondisi_mesin" id="kondisi_bermasalah" value="Bermasalah" checked>
        <label class="form-check-label" for="kondisi_bermasalah">Bermasalah</label>
        </div>

        <div class="mb-4">
            <label for="komponen_kerusakan" class="block text-gray-700">Komponen Kerusakan Mesin</label>
            <input type="text" name="komponen_kerusakan" id="komponen_kerusakan" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
        </div>

        <label for="memerlukan_perawatanbesar_atau_tidak" class="block text-gray-700">Apakah Memerlukan Perawatan Besar Atau Tidak</label>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="memerlukan_perawatanbesar_atau_tidak" id="perawatan_tidak" value="Ya">
        <label class="form-check-label" for="memerlukan_perawatanbesar_atau_tidak">Ya</label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="memerlukan_perawatanbesar_atau_tidak" id="perawatan_iyaDS" value="Tidak" checked>
        <label class="form-check-label" for="memerlukan_perawatanbesar_atau_tidak">Tidak</label>
        </div>

        <div class="mb-4">
            <label for="catatan_kelayakan_operasional" class="block text-gray-700">Catatan Kelayakan Operasional</label>
            <textarea class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required></textarea>
        </div>

        <div class= "mb-4">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
        </div>

    </form>
</div>

    


@endsection

