<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first text-light">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                            </li> -->
            <x-layout.sidebar.menu-item url="admin/dashboard" label="Dashboard" icon="icon icon-home" />
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Struktur Pengurus</span></a>
                <ul aria-expanded="false">
                    <x-layout.sidebar.menu-item url="admin/divisi" label="Bagian" icon="ti-bar-chart-alt" />
                    <x-layout.sidebar.menu-item url="admin/anggota" label="Anggota" icon="icon-user-following" />
                </ul>
            </li>
            <x-layout.sidebar.menu-item url="admin/profil" label="Profil" icon="ti-credit-card" />
            <x-layout.sidebar.menu-item url="admin/berita" label="Berita" icon="mdi mdi-newspaper" />
            <x-layout.sidebar.menu-item url="admin/event" label="Event" icon="ti-calendar" />
            <x-layout.sidebar.menu-item url="admin/proker" label="Proker" icon="icon-briefcase" />
            <x-layout.sidebar.menu-item url="admin/galeri" label="Galeri" icon="ti-image" />
        </ul>
    </div>
</div>
<!--**********************************
                    Sidebar end
                ***********************************-->
