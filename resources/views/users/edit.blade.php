@extends('layout.app')

@section('content')
    <div class="card col-8 m-auto mt-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <div class="header text-center">
            <h4>Edit Data User</h4>
            <hr>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('user_update', ['id' => $data->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ $data->email }}">
                    {{-- @error('email')
                        <small>{{ $message }}</small>
                    @enderror --}}
                </div>
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password">
                    {{-- @error('password')
                        <small>{{ $message }}</small>
                    @enderror --}}
                </div>
                <div class="col-12">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                    {{-- @error('name')
                        <small>{{ $message }}</small>
                    @enderror --}}
                </div>
                <div class="col-12">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="user_alamat" value="{{ $data->user_alamat }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">No Hp</label>
                    <input type="text" class="form-control" name="user_hp" value="{{ $data->user_hp }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Pos</label>
                    <input type="text" class="form-control" name="user_pos" value="{{ $data->user_pos }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Role</label>
                    <input type="text" class="form-control" name="user_role" value="{{ $data->user_role }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" name="user_aktif" value="{{ $data->user_aktif }}">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn text-white mt-4" style="background-color: #ff8906">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
