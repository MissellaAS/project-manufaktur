<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufakturController extends Controller
{
    public function index()
    {
        $manufakturs = manufaktur::all(); 
        return view('manufaktur.view', compact('manufakturs'));
    }

    public function create()
    {
        return view('manufaktur.create');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
                'nama_pegawai' => 'required|string|max:255',
                'nama_mesin' => 'required|string|max:255',
                'nomor_mesin' => 'required|string|max:255',
                'kondisi_mesin' => 'required|boolean',
                'komponen_kerusakan' => 'nullable|string|max:255',
                'memerlukan_perawatanbesar_atau_tidak' => 'nullable|boolean',
                'catatan_kelayakan' => 'nullable|string',
            ]);

        // Store the validated data in the database
        // ProjectManufacture::create($data);

        return redirect()->route('manufaktur.index')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        $machine = Manufaktur::findOrFail($id);
        return view('manufaktur.view', compact('manufaktur'));
    }

    /**
     * Tampilkan form edit mesin
     */
    public function edit($id)
    {
        $machine = Manufaktur::findOrFail($id);
        return view('manufaktur.edit', compact('manufaktur'));
    }

    /**
     * Simpan perubahan data mesin
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'nama_mesin' => 'required|string|max:255',
            'nomor_mesin' => 'required|string|max:255',
            'kondisi_mesin' => 'required|boolean',
            'komponen_kerusakan' => 'nullable|string|max:255',
            'membutuhkan_perawatanbesra_atau_tidak' => 'required|boolean',
            'catatan' => 'nullable|string',
        ]);

        $machine = Manufaktur::findOrFail($id);
        $machine->update([
            'pegawai' => $request->pegawai,
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'operasional_normal' => $request->operasional_normal,
            'komponen_rusak' => $request->komponen_rusak,
            'butuh_perawatan_besar' => $request->butuh_perawatan_besar,
            'catatan' => $request->catatan,
        ]);

        return redirect()->route('machines.index')->with('success', 'Data mesin berhasil diperbarui');
    }

    /**
     * Hapus data mesin
     */
    public function destroy($id)
    {
        $machine = Manufaktur::findOrFail($id);
        $machine->delete();

        return redirect()->route('machines.index')->with('success', 'Data mesin berhasil dihapus');
    }
}