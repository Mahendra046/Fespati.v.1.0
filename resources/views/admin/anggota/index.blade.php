<x-app title="Admin | Anggota">
    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Anggota</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Data</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/anggota') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Anggota</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="" class="control-label">Nama</label>
                                                <input type="text" name="nama" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Bagian</label>
                                                <select name="id_divisi" class="form-control">
                                                    <option value="">--Pilih Bagian--</option>
                                                    @foreach ($list_divisi as $item)
                                                    <option value="{{$item->id}}">{{$item->nama_divisi}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Jabatan</label>
                                                <input type="text" name="jabatan" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control" id="">
                                                    <option value="">--Pilih--</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                    <option value="Tidak Diketahui">Tidak Diketahui</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Email</label>
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="control-label">Foto</label>
                                                <input type="file" name="foto" class="form-control">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--Modal Tambah -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-responsive-sm"
                                style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama Anggota</th>
                                        <th>Jabatan</th>
                                        <th>Bagian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_anggota as $anggota)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/anggota', $anggota->id)}}" class="btn btn" style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a>
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$anggota->id}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <x-button.delete id="{{$anggota->id}}"/>
                                                </div>
                                            </td>
                                            <td>{{ $anggota->nama }}</td>
                                            <td>{{ $anggota->jabatan }}</td>
                                            <td>{{ $anggota->divisi->nama_divisi }}</td>
                                        </tr>
                                        {{-- Modal Edit Start--}}
                                        <div class="modal fade" id="edit{{$anggota->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/anggota', $anggota->id) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Anggota</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">

                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama</label>
                                                                <input type="text" name="nama" class="form-control" value="{{$anggota->nama}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Bagian</label>
                                                                <select name="id_divisi" class="form-control">
                                                                    <option value="{{$anggota->divisi->id}}">{{$anggota->divisi->nama_divisi}}</option>
                                                                    @foreach ($list_divisi as $item)
                                                                    <option value="{{$item->id}}">{{$item->nama_divisi}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Jabatan</label>
                                                                <input type="text" name="jabatan" class="form-control" value="{{$anggota->jabatan}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Jenis Kelamin</label>
                                                                <select name="jenis_kelamin" class="form-control" id="">
                                                                    <option value="{{$anggota->jenis_kelamin}}">{{$anggota->jenis_kelamin}}</option>
                                                                    <option value="Laki-laki">Laki-laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                    <option value="Tidak Diketahui">Tidak Diketahui</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Email</label>
                                                                <input type="text" name="email" class="form-control" value="{{$anggota->email}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Foto</label>
                                                                <input type="file" name="foto" class="form-control" value="{{url('public',$anggota->foto)}}">
                                                                <div class="profile-photo">
                                                                    <img src="{{url("public/$anggota->foto")}}" class="img-fluid rounded" alt="">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Modal Edit End --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
