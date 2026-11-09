@extends('layouts.app')

@section('title', 'Login - Taskly')

@section('content')

<div style="max-width: 430px; margin: 30px auto;">

    <div class="card">

        <h1 class="page-title">
            Selamat Datang!
        </h1>

        <p class="subtitle">
            Masuk ke Taskly dan mulai atur kegiatanmu hari ini.
        </p>

        <form action="/proses-login" method="GET">

            <div class="form-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username kamu"
                    required
                >

            </div>

            <button type="submit" class="btn">
                Masuk ke Taskly
            </button>

        </form>

    </div>

</div>

@endsection