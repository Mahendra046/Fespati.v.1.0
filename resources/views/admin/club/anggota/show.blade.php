<x-app title="Admin | Detail Anggota">
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
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab"
                                            class="nav-link active show">Profil</a>
                                    </li>
                                </ul>
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
                                                        <span
                                                            class="badge badge-warning">{{ $anggota->status_registrasi }}</span>
                                                    @endif
                                                    @if ($anggota->status_registrasi == 'Ditolak')
                                                        <span
                                                            class="badge badge-danger">{{ $anggota->status_registrasi }}</span>
                                                    @endif
                                                    @if ($anggota->status_registrasi == 'Diterima')
                                                        <span
                                                            class="badge badge-success">{{ $anggota->status_registrasi }}</span>
                                                    @endif
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <h5>Keterangan :</h5>
                                                    <span class="ml-2">{{ $anggota->keterangan }}</span>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <h6>Bukti Pendaftaran</h6>
                                                    <style>
                                                        .zoom {
                                                            display: inline-block;
                                                            transition: transform 0.3s;
                                                            cursor: pointer;
                                                        }

                                                        .zoom:hover {
                                                            transform: scale(1.2);
                                                            /* Ukuran gambar saat di-hover */
                                                        }

                                                        .zoom.active {
                                                            transform: scale(1.5);
                                                            /* Ukuran gambar saat diklik */
                                                        }
                                                    </style>

                                                    <img class="zoom"
                                                        src="{{ url("public/$anggota->bukti_pendaftaran") }}"
                                                        style="width: 300px" alt="Gambar" onclick="toggleZoom(this)">

                                                    <script>
                                                        function toggleZoom(img) {
                                                            img.classList.toggle("active");
                                                        }
                                                    </script>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    @if ($anggota->status_registrasi == 'Diproses')
                                                        <button type="button" class="btn btn-success"
                                                            data-toggle="modal" data-target=".terima">Terima</button>
                                                        <div class="modal fade terima" tabindex="-1" role="dialog"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="background: #3b4268">
                                                                        <h5 class="modal-title text-white">Berikan Keterangan</h5>
                                                                        <button type="button" class="close" style="color:aliceblue"
                                                                            data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form
                                                                        action="{{ url('admin/anggota/terima', $anggota->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="" class="control-label">Keterangan</label>
                                                                                    <input type="text" class="form-control" name="keterangan">
                                                                                </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if ($anggota->status_registrasi == 'Diproses')
                                                        <button type="button" class="btn btn-danger ml-1"
                                                            data-toggle="modal"
                                                            data-target=".tolak">Tolak</button>
                                                        <div class="modal fade tolak" tabindex="-1"
                                                            role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="background: #3b4268">
                                                                        <h5 class="modal-title text-white">Berikan Keterangan Penolakan Anggota</h5>
                                                                        <button type="button" class="close" style="color:aliceblue"
                                                                            data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="{{url('admin/anggota/tolak',$anggota->id)}}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="" class="control-label">Keterangan</label>
                                                                                <input type="text" class="form-control" name="keterangan">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                            <button
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
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
