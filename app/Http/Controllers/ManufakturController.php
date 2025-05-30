<?php

namespace App\Http\Controllers;

use App\Models\Manufaktur;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class ManufakturController extends Controller
{  
        
    public function index()
{
    $manufakturs = Manufaktur::latest()->paginate(5);
    return view('manufaktur.index', compact('manufakturs'));
}




    public function create()
    {
        return view('manufaktur.create');
    }


    /**
     * Simpan data mesin baru
     */



    public function store(Request $request)
    {
     
        $request->validate([
            'nama_pegawai' => 'required',
            'tanggal_pemeriksaan' => 'required|date',
            'nama_mesin' => 'required',
            'nomor_mesin' => 'required',
            'kondisi_mesin' => 'required',
            'komponen_kerusakan' => 'nullable',
            'perawatan_besar' => 'required',
            'catatan_kelayakan' => 'nullable',
            'action_data' => 'nullable', // Aksi yang diambil berdasarkan logika sistem
        ]);

        Manufaktur::create($request->all());   
        return redirect()->route('manufaktur.index')->with('success', 'Data berhasil disimpan.');
       

    }

    public function show(Manufaktur $manufaktur)
    {
        return view('manufaktur.show', compact('manufaktur'));
    }
   
   
     
    

    public function edit(Manufaktur $manufaktur)
    {
      
        return view('manufaktur.edit', compact('manufaktur'));
    }

   

   public function update(Request $request, Manufaktur $manufaktur)
{
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

    $manufaktur->update($request->all());

    return redirect()->route('manufaktur.index')->with('success', 'Data mesin berhasil diperbarui');
}
   

   public function destroy(Manufaktur $manufaktur)
{
    
    $manufaktur->delete();

    return redirect()->route('manufaktur.index')->with('success', 'Data mesin berhasil dihapus.');
}





}