<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelangganRequest;
use App\Models\Golongan;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data = Pelanggan::with('golongan')->with('user')->get();

        return view('pelanggan.index', compact('data'));
    }

    public function create()
    {
        $golongans = Golongan::all();
        $users = User::all();
        return view('pelanggan.create', compact('golongans', 'users'));
    }


    public function store(PelangganRequest $request)
    {

        $data = $request->validated();

        $pelanggan = new Pelanggan($data);
        $pelanggan->save();
        return redirect()->route('pelanggan');

    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $golongans = Golongan::all();
        $users = User::all();

        $data = Pelanggan::find($id);
        return view('pelanggan.edit', compact('data', 'golongans', 'users'));
    }

    public function update(PelangganRequest $request, string $id)
    {
        $data = $request->validated();

        Pelanggan::whereId($id)->update($data);
        return redirect()->route('pelanggan');
    }

    public function destroy(string $id)
    {
        $data = Pelanggan::find($id);
        $data->delete();
        return redirect()->route('pelanggan');
    }
}
