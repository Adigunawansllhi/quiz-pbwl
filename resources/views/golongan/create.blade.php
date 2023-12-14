@extends('layout.app')

@section('content')
    <div class="card col-8 m-auto mt-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <div class="header text-center">
            <h4>Input Data Golongan</h4>
            <hr>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('gol_store') }}" method="POST">
                @csrf
                <div class="col-12">
                    <label class="form-label">Kode Golongan</label>
                    <input type="text" class="form-control" name="gol_kode">
                </div>
                <div class="col-12">
                    <label class="form-label">Nama Golongan</label>
                    <input type="text" class="form-control" name="gol_nama">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn text-white mt-4" style="background-color: #ff8906">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
