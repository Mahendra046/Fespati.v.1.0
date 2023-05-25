<x-depan title="Struktur | Fespati Ketapang">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('public/Up/assets/img/berita/background4.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <ol>
                <li><a href="{{ url('beranda') }}">Beranda</a></li>
                <li>Pengurus Fespati Cabang</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="container">
                    <div class="service-item  position-relative">
                        <h5 class="text-center">
                            SUSUNAN PENGURUS CABANG
                        </h5>
                        <h5 class="text-center">FESPATI KABUPATEN KETAPANG PROVINSI KALIMANTAN BARAT</h5>
                        @foreach ($periode as $periode)
                            <h5 class="text-center">{{ $periode->isi }}</h5>
                        @endforeach
                        <br>
                        <br>
                        <table class="table table-striped" style="justify-content: center">
                            <thead>
                                <tr>
                                    <th scope="">NAMA JABATAN</th>
                                    <th scope="">:</th>
                                    <th scope=""></th>
                                    <th scope="">NAMA PERSONALIA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_divisi as $divisi)
                                    <tr>
                                        <td class="col-lg-3">{{ $divisi->nama_divisi }}</td>
                                        <td>:</td>
                                        <td>
                                            @foreach ($list_anggota as $anggota)
                                                @if ($anggota->id_divisi == $divisi->id)
                                                    <ul>
                                                        {{ $anggota->jabatan }}
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach ($list_anggota as $anggota)
                                                @if ($anggota->id_divisi == $divisi->id)
                                                    <ul>
                                                        {{ $anggota->nama }}
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-depan>
