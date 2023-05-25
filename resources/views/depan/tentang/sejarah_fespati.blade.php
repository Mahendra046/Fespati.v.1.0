<x-depan title="Sejarah | Fespati Ketapang">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Sejarah</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="container">
                    <div class="service-item  position-relative">
                        <h1 class="text-center">Sejarah</h1><br>
                        @foreach ($sejarah as $sejarah)
                        <p style="text-align: center">
                            {!!nl2br($sejarah->isi)!!}
                        </p>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-depan>
