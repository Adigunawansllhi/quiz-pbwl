<?php

namespace App\Http\Controllers;

use App\Http\Requests\GolonganRequest;
use App\Models\Golongan;
use App\Models\Pelanggan;
use Illuminate\Auth\Events\Validated;
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
    public function store(GolonganRequest $request)
    {
        $data = $request->validated();

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
        $data = Golongan::findOrFail($id);
        return view('golongan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GolonganRequest $request, string $id)
    {
        $data = $request->validated();

        Golongan::findOrFail($id)->update($data);
        return redirect()->route('gol_view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::where('gol_id', $id)->exists();
        if ($pelanggan) {
            return redirect()->back();
        }
        $data = Golongan::find($id);
        $data->delete();
        return redirect()->route('gol_view');
    }
}
