<!-- ======= Header ======= -->
@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
<header id="header" class="header d-flex align-items-center overlay-black">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{url('beranda')}}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ url('public') }}/Up/assets/img/logo-fespati.png" alt="">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <x-layout.depan.header.menu-item url="beranda" label="Beranda"
                    class="{{ checkRouteActive('beranda') }}" />
                <li class="dropdown"><a href="#" class="{{ checkRouteActive('sejarah') }} {{ checkRouteActive('visi_misi') }} {{ checkRouteActive('struktur_organisasi') }} {{ checkRouteActive('program_kerja') }}"><span>Tentang Kami</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <x-layout.depan.header.menu-item url="sejarah" label="Sejarah Fespati Kab.Ketapang"
                            class="{{ checkRouteActive('sejarah') }}" />
                        <x-layout.depan.header.menu-item url="visi_misi" label="Visi Misi Fespati Kab.Ketapang"
                            class="{{ checkRouteActive('visi_misi') }}" />
                        <x-layout.depan.header.menu-item url="struktur_organisasi" label="Struktur Organisasi"
                            class="{{ checkRouteActive('struktur_organisasi') }}" />
                        <x-layout.depan.header.menu-item url="program_kerja" label="Program Kerja"
                            class="{{ checkRouteActive('program_kerja') }}" />
                    </ul>
                </li>
                <x-layout.depan.header.menu-item url="berita" label="Berita"
                    class="{{ checkRouteActive('berita') }} {{ checkRouteActive('berita/detail/{berita}') }}" />

                <x-layout.depan.header.menu-item url="event" label="Event"
                    class="{{ checkRouteActive('event') }}" />
                <li class="dropdown"><a href="#" class="{{ checkRouteActive('foto') }} {{ checkRouteActive('video') }}"><span>Media</span> <i
                            class="bi bi-chevron-down dropdown-indicator  "></i></a>
                    <ul>
                        <x-layout.depan.header.menu-item url="foto" label="Foto"
                            class="{{ checkRouteActive('foto') }}" />
                        <x-layout.depan.header.menu-item url="event" label="Video"
                            class="{{ checkRouteActive('video') }}" />
                    </ul>
                </li>
                <a href="#get-started" class="btn-get-started"
                    style="font-family: var(--font-primary);
                font-weight: 500;
                font-size: 12px;
                letter-spacing: 1px;
                display: inline-block;
                padding: 12px 30px;
                border-radius: 50px;
                margin: 6px;
                color: #fff;
                background: var(--color-primary);">Hubungi Kami</a>


            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<style>
    .header.sticky {
    padding: 2rem 2rem;
    background: #124e55;
}
</style>
