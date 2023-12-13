<?php

namespace App\Http\Controllers;

use App\Http\Requests\GolonganRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::WhereNotIn('id', [Auth::user()->id])->get();
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserCreateRequest $request)
    {
        $data = $request->validated();

        $user = new User($data);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user');
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
        $data = User::findOrFail($id);
        return view('users.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $data = $request->validated();

        $user = User::findOrFail($id);
        if ($request->input('password') != '') {
            $user->password = Hash::make($request->input('password'));
        }

        $user->update($data);

        return redirect()->route('user');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $pelanggan = Pelanggan::where('user_id', $id)->exists();
        if ($pelanggan) {
            return redirect()->back();
        }
        $data = User::find($id);
        $data->delete();
        return redirect()->route('user');
    }
}
