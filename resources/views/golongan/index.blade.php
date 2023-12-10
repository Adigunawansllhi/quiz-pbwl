@extends('layout.app')
@section('content')
    <div class="card col-12 m-4">
        <div class="card-header">
            <h3 class="card-title">Data Users</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('gol_create') }}" class="btn btn-primary">Tambah Data</a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Kode Golongan</th>
                        <th>Nama Golongan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->gol_kode }}</td>
                            <td>{{ $d->gol_nama }}</td>
                            <td>
                                <div class="btn-group gap-3" role="group">
                                    <a href="{{ route('gol_edit', ['id' => $d->id]) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('gol_delete', ['id' => $d->id]) }}" method="POST">
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
