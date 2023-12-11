@extends('layout.app')

@section('content')
    <div class="card col-8 m-auto mt-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <div class="header text-center">
            <h4>Edit Data Golongan</h4>
            <hr>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('gol_update', ['id' => $data->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <label class="form-label">Kode Golongan</label>
                    <input type="text" class="form-control" name="gol_kode" value="{{ $data->gol_kode }}">
                    {{-- @error('name')
                        <small>{{ $message }}</small>
                    @enderror --}}
                </div>
                <div class="col-12">
                    <label class="form-label">Nama Golongan</label>
                    <input type="text" class="form-control" name="gol_nama" value="{{ $data->gol_nama }}">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn text-white mt-4" style="background-color: #ff8906">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
