<!DOCTYPE html>
<html>
<head>
    <title>Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri</title>
</head>
<body>
    <h1>Tambah Data Mesin Industri</h1>

    <form method="POST" action="{{ route('machines.store') }}">
        @csrf

        <label>Nama Pegawai:</label><br>
        <input type="text" name="nama_pegawai" required><br><br>

        <label>Nama Mesin:</label><br>
        <select type="text" name="nama_mesin" required><br><br>
            <option value="1">Milling</option>
            <option value="2">Turning</option>
            <option value="3">Milling CNC</option>
            <option value="4">Grinding</option>
            <option value="5">Drilling</option>
            <option value="6">Welding</option>
        </select><br><br>


        <label>Nomor Mesin:</label><br>
        <select type="text" name="nomor_mesin" required><br><br>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br><br>

        <label>Kondisi Mesin:</label><br>
        <select name="kondisi_mesin" required>
            <option value="1">Normal</option>
            <option value="2">Bermasalah</option>
        </select><br><br>

        <label>Komponen Kerusakan(jika ada):</label><br>
        <input type="text" name="komponen_kerusakan"><br><br>

        <label>Memerlukan Perawatan Besar atau Tidak?</label><br>
        <select name="membutuhkan_perawatanbesar_atau_tdak">
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select><br><br>

        <label>Catatan Kelayakan Operasional:</label><br>
        <textarea name="catatan_operasional"></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>