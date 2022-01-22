@extends('layouts.main')
@section('title','Welcome, Admin')
@section('container')

    <?php
        $no = 1;
    ?>

    @if(session()->has('loginAdmin'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('loginAdmin') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor ID</th>
                <th scope="col">Email</th>
                <th scope="col">Paket Program</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($users as $index => $user) --}}
            <tr>
                <td><?php $no++ ?></td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->nomor_id }}</td>
                <td>{{ $users->email }}</td>
                <td></td>
                <td></td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>

@endsection