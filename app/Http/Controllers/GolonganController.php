<?php

namespace App\Http\Controllers;

use App\Http\Requests\GolonganRequest;
use App\Models\Golongan;
use App\Models\Pelanggan;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $data = Golongan::get();
        return view('golongan.index', compact('data'));
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(GolonganRequest $request)
    {
        $data = $request->validated();

        Golongan::create($data);
        return redirect()->route('gol_view');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = Golongan::findOrFail($id);
        return view('golongan.edit', compact('data'));
    }

    public function update(GolonganRequest $request, string $id)
    {
        $data = $request->validated();

        Golongan::findOrFail($id)->update($data);
        return redirect()->route('gol_view');
    }

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
