<x-depan title="visi-Misi | Fespati Ketapang">
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Visi-Misi</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="service-item  position-relative">
                            <h1 class="text-center">Visi</h1><br>
                            @foreach ($visi as $visi)
                            <p style="text-align: center">
                                {{$visi->isi}}
                            </p>

                            @endforeach
                            <br><br>
                            <h1 class="text-center">Misi</h1>
                            @foreach ($misi as $misi)
                            <p>{!! nl2br ($misi->isi) !!}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-depan>
