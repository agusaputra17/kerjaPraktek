{{-- @include('layout.nav') --}}
@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card col-12 mb-1">
            <div class="card-header pb-2">
                <h4 class="card-title fw-semibold text-success">R.DATUN.1 | REGISTER PENEGAKKAN HUKUM</h4>
            </div>
            <div class="card-body pt-3">
                <div class="row row-cols-2">
                    <div class="col col-md-2">
                        <button class="btn btn-sm btn-primary mb-0 fs-3" onclick="window.location='{{ url('books/add') }}'">
                            <i class="fa fa-plus-circle"></i> Tambah Data
                        </button>
                    </div>
                    <div class="col col-md-10 flex-column d-flex align-items-end">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 bg-light py-1" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="border-0 bg-body"><i class="fa fa-search fs-4"></i> </button>
                        </form>
                    </div>
                </div>
                <div class="table-responsive mt-0 pt-2 pl-0">
                    @if (session('msg'))
                        <div class="alert alert-primary alert-dismissible fade show full-width" role="alert">
                            {{ session('msg') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <table class="table table-d-sm-flex table-striped table-bordered mt-0" id="dataTable" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tingkat penangan perkara</th>
                                <th>No. Reg/ no.perkara/ no.sprint</th>
                                <th>Tanggal</th>
                                <th>Pemohon/ penggugat</th>
                                <th>Termohon/ tergugat</th>
                                <th>Masalah</th>
                                {{-- <th>Kasus posisi</th>
                                <th>Tuntutan penggugat/ pemohon</th>
                                <th>JPN</th>
                                <th>Tahap & kegiatan penanganan perkara</th>
                                <th>Hasil kegiatan di luar pengadilan</th>
                                <th>Hasil kegiatan penetapan pengadilan</th> --}}
                                <th>Keterangan</th>
                                <th width="130px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $row->tingkat_penanganan }}</td>
                                    <td>{{ $row->no_perkara }}</td>
                                    <td>{{ $row->tgl }}</td>
                                    <td>{{ $row->pemohon }}</td>
                                    <td>{{ $row->termohon }}</td>
                                    <td>{{ $row->masalah }}</td>
                                    {{-- <td>{{ $row->kasus_posisi }}</td>
                                    <td>{{ $row->tuntutan_penggugat }}</td>
                                    <td>{{ $row->jpn }}</td>
                                    <td>{{ $row->tahap_penanganan }}</td>
                                    <td>{{ $row->hasil_diluar }}</td>
                                    <td>{{ $row->hasil_penetapan }}</td> --}}
                                    <td>{{ $row->ket }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning" title="Lihat Detail" onclick="window.location='{{ url('books/detail/' . $row->idregister) }}'" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fas fa-circle-info"></i>
                                        </button>
                                        <button onclick="window.location='{{ url('books/' . $row->idregister) }}'"
                                            type="button" class="btn btn-sm btn-info" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <form onsubmit="return deleteData('{{ $row->no_perkara }}')" style="display:inline"
                                            method="POST" action="{{ url('books/' . $row->idregister) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Hapus Data" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    

    <script>
        function deleteData(noreg) {
            pesan = confirm('Yakin data register dengan nomor perkara ${noreg} akan dihapus ?');
            if (pesan) return true;
            else return false;
        }
    </script>
@endsection
