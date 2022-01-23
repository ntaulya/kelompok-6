@extends('layouts.main')
@section('title','Admin Page')
@section('container')

    @if ( !$users->count() )
        Tidak ada data pengguna!
    @else  
    @php $nomor = 0; @endphp
    @php $nomor++; @endphp
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor ID</th>
                <th scope="col">Email</th>
                <th scope="col">Paket Program</th>
                <th scope="col">KTP/KK</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $users as $user )
            <tr>
                <td>@php $nomor @endphp</td>
                <td>{{$user->name }}</td>
                <td>{{$user->nomor_id }}</td>
                <td>{{$user->email }}</td>
                <td>{{$user->paket_program }}</td>
                <td>{{$user->ktp_kk }}</td>
                <div class="row">
                    <td class="col-lg-6">
                        <button type="button" class="btn btn-primary">Tambah Materi</button>
                    </td>
                    <td class="col-lg-6">
                        <button type="button" class="btn btn-warning">Tambah Tugas</button>
                    </td>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

@endsection