@extends('manufaktur.layout')

@section('content')

<div class=" container mx-auto mt-5 bg-gradient-to-br from-indigo-100 via-white to-blue-50 p-10 rounded-2xl shadow-2xl max-w-4xl mx-auto mt-10 border border-blue-200">
    <h2 class="text-2xl font-bold mb-4 text-center">
  Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri
</h2>
    <h2 class="text-4xl font-extrabold text-center text-indigo-800 mb-10">🛠️ Pemeriksaan Mesin</h2>

    <form action="{{ route('manufaktur.store') }}" method="POST" class="space-y-8">
        @csrf

        {{-- Nama Pegawai --}}
        <div class="flex items-center gap-12">
            <label for="nama_pegawai" class="w-48 text-lg font-semibold text-gray-900">Nama Pegawai</label>
            <input type="text" name="nama_pegawai" id="nama" required
                class="flex-grow max-w-md px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-400 transition">
        </div>

        {{-- Tanggal Pemeriksaan --}}
        <div class="flex items-center gap-12">
            <label for="tanggal_pemeriksaan" class="w-48 text-lg font-semibold text-gray-900">Tanggal</label>
            <input type="date" name="tanggal_pemeriksaan" id="tanggal_pemeriksaan" required
                class="flex-grow max-w-sm px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-400 transition">
        </div>

        {{-- Nama Mesin --}}
        <div class="flex items-center gap-12">
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
        <div class="flex items-center gap-12">
            <label for="nomor_mesin" class="w-48 text-lg font-semibold text-gray-900">Nomor Mesin</label>
            <select name="nomor_mesin" id="nomor_mesin"
                class="flex-grow max-w-xs px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-400 transition">
                @for ($i = 1; $i <= 8; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        {{-- Kondisi Mesin --}}
        <div class="flex items-center gap-12">
            <label class="w-48 text-lg font-semibold text-gray-900">Kondisi Mesin</label>
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
        <div class="flex items-center gap-12">
            <label for="komponen_kerusakan" class="w-48 text-lg font-semibold text-gray-900">Komponen Rusak</label>
            <input type="text" name="komponen_kerusakan" id="komponen_kerusakan" required
                class="flex-grow max-w-md px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-red-300 transition">
        </div>

        {{-- Perawatan Besar --}}
        <div class="flex items-center gap-12">
            <label class="w-48 text-lg font-semibold text-gray-900">Perawatan Besar?</label>
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

        {{-- Catatan --}}
        <div class="flex items-start gap-12">
            <label for="catatan_kelayakan" class="w-48 pt-2 text-lg font-semibold text-gray-900"> Catatan Operasional </label>
            <textarea name="catatan_kelayakan" id="catatan_kelayakan" rows="4" required
                class="flex-grow max-w-md px-5 py-3 border border-gray-300 rounded-xl shadow-inner focus:ring-2 focus:ring-indigo-400 transition resize-y"></textarea>
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end gap-4 pt-6">
            <button type="submit"
                class="px-6 py-2 bg-blue-500 text-black font-semibold rounded-lg hover:bg-blue-600 transition">
                ✅ Submit
            </button>
            <button type="reset"
                class="px-6 py-2 bg-red-500 text-black font-semibold rounded-lg hover:bg-red-600 transition">
                🔄 Reset
            </button>
        </div>
    </form>
</div>

@endsection
