<x-app title="Admin | Anggota-Detail">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"><img src="{{url('public')}}/focus/images/fespati-background.jpg" alt="" style="background-size: cover;
                                background-position: center;
                                min-height: 250px;
                                width: 100%;"></div>
                            <div class="profile-photo">
                                <img src="{{url("public/$detail->foto")}}" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-name">
                                                <h4 class="text-primary">{{$detail->nama}}</h4>
                                                <p>{{$detail->jabatan}}</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile-email">
                                                <h4 class="text-muted">{{$detail->email}}</h4>
                                                <p>Bagian {{$detail->divisi->nama_divisi}}</p>
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
                                    <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">About Me</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <div class="profile-about-me">
                                        </div>
                                        <div class="profile-personal-info">
                                            <br>
                                            <h4 class="text-primary mb-4">Data Keanggotaan</h4>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Nama <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>{{$detail->nama}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-9"><span>{{$detail->email}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Jenis Kelamin <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-9"><span>{{$detail->jenis_kelamin}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Jabatan <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-9"><span>{{$detail->jabatan}}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-3">
                                                    <h5 class="f-w-500">Bagian <span class="pull-right">:</span></h5>
                                                </div>
                                                <div class="col-9"><span>{{$detail->divisi->nama_divisi}}</span>
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
        <!-- row -->
    </div>
</x-app>
