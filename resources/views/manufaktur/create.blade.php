@extends('manufaktur.layout')

@section('content')

<div class="bg-gradient-to-br from-indigo-100 via-white to-blue-50 p-10 rounded-2xl shadow-2xl max-w-4xl mx-auto mt-10 border border-blue-200">
    <h2 class="text-4xl font-extrabold text-center text-indigo-800 mb-10">🛠️ Pemeriksaan Mesin</h2>

    <form action="{{ route('manufaktur.store') }}" method="POST" class="space-y-6">
        @csrf

        {{-- Nama Pegawai --}}
        <div>
            <label for="nama_pegawai" class="block text-lg font-semibold text-gray-900"> Nama Lengkap Pegawai</label>
            <input type="text" name="nama_pegawai" id="nama" required
                class="mt-2 w-full px-5 py-3 border border-gray-300 rounded-xl bg-white shadow-inner focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400 transition">
        </div>

        {{-- Tanggal Pemeriksaan --}}
        <div>
            <label for="tanggal_pemeriksaan" class="block text-lg font-semibold text-gray-900"> Tanggal Pemeriksaan</label>
            <input type="date" name="tanggal_pemeriksaan" id="tanggal_pemeriksaan" required
                class="mt-2 w-full px-5 py-3 border border-gray-300 rounded-xl bg-white shadow-inner focus:outline-none focus:ring-2 focus:ring-indigo-400 transition">
        </div>

        {{-- Nama Mesin --}}
        <div>
            <label for="nama_mesin" class="block text-lg font-semibold text-gray-900"> Nama Mesin</label>
            <select name="nama_mesin" id="nama_mesin"
                class="mt-2 w-full px-5 py-3 border border-gray-300 rounded-xl bg-white shadow-inner focus:ring-2 focus:ring-indigo-400 transition">
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
        <div>
            <label for="nomor_mesin" class="block text-lg font-semibold text-gray-900"> Nomor Mesin</label>
            <select name="nomor_mesin" id="nomor_mesin"
                class="mt-2 w-full px-5 py-3 border border-gray-300 rounded-xl bg-white shadow-inner focus:ring-2 focus:ring-indigo-400 transition">
                @for ($i = 1; $i <= 8; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        {{-- Kondisi Mesin --}}
        <div>
            <label class="block text-lg font-semibold text-gray-900"> Kondisi Mesin</label>
            <div class="flex gap-6 mt-3">
                <label class="inline-flex items-center">
                    <input type="radio" name="kondisi_mesin" value="Normal" class="form-radio text-green-600">
                    <span class="ml-3 text-gray-800">Normal</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="kondisi_mesin" value="Bermasalah" checked class="form-radio text-red-600">
                    <span class="ml-3 text-gray-800">Bermasalah</span>
                </label>
            </div>
        </div>

        {{-- Komponen Rusak --}}
        <div>
            <label for="komponen_kerusakan" class="block text-lg font-semibold text-gray-900"> Komponen Mesin Rusak</label>
            <input type="text" name="komponen_kerusakan" id="komponen_kerusakan" required
                class="mt-2 w-full px-5 py-3 border border-gray-300 rounded-xl bg-white shadow-inner focus:ring-2 focus:ring-red-300 transition">
        </div>

        {{-- Perawatan Besar --}}
        <div>
            <label class="block text-lg font-semibold text-gray-900"> Memerlukan Perawatan Besar?</label>
            <div class="flex gap-6 mt-3">
                <label class="inline-flex items-center">
                    <input type="radio" name="memerlukan_perawatanbesar_atau_tidak" value="Ya" class="form-radio text-blue-600">
                    <span class="ml-3 text-gray-800">Ya</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="memerlukan_perawatanbesar_atau_tidak" value="Tidak" checked class="form-radio text-blue-600">
                    <span class="ml-3 text-gray-800">Tidak</span>
                </label>
            </div>
        </div>

        {{-- Catatan --}}
        <div>
            <label for="catatan_kelayakan_operasional" class="block text-lg font-semibold text-gray-900">📝 Catatan Operasional</label>
            <textarea name="catatan_kelayakan_operasional" id="catatan_kelayakan_operasional" rows="4" required
                class="mt-2 w-full px-5 py-3 border border-gray-300 rounded-xl bg-white shadow-inner focus:ring-2 focus:ring-indigo-400 transition"></textarea>
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end gap-4 pt-6">
            <button type="submit"
                class="px-6 py-2 bg-gradient-to-r from-green-500 to-emerald-600 text-white rounded-lg font-bold shadow-md hover:shadow-lg hover:scale-105 transition">✅ Submit</button>
            <button type="reset"
                class="px-6 py-2 bg-gradient-to-r from-red-400 to-rose-600 text-white rounded-lg font-bold shadow-md hover:shadow-lg hover:scale-105 transition">🔄 Reset</button>
        </div>
    </form>
</div>
<div class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('/images/bg-mesin.jpg');">
    <div class="bg-gradient-to-br from-indigo-100 via-white to-blue-50 bg-opacity-90 p-10 rounded-2xl shadow-2xl max-w-4xl mx-auto mt-10 border border-blue-200 backdrop-blur-sm">
        {{-- isi form seperti sebelumnya --}}
    </div>
</div>


@endsection
