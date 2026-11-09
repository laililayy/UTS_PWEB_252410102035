@extends('layouts.app')

@section('content')

<div class="page-header">
    <h1>Profil Pengguna</h1>
    <p>Informasi akun dan identitas pengguna Taskly.</p>
</div>

<div class="profile-card">

    <div class="profile-avatar">
        {{ strtoupper(substr($username, 0, 1)) }}
    </div>

    <h2>{{ $username }}</h2>
    <p class="profile-role">Mahasiswa</p>

    <div class="profile-divider"></div>

    <div class="profile-info">
        <div class="info-item">
            <span>Username</span>
            <strong>{{ $username }}</strong>
        </div>

        <div class="info-item">
            <span>Status Akun</span>
            <strong class="account-status">Aktif</strong>
        </div>

        <div class="info-item">
            <span>Aplikasi</span>
            <strong>Taskly</strong>
        </div>
    </div>

        <div class="profile-divider"></div>

    <a href="/login" class="logout-button">
        Logout
    </a>

</div>

@endsection