@extends('layouts.app')

@section('title', 'Dashboard - Taskly')

@section('content')

<div>
    <h1 class="page-title">Dashboard</h1>

    <p class="subtitle">
        Halo, <strong>{{ $username }}</strong>!
        Selamat datang kembali di Taskly.
        Yuk, atur kegiatanmu hari ini.
    </p>
</div>

<div class="stats">

    <div class="card">
        <p>Total Tugas</p>
        <div class="stat-number">4</div>
        <small>Semua daftar kegiatanmu</small>
    </div>

    <div class="card">
        <p>Sedang Dikerjakan</p>
        <div class="stat-number">1</div>
        <small>Tugas yang masih berjalan</small>
    </div>

    <div class="card">
        <p>Tugas Selesai</p>
        <div class="stat-number">1</div>
        <small>Kegiatan yang sudah selesai</small>
    </div>

</div>

<div class="card">
    <h2 style="margin-bottom: 12px;">
        Mulai Atur Kegiatanmu
    </h2>

    <p class="subtitle">
        Jangan sampai ada kegiatan yang terlewat.
        Catat dan pantau semua tugasmu di Taskly.
    </p>

    <a
        href="{{ url('/pengelolaan') }}?username={{ urlencode($username) }}"
        class="btn"
    >
        Lihat Pengelolaan Tugas
    </a>
</div>

<div class="card">
    <h2 style="margin-bottom: 12px;">
        Informasi Akun
    </h2>

    <p>
        Username:
        <strong>{{ $username }}</strong>
    </p>

    <br>

    <a
        href="{{ url('/profile') }}?username={{ urlencode($username) }}"
        class="btn"
    >
        Lihat Profil
    </a>
</div>

@endsection