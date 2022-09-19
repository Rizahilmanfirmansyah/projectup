<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penjual;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjuals = penjual::all();
        return view('penjual.index', compact('penjuals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjual.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'foto_penjual'=>'required',
            'nama_penjual'=>'required',
            'no_tlp'=>'required',
        ]);

        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $penjual = penjual::create([
            'foto_penjual'=>$nama_file,
            'nama_penjual'=>$request->nama_penjual,
            'no_tlp'=>$request->no_tlp,
        ]);

        return redirect()->route('penjual.index')
        ->with('success', 'Data Penjual Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_toko)
    {
        $penjual = penjual::where('id_toko', $id_toko)->first();
        return view('penjual.detail', compact('penjual'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('penjual.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_toko)
    {
        $this->validate($request,[
            'foto_penjual'=>'required',
            'nama_penjual'=>'required',
            'no_tlp'=>'required',
        ]);

        $penjual = penjual::where('id_toko', $id_toko);

        $penjual->update($request->except('_token','_method'));
        return redirect()->route('penjual.index')
        ->with('success', 'Data Penjual Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_toko)
    {
        $penjual = penjual::where('id_toko', $id_toko);
        $penjual->delete();
        return redirect()->route('penjual.index')
        ->with('success', 'Data Berhasil Di Hapus');
    
    }
}
