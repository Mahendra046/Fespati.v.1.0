<x-app title="Admin | Data Bagian">
    <div class="container-fluid">
        <h6>Note: Jika Ingin Menghapus Bagian Hapus Anggota Terlebih Dahulu</h6>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Bagian</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
                            <i class="fa fa-plus"></i> Tambah Data</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form action="{{ url('admin/divisi') }}" method="post">
                                        @csrf
                                        <div class="modal-header" style="background: #3b4268">
                                            <h5 class="modal-title text-white">Tambah Data Bagian</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="" class="control-label">Nama Bagian</label>
                                                <input type="text" name="nama_divisi" class="form-control">
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
                                        <th>Nama Bagian</th>
                                        <th>Jumlah Anggota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_divisi as $divisi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/divisi', $divisi->id)}}" class="btn btn" style="background: rgb(13, 186, 195)">
                                                        <i class="fa fa-info" style="color: black"></i>
                                                    </a>
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$divisi->id}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    @if ($divisi->anggota->count() == 0)
                                                    <x-button.delete id="{{$divisi->id}}"/>
                                                    @endif

                                                </div>
                                            </td>
                                            <td>{{ $divisi->nama_divisi }}</td>
                                            <td>{{ $divisi->anggota->count() }}</td>
                                        </tr>
                                        {{-- Modal Edit Start--}}
                                        <div class="modal fade" id="edit{{$divisi->id}}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ url('admin/divisi', $divisi->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-header" style="background: #3b4268">
                                                            <h5 class="modal-title text-white">Edit Data Bagian</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">

                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Bagian</label>
                                                                <input type="text" name="nama_divisi" value="{{$divisi->nama_divisi}}" class="form-control">
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
