<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Golongan::get();
        return view('golongan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['gol_kode']      = $request->gol_kode;
        $data['gol_nama']       = $request->gol_nama;


        Golongan::create($data);
        return redirect()->route('gol_view');
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
        $data = Golongan::find($id);
        return view('golongan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data['gol_kode']      = $request->gol_kode;
        $data['gol_nama']       = $request->gol_nama;

        Golongan::whereId($id)->update($data);
        return redirect()->route('gol_view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Golongan::find($id);
        $data->delete();
        return redirect()->route('gol_view');
    }
}
