@extends('layout.app');

@section('content')
    <div class="card p-4 shadow p-3 mb-5 bg-body-tertiary rounded">

        <h3>Assalamu'alaikum Warhmatullahi Wabaraktuh</h3>
        <h3>Selamat Datang....</h3>
        <h2 style="color : #ff8906">
            {{ Auth::user()->name }}

        </h2>
    </div>
@endsection
