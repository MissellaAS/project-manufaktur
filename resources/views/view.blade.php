
<!DOCTYPE html>
<html>
<head>
    <title>Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri</title>
</head>
<body>
    <h1>Detail Data Mesin</h1>

    <a href="{{ route('machines.index') }}">← Kembali</a>

    <table border="1" cellpadding="10">
        <tr><th>Nama Pegawai</th><td>{{ $machine->pegawai }}</td></tr>
        <tr><th>Nama Mesin</th><td>{{ $machine->nama }}</td></tr>
        <tr><th>Nomor Mesin</th><td>{{ $machine->nomor }}</td></tr>
        <tr><th>Kondisi Mesin</th><td>{{ $machine->operasional_normal ? 'Normal' : 'Bermasalah' }}</td></tr>
        <tr><th>Komponen Kerusakan</th><td>{{ $machine->komponen_rusak }}</td></tr>
        <tr><th>Memerlukan Perawatan Besar atau Tidak?</th><td>{{ $machine->butuh_perawatan_besar ? 'Ya' : 'Tidak' }}</td></tr>
        <tr><th>Catatan Operasional</th><td>{{ $machine->catatan }}</td></tr>
    </table>
</body>
</html>