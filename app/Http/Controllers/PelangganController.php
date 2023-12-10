<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pelanggan::with('golongan')->with('user')->get();

        return view('pelanggan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $golongans = Golongan::all();
        $users = User::all();
        return view('pelanggan.create', compact('golongans', 'users'));
    }

    // app/Http/Controllers/PelangganController.php

    public function store(Request $request)
    {
        $data = $request->validate([
            'gol_id' => 'required',
            'pel_no' => 'required',
            'pel_nama' => 'required',
            'pel_alamat' => 'required',
            'pel_hp' => 'required',
            'pel_ktp' => 'required',
            'pel_seri' => 'required',
            'pel_meteran' => 'required',
            'pel_aktif' => 'required',
            'user_id' => 'required',
        ]);

        // Menyimpan data pelanggan ke dalam database

        $pelanggan = new Pelanggan($data);
        $pelanggan->save();
        return redirect()->route('pelanggan');

        // Redirect dengan pesan sukses
        // return redirect()->route('pelanggan')->with('success', 'Data pelanggan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $golongans = Golongan::all();
        $users = User::all();

        $data = Pelanggan::find($id);
        return view('pelanggan.edit', compact('data', 'golongans', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'gol_id' => 'required',
            'pel_no' => 'required',
            'pel_nama' => 'required',
            'pel_alamat' => 'required',
            'pel_hp' => 'required',
            'pel_ktp' => 'required',
            'pel_seri' => 'required',
            'pel_meteran' => 'required',
            'pel_aktif' => 'required',
            'user_id' => 'required',
        ]);

        Pelanggan::whereId($id)->update($data);
        return redirect()->route('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pelanggan::find($id);
        $data->delete();
        return redirect()->route('pelanggan');
    }
}
