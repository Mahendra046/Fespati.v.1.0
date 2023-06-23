<x-app title="Ketua | Anggota Detail">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"> <img src="{{ url('public/focus/images/fespati-background.jpg') }}"
                                    style="background-size: cover;
                                background-position: center;
                                height: 300px;
                                width: 100%;"
                                    alt=""></div>
                            <div class="profile-photo">
                                <img src="{{ url("public/$anggota->foto") }}" class="img-fluid rounded-circle"
                                    alt="">
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-name">
                                                <h4 class="text-primary">{{ $anggota->nama }}</h4>
                                                <p>{{ $anggota->status_panahan }}</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-email">
                                                <h4 class="text-muted">{{ $anggota->jenis_panahan }}</h4>
                                                <p>Jenis Panahan</p>
                                            </div>
                                        </div>
                                        <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                            <div class="profile-call">
                                                <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                <p>Phone No.</p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <div class="row">
                                    <div class="col-12">

                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab"
                                                    class="nav-link active show">Profil</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">

                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="profile-personal-info">
                                                    <br>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Nama <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->nama }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Club <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->club->nama_club }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Status Panahan <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->status_panahan }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Jenis Panahan <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->jenis_panahan }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Tanggal Lahir <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->tanggal_lahir }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Umur <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->umur }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Jenis Kelamin <span
                                                                    class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->jenis_kelamin }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">No. Hp <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>{{ $anggota->no_hp }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <br>
                                            <div class="row">
                                                <br>
                                                @if ($anggota->status_registrasi == 'Diproses')
                                                    <span class="badge badge-warning">{{ $anggota->status_registrasi }}</span>
                                                @endif
                                                @if ($anggota->status_registrasi == 'Ditolak')
                                                    <span class="badge badge-danger">{{ $anggota->status_registrasi }}</span>
                                                @endif
                                                @if ($anggota->status_registrasi == 'Diterima')
                                                    <span class="badge badge-success">{{ $anggota->status_registrasi }}</span>
                                                @endif
                                            </div>
                                            <br>
                                            <div class="row">
                                                <h5>Keterangan :</h5>
                                                <span class="ml-2">{{$anggota->keterangan}}</span>
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
