<!DOCTYPE html>
<html>
<head>
    <title>Analisis Data Kelayakan Operasional Ketusakan Mesin Industri</title>
</head>
<body>
    <h1>Edit Data Mesin</h1>

    <form method="POST" action="{{ route('machines.update', $machine->id) }}">
        @csrf
        @method('PUT')

        <label>Nama Pegawai:</label><br>
        <input type="text" name="nama_pegawai" value="{{ $machine->pegawai }}" required><br><br>

        <label>Nama Mesin:</label><br>
        <input type="text" name="nama_mesin" value="{{ $machine->nama }}" required><br><br>

        <label>Nomor Mesin:</label><br>
        <input type="text" name="nomor_mesin" value="{{ $machine->nomor }}" required><br><br>

        <label>Kondisi Mesin:</label><br>
        <select name="koondisi_mesin">
            <option value="1" {{ $machine->operasional_normal ? 'selected' : '' }}>Normal</option>
            <option value="0" {{ !$machine->operasional_normal ? 'selected' : '' }}>Bermasalah</option>
        </select><br><br>

        <label>Komponen kerusakan:</label><br>
        <input type="text" name="komponen_kerusakan" value="{{ $machine->komponen_rusak }}"><br><br>

        <label>Perlu Perawatan Besar atau tidak?</label><br>
        <select name="membutuhkan_perawatanbesar_atau_tidak">
            <option value="1" {{ $machine->butuh_perawatan_besar ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ !$machine->butuh_perawatan_besar ? 'selected' : '' }}>Tidak</option>
        </select><br><br>

        <label>Catatan Kelayakan:</label><br>
        <textarea name="catatan_operasional">{{ $machine->catatan }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>