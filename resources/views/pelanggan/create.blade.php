@extends('layout.app')

@section('content')
    <div class="card m-auto col-10 mt-4 shadow-sm p-3 mb-5 bg-body-tertiary rounded ">
        <div class="card-header text-center">
            <h3 class="card-title">Input Data Pelanggan</h3>
        </div>
        <div class="card-body">
            <!-- Formulir untuk menambahkan data pelanggan -->
            <form action="{{ route('pel_store') }}" method="POST" class="mt-3">
                @csrf
                <div class="row g-3">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="golongan_id" class="form-label">Golongan</label>
                            <select class="form-select" id="golongan_id" name="gol_id" required>
                                <option value="" selected disabled>Pilih Golongan</option>
                                @foreach ($golongans as $golongan)
                                    <option value="{{ $golongan->id }}">{{ $golongan->gol_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="pel_no" class="form-label">No Pelanggan</label>
                            <input type="text" class="form-control" id="pel_no" name="pel_no" required>
                        </div>
                        <div class="col-md-6">
                            <label for="pel_nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="pel_nama" name="pel_nama" required>
                        </div>
                        <div class="col-md-6">
                            <label for="pel_alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="pel_alamat" name="pel_alamat" required>
                        </div>
                        <div class="col-md-4">
                            <label for="pel_hp" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="pel_hp" name="pel_hp" required>
                        </div>
                        <div class="col-md-4">
                            <label for="pel_ktp" class="form-label">KTP</label>
                            <input type="text" class="form-control" id="pel_ktp" name="pel_ktp" required>
                        </div>
                        <div class="col-md-4">
                            <label for="pel_seri" class="form-label">Seri</label>
                            <input type="text" class="form-control" id="pel_seri" name="pel_seri" required>
                        </div>
                        <div class="col-md-4">
                            <label for="pel_meteran" class="form-label">Meteran</label>
                            <input type="text" class="form-control" id="pel_meteran" name="pel_meteran" required>
                        </div>
                        <div class="col-md-4">
                            <label for="pel_aktif" class="form-label">Status</label>
                            <select name="pel_aktif" class="form-select" required>
                                <option value="" selected disabled>Pilih status</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Non-Aktif">Non-Aktif</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="user_id" class="form-label">User</label>
                            <select class="form-select" id="user_id" name="user_id" required>
                                <option value="" selected disabled>Pilih User</option>
                                @if ($users->count() > 0)
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                @else
                                    <option value="" disabled>Tidak ada user tersedia</option>
                                @endif
                            </select>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <button type="submit" class="btn text-white"
                                    style="background-color: #ff8906">Simpan</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
