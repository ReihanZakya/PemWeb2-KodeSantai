<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #466089;">
    <div class="container-fluid p-3 mx-3">
        <a class="navbar-brand text-white fw-bold" href="#">KodeSantai</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/module">Modul</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/category">Kategori</a>
                </li>
                @auth
                {{-- Tampilkan link ke dashboard/profile sesuai role --}}
                @if (Auth::user()->role === 'admin')
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard') }}">Dashboard Admin</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('userprofile') }}">Profile</a>
                    </li>
                @endif
        
            @endauth
            </ul>

            <div>
                @guest
                    {{-- Jika belum login (guest) --}}
                    <button class="p-2 px-3 m-0" style="background-color:#FFFFFF">
                        <a href="/login" class="text-decoration-none f-lightblue fw-bold">Masuk</a>
                    </button>
                @else
                    <button class="p-2 px-3 m-0" style="background-color:#FFFFFF">
                        <a href="{{ route('logout') }}" class="text-decoration-none f-lightblue fw-bold">Logout</a>
                    </button>
                @endguest
            </div>
            
        </div>
    </div>
</nav>