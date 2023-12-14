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
    public function index()
    {
        $data = User::WhereNotIn('id', [Auth::user()->id])->get();
        return view('users.index', compact('data'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserCreateRequest $request)
    {
        $data = $request->validated();

        $user = new User($data);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = User::findOrFail($id);
        return view('users.edit', compact('data'));
    }

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
