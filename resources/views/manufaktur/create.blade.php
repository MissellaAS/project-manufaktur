@extends('manufaktur.layout')

@section('content')

<div class="container transition-all duration-700 ease-in-out transform hover:scale-[1.005] shadow-2xl hover:shadow-indigo-300/50 ">
    <div class="mb-12 text-center">
       
        <hr class="mt-6 border-indigo-400 w-1/2 mx-auto">
    </div>
    
    <h2 class="text-4xl font-extrabold text-center text-indigo-800 mb-10">🛠️ Form Pemeriksaan Mesin</h2>

    <form action="{{ route('manufaktur.store') }}" method="POST" class="space-y-8">
        @csrf

        {{-- Nama Pegawai --}}
        <div class="row flex items-center gap-12">
            <label for="nama_pegawai" class="w-48 text-lg font-semibold text-gray-900">Nama Lengkap Pegawai</label>
            <input type="text" name="nama_pegawai" id="nama" required class="flex-grow max-w-md px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-400 transition" placeholder="Masukkan Nama Anda">
        </div>

        {{-- Tanggal Pemeriksaan --}}
        <div class="row flex items-center gap-12">
            <label for="tanggal_pemeriksaan" class="w-48 text-lg font-semibold text-gray-900">Tanggal Pemeriksaan</label>
            <input type="date" name="tanggal_pemeriksaan" id="tanggal_pemeriksaan" required class="flex-grow max-w-sm px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-400 transition">
        </div>

        {{-- Nama Mesin --}}
        <div class="row flex items-center gap-12">
            <label for="nama_mesin" class="w-48 text-lg font-semibold text-gray-900">Nama Mesin</label>
            <select name="nama_mesin" id="nama_mesin"
                class="flex-grow max-w-md px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-400 transition">
                <option value="">-- Pilih Mesin --</option>
                <option value="1">Milling</option>
                <option value="2">Milling CNC</option>
                <option value="3">Turning</option>
                <option value="4">Grinding</option>
                <option value="5">Welding</option>
                <option value="6">Drilling</option>
            </select>

            
        </div>

        {{-- Nomor Mesin --}}
        <div class="row flex items-center gap-12">
            <label for="nomor_mesin" class="w-48 text-lg font-semibold text-gray-900">Nomor Mesin</label>
            <select name="nomor_mesin" id="nomor_mesin"class="flex-grow max-w-xs px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-400 transition">
                 <option value="">-- Pilih Nomor Mesin --</option>
                @for ($i = 1; $i <= 8; $i++)
                   
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        {{-- Kondisi Mesin --}}
        <div class="row flex items-center gap-12">
            <label class="w-48 text-lg font-semibold text-gray-900">Kondisi Kelayakan Mesin</label>
            <div class="flex gap-6">
                <label class="inline-flex items-center">
                    <input type="radio" name="kondisi_mesin" value="Normal" class="form-radio text-green-600">
                    <span class="ml-2 text-gray-800">Normal</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="kondisi_mesin" value="Bermasalah" checked class="form-radio text-red-600">
                    <span class="ml-2 text-gray-800">Bermasalah</span>
                </label>
            </div>
        </div>

        {{-- Komponen Rusak --}}
        <div class="row flex items-center gap-12">
            <label for="komponen_kerusakan" class="w-48 text-lg font-semibold text-gray-900">Komponen Kerusakan Mesin</label>
            <input type="text" name="komponen_kerusakan" id="komponen_kerusakan" required class="flex-grow max-w-md px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-red-300 transition" placeholder="Jenis Komponen yang Rusak">
        </div>

        {{-- Perawatan Besar --}}
        <div class="row flex items-center gap-12">
            <label class="w-48 text-lg font-semibold text-gray-900">Apakah Memerlukan Perawatan Besar?</label>
            <div class="flex gap-6">
                <label class="inline-flex items-center">
                    <input type="radio" name="perawatan_besar" value="Ya" class="form-radio text-blue-600">
                    <span class="ml-2 text-gray-800">Ya</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="perawatan_besar" value="Tidak" checked class="form-radio text-blue-600">
                    <span class="ml-2 text-gray-800">Tidak</span>
                </label>
            </div>
        </div>
    <div class="flex flex-col space-y-16">
        {{-- Catatan --}}
        <div class="row flex items-start gap-12">
            <label for="catatan_kelayakan" class="w-48 pt-2 text-lg font-semibold text-gray-900"> Catatan Operasional </label>
            <textarea name="catatan_kelayakan" id="catatan_kelayakan" rows="4" required class="flex-grow max-w-md px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-400 transition resize-y" placeholder="Informasi Pendukung Lainnya" ></textarea>
        </div>
        <br><br>
        {{-- Tombol --}}
        <div class="flex justify-endmt-8">

            <button type="submit" class="px-6 py-2 bg-blue-500 text-black font-semibold rounded-lg hover:bg-blue-600 transition">✅ Submit</button>
            <button type="reset" class="px-6 py-2 bg-red-500 text-black font-semibold rounded-lg hover:bg-red-600 transition">🔄 Reset</button>
        </div>
    </div>
    </form>
</div>

@endsection
