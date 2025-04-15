<!DOCTYPE html>
<html>
<head>
    <title>Analisis Data Kelayakan Operasional Kerusakan Pada Mesin Industri</title>
</head>
<body>
    <h1>Daftar Mesin</h1>

    <a href="{{ route('machines.create') }}">+ Tambah Data Mesin</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama Pegawai</th>
                <th>Nama Mesin</th>
                <th>Nomor Mesin</th>
                <th>Kondisi Mesin</th>
                <th>Komponen Kerusakan</th>
                <th>Memerlukan perawatan besar atau tidak</th>
                <th>Catatan Operasional</th>
            </tr>
        </thead>
        <tbody>
            @foreach($machines as $machine)
            <tr>
                <td>{{ $machine->nama }}</td>
                <td>{{ $machine->nomor }}</td>
                <td>{{ $machine->operasional_normal ? 'Normal' : 'Bermasalah' }}</td>
                <td>{{ $machine->catatan }}</td>
                <td>
                    <a href="{{ route('machines.show', $machine->id) }}">Lihat</a> |
                    <a href="{{ route('machines.edit', $machine->id) }}">Edit</a> |
                    <form action="{{ route('machines.destroy', $machine->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>