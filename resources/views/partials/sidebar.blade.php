<div class="d-flex flex-column sidebar vh-100">
    {{-- Logo --}}
    <div class="px-3 py-3 text-center flex-shrink-0">
        <a href="{{ route('dashboard') }}"
            class="d-flex align-items-center justify-content-center text-white text-decoration-none">
            <img src="{{ asset('images/logo-jne.png') }}" alt="Logo" class="me-2" style="height: 32px;">
            <span class="fs-5 fw-bold">JNE TANGERANG</span>
        </a>
    </div>

    {{-- Menu --}}
    <nav class="flex-grow-1 px-2 overflow-auto">

        {{-- Untuk semua user --}}
        <a href="{{ route('perusahaan') }}"
            class="d-block px-3 py-2 mb-1 text-white rounded {{ request()->routeIs('perusahaan') ? 'bg-primary' : '' }}">
            <i class="bi bi-building me-2"></i> Perusahaan
        </a>
        <a href="{{ route('produk') }}"
            class="d-block px-3 py-2 mb-1 text-white rounded {{ request()->routeIs('produk') ? 'bg-primary' : '' }}">
            <i class="bi bi-box-seam me-2"></i> Produk
        </a>
        <a href="{{ route('data') }}"
            class="d-block px-3 py-2 mb-1 text-white rounded {{ request()->routeIs('data') ? 'bg-primary' : '' }}">
            <i class="bi bi-database me-2"></i> Database
        </a>
        <a href="{{ route('manage.index') }}"
            class="d-block px-3 py-2 mb-1 text-white rounded {{ request()->routeIs('manage.index') ? 'bg-primary' : '' }}">
            <i class="bi bi-gear me-2"></i> Manage
        </a>
        <a href="{{ route('hubungi') }}"
            class="d-block px-3 py-2 mb-1 text-white rounded {{ request()->routeIs('hubungi') ? 'bg-primary' : '' }}">
            <i class="bi bi-envelope me-2"></i> Hubungi Kami
        </a>

        {{-- Khusus Admin --}}
        @if (Auth::check() && Auth::user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}"
                class="d-block px-3 py-2 mb-1 text-white rounded {{ request()->routeIs('admin.dashboard') ? 'bg-primary' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i> Admin Dashboard
            </a>
            <a href="{{ route('admin.assets.index') }}"
                class="d-block px-3 py-2 mb-1 text-white rounded {{ request()->routeIs('admin.assets.*') ? 'bg-primary' : '' }}">
                <i class="bi bi-box me-2"></i> Kelola Assets
            </a>
            <a href="{{ route('admin.allocations.index') }}"
                class="d-block px-3 py-2 mb-1 text-white rounded {{ request()->routeIs('admin.allocations.*') ? 'bg-primary' : '' }}">
                <i class="bi bi-diagram-3 me-2"></i> Kelola Allocations
            </a>
        @endif
    </nav>

    {{-- Logout --}}
    <div class="mt-auto px-3 pb-3">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="text-white text-decoration-none d-flex align-items-center">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
        </a>
    </div>
</div>

<style>
    .sidebar {
        background-color: #000080; /* Navy */
        display: flex;
        flex-direction: column;
        height: 100vh;
        overflow-y: auto;
    }

    nav.overflow-auto {
        flex-grow: 1;
        overflow-y: auto;
    }

    .sidebar a {
        text-decoration: none;
        transition: background-color 0.2s;
    }

    .sidebar a:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    /* Optional: scrollbar styling */
    nav.overflow-auto::-webkit-scrollbar {
        width: 6px;
    }
    nav.overflow-auto::-webkit-scrollbar-thumb {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 3px;
    }
</style>
