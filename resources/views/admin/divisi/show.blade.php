<x-app title="Admin | Detail Bagian">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bagian {{ $list_detail->nama_divisi }}</h4>
                        <div class="button-group float-right">
                            {{-- <x-button.delete label=" Hapus Semua Anggota" path="admin/divisi/deleteanggotaall/" id="{{$list_detail->id}}"/> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>email</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_detail->anggota as $dataAnggota)
                                        <tr>

                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $dataAnggota->nama }}</td>
                                            <td><span>{{ $dataAnggota->jabatan }}</span>
                                            </td>
                                            <td>{{ $dataAnggota->email }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/divisi/infoanggota', $dataAnggota->id) }}"
                                                        class="btn btn"
                                                        style="background: rgb(13, 186, 195);color:black;">
                                                        <i class="fa fa-info"></i>
                                                    </a>
                                                    <x-button.delete path="admin/divisi/deleteanggota/" id="{{ $dataAnggota->id }}"/>
                                                </div>
                                            </td>
                                        </tr>
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
