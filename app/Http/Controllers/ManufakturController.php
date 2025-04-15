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
        // Retrieve and display a specific record
    }

    public function edit($id)
    {
        // Retrieve the record for editing
    }

    public function update(Request $request, $id)
    {
        // Validate and update the record
    }

    public function destroy($id)
    {
        // Delete the record
    }
}
