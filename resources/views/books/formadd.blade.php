{{-- @include('layout.nav') --}}
@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card mt-2">
            <div class="card-header pb-2">
                <h4 class="card-title fw-semibold" style="color: grey">BUKU REGISTER / <span class="text-success">INPUT DATA</span></h4>
            </div>
            <div class="card-body pt-3">
                <button class="btn btn-sm btn-warning" onclick="window.location='{{ url('books') }}'">
                    <i class="fas fa-arrow-left"></i> Kembali
                </button>
                <form method="POST" action="{{ url('books') }}" class="mt-3">
                    @csrf 
                    <div class="row g-3">
                        <div class="col-6">
                                <label for="idregister" class="col-form-label">Id Register</label>
                                <input type="text" class="form-control disable" id="idregister" name="idregister" disabled>
                        </div>
                        <div class="col-6">
                            <label for="txttingkat" class="col-form-label">Tingkat penanganan perkara</label>
                            <input type="text" class="form-control @error('txttingkat') is-invalid @enderror" id="txttingkat" name="txttingkat">
                            @error('txttingkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="noreg" class="col-form-label">No. Reg/ no.perkara/ no.sprint</label>
                            <input type="text" class="form-control @error('txttingkat') is-invalid @enderror" id="noreg" name="noreg">
                            @error('noreg')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror       
                        </div>
                        <div class="col-3">
                            <label for="tgl" class="col-form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tgl" name="tgl">
                        </div>
                        <div class="col-6">
                            <label for="pemohon" class="col-form-label">Pemohon/Penggugat</label>
                            <input type="text" class="form-control" id="pemohon" name="pemohon">
                        </div>
                        <div class="col-6">
                            <label for="termohon" class="col-form-label">Termohon/Tergugat</label>
                            <input type="text" class="form-control" id="termohon" name="termohon">
                        </div>
                        <div class="col-6">
                            <label for="masalah" class="col-form-label">Masalah</label>
                            <input type="text" class="form-control" id="masalah" name="masalah">
                        </div>
                        <div class="col-6">
                            <label for="posisi" class="col-form-label">Kasus posisi</label>
                            <input type="text" class="form-control" id="posisi" name="posisi">
                        </div>
                        <div class="col-6">
                            <label for="tuntutan" class="col-form-label">Tuntutan penggugat/pemohon</label>
                            <input type="text" class="form-control" id="tuntutan" name="tuntutan">
                        </div>
                        <div class="col-6">
                            <label for="jpn" class="col-form-label">JPN</label>
                            <input type="text" class="form-control" id="jpn" name="jpn">
                        </div>
                        <div class="col-6">
                            <label for="tahap" class="col-form-label">Tahap & kegiatan penanganan perkara</label>
                            <input type="text" class="form-control" id="tahap" name="tahap">
                        </div>
                        <div class="col-6">
                            <label for="hasildiluar" class="col-form-label">Hasil kegiatan di luar pengadilan</label>
                            <input type="text" class="form-control" id="hasildiluar" name="hasildiluar">
                        </div>
                        <div class="col-6">
                            <label for="hasilpenetapan" class="col-form-label">Hasil kegiatan penetapan pengadilan</label>
                            <input type="text" class="form-control" id="hasilpenetapan" name="hasilpenetapan">
                        </div>
                        <div class="col-6">
                            <label for="ket" class="col-form-label">Keterangan</label>
                            <input type="text" class="form-control" id="ket" name="ket">
                        </div>
                        <div class="col-auto">
                            <label for="" class="col-form-label"></label>
                            <button type="submit" class="btn btn-primary">
                               <i class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
    


            </div>
        </div>
    </div>

@endsection