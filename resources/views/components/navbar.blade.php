@props(['username' => ''])

<nav class="navbar">
    <div class="container nav-content">

        <a href="/" class="brand">Taskly.</a>

        <div class="nav-links">

            @if($username)
                <a href="{{ url('/dashboard') }}?username={{ urlencode($username) }}">
                    Dashboard
                </a>

                <a href="{{ url('/pengelolaan') }}?username={{ urlencode($username) }}">
                    Pengelolaan
                </a>

                <a href="{{ url('/profile') }}?username={{ urlencode($username) }}">
                    Profil
                </a>
            @else
                <a href="/login">Login</a>
            @endif

        </div>

    </div>
</nav>