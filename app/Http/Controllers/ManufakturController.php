<?php

namespace App\Http\Controllers;

use App\Models\Manufaktur;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ManufakturController extends Controller
{  
        
    public function index()
    {
        $manufakturs = Manufaktur::all();
        return view('manufaktur.index', compact('manufakturs'));
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
            'tanggal_pemeriksaan' => 'required|date',
            'nama_mesin' => 'required',
            'nomor_mesin' => 'required',
            'kondisi_mesin' => 'required',
            'komponen_kerusakan' => 'nullable',
            'perawatan_besar' => 'required',
            'catatan_kelayakan' => 'nullable',
        ]);

        Manufaktur::create($request->all());   
        return redirect()->route('manufaktur.index')->with('success', 'Data berhasil disimpan.');
       

    }

    public function show($id)
    {

        $manufakturs = Manufaktur::findOrFail($id);
        return view('manufaktur.view', compact('manufakturs'));
    }

    /**
     * Tampilkan form edit mesin
     */
    public function edit($id)
    {
        //$machine = Manufakturs::findOrFail($id);
        //return view('manufakturs.edit', compact('manufakturs'));
    }

    /**
     * Simpan perubahan data mesin
     */
    public function update(Request $request, $id)
    {
        // Validasi
        //$request->validate([
            //'nama_pegawai' => 'required|string|max:255',
            //'nama_mesin' => 'required|string|max:255',
            //'nomor_mesin' => 'required|string|max:255',
            //'kondisi_mesin' => 'required|boolean',
            //'komponen_kerusakan' => 'nullable|string|max:255',
            //'membutuhkan_perawatanbesar_atau_tidak' => 'required|boolean',
            //'catatan_kelayakan' => 'nullable|string',
        //]);


        //return redirect()->route('machines.index')->with('success', 'Data mesin berhasil diperbarui');
    }

    /**
     * Hapus data mesin
     */
    public function destroy($id)
    {
        //$machine = Manufaktur::findOrFail($id);
        //$machine->delete();

       // return redirect()->route('machines.index')->with('success', 'Data mesin berhasil dihapus');
    }
}