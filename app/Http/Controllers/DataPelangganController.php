<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPelanggan;

class DataPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapelanggans = DataPelanggan::latest()->get();
        return view('index', compact('datapelanggans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datapelanggan = DataPelanggan::create([
            'nama_pelanggan' => $request->input('nama_pelanggan'),
            'alamat' => $request->input('alamat'),
           
        ]);
        return redirect(route('datapelanggans.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPelanggan $datapelanggan)
    // ada $id
    {
        return view('edit', compact('datapelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPelanggan $datapelanggan)
    // ada $id
    {
        $datapelanggan = DataPelanggan::whereid_pelanggan($datapelanggan->id_pelanggan)->update([
            'nama_pelanggan' => $request->input('nama_pelanggan'),
            'alamat' => $request->input('alamat')
            
        ]);

        return redirect(route('datapelanggans.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pelanggan)
    {
        $datapelanggan = DataPelanggan::find($id_pelanggan);
        $datapelanggan->delete();

        return redirect(route('datapelanggans.index'));
    }
}