@extends('layout.app')
@section('content')
    <div class="card col-12 m-4">
        <div class="card-header">
            <h3 class="card-title">Data Users</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('create') }}" class="btn btn-primary">Tambah Data</a>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Pos</th>
                        <th>Role</th>
                        <th>Aktif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->user_alamat }}</td>
                            <td>{{ $d->user_hp }}</td>
                            <td>{{ $d->user_pos }}</td>
                            <td>{{ $d->user_role }}</td>
                            <td>{{ $d->user_aktif }}</td>
                            <td>
                                <div class="btn-group gap-3" role="group">
                                    <a href="{{ route('edit', ['id' => $d->id]) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('delete', ['id' => $d->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Delete
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
