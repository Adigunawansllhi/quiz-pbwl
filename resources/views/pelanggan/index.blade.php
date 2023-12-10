@extends('layout.app')
@section('content')
    <div class="card col-12 m-4">
        <div class="card-header">
            <h3 class="card-title">Data Pelanggan</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('pel_create') }}" class="btn btn-primary">Tambah Data</a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Golongan</th>
                        <th>No Pelanggan</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>KTP</th>
                        <th>Seri</th>
                        <th>Meteran</th>
                        <th>Status</th>
                        <th>User</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->golongan->gol_nama }}</td>
                            <td>{{ $d->pel_no }}</td>
                            <td>{{ $d->pel_nama }}</td>
                            <td>{{ $d->pel_alamat }}</td>
                            <td>{{ $d->pel_hp }}</td>
                            <td>{{ $d->pel_ktp }}</td>
                            <td>{{ $d->pel_seri }}</td>
                            <td>{{ $d->pel_meteran }}</td>
                            <td>{{ $d->pel_aktif }}</td>
                            <td>{{ $d->user->name }}</td>
                            <td>
                                <div class="btn-group gap-3" role="group">
                                    <a href="{{ route('pel_edit', ['id' => $d->id]) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('pel_delete', ['id' => $d->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- /.card-body -->
    </div>
@endsection
