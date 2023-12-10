@extends('layout.app')

@section('content')
    <div class="card col-12 m-4">
        <div class="card-header">
            <h3 class="card-title">Data Pelanggan</h3>
        </div>
        <div class="card-body">
            <!-- Formulir untuk menambahkan data pelanggan -->
            <form action="{{ route('pel_store') }}" method="POST" class="mt-3">
                @csrf
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="golongan_id" class="form-label">Golongan</label>
                        <select class="form-select" id="golongan_id" name="gol_id" required>
                            @foreach ($golongans as $golongan)
                                <option value="{{ $golongan->id }}">{{ $golongan->gol_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_no" class="form-label">No Pelanggan</label>
                        <input type="text" class="form-control" id="pel_no" name="pel_no" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="pel_nama" name="pel_nama" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="pel_alamat" name="pel_alamat" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_hp" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="pel_hp" name="pel_hp" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_ktp" class="form-label">KTP</label>
                        <input type="text" class="form-control" id="pel_ktp" name="pel_ktp" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_seri" class="form-label">Seri</label>
                        <input type="text" class="form-control" id="pel_seri" name="pel_seri" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_meteran" class="form-label">Meteran</label>
                        <input type="text" class="form-control" id="pel_meteran" name="pel_meteran" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_aktif" class="form-label">Status</label>
                        <select name="pel_aktif" class="form-select" required>
                            <option value="">Pilih status</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Non Aktif">Non Aktif</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="user_id" class="form-label">User</label>
                        <select class="form-select" id="user_id" name="user_id" required>
                            @if ($users->count() > 0)
                                @foreach ($users as $user)
                                    {{-- <option value="">Pilih User</option> --}}
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            @else
                                <option value="" disabled>Tidak ada user tersedia</option>
                            @endif
                        </select>
                    </div>
                     <div class="col-md-3">
                        <label for="pel_hp" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="pel_hp" name="pel_hp" value="{{ $pelanggan->pel_hp }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_ktp" class="form-label">KTP</label>
                        <input type="text" class="form-control" id="pel_ktp" name="pel_ktp" value="{{ $pelanggan->pel_ktp }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_seri" class="form-label">Seri</label>
                        <input type="text" class="form-control" id="pel_seri" name="pel_seri" value="{{ $pelanggan->pel_seri }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_meteran" class="form-label">Meteran</label>
                        <input type="text" class="form-control" id="pel_meteran" name="pel_meteran" value="{{ $pelanggan->pel_meteran }}" required>
                    </div>
                    <div class="col-md-3">
                        <label for="pel_aktif" class="form-label">Status</label>
                        <select name="pel_aktif" class="form-select" required>
                            <option value="Aktif" {{ $pelanggan->pel_aktif == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Non Aktif" {{ $pelanggan->pel_aktif == 'Non Aktif' ? 'selected' : '' }}>Non Aktif</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="user_id" class="form-label">User</label>
                        <select class="form-select" id="user_id" name="user_id" required>
                            @if ($users->count() > 0)
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $pelanggan->user_id == $user->id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>Tidak ada user tersedia</option>
                            @endif
                        </select>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
