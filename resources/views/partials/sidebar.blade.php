<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Edelweiss Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/datauser') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data User</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/kategori') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Kategori</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/barang') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Barang</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/kategoribarang') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Kategori Barang</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/sewalogs') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Sewa Logs</span></a>
            </li>
            

        </ul>