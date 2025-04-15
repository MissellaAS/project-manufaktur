<?php

namespace App\Http\Controllers;

use App\Models\Manufaktur;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ManufakturController extends Controller
{  
        
    public function index()
    {
        
    }

    public function create()
    {
        return view('manufaktur.create');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama_pegawai' => 'required',
            'nama_mesin' => 'required',
            'nomor_mesin' => 'required',
            'kondisi_mesin' => 'required',
            'komponen_kerusakan' => 'nullable',
            'membutuhkan_perawatanbesra_atau_tidak' => 'required',
            'catatan' => 'nullable',
        ]);

        product::create($request->all());

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