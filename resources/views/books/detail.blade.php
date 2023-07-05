@extends('layout.main')

@section('content')
    <!-- Modal Lihat Detail -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('books/'.$idregister) }}">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-6">
                                <label for="idregister" class="col-sm-2 col-form-label">Id Register</label>
                                <input type="text" class="form-control" id="idregister" name="idregister"
                                    value="{{ $idregister }}" disabled>
                            </div>
                            <div class="col-6">
                                <label for="txttingkat" class="col-form-label">Tingkat penanganan perkara</label>
                                <input type="text" class="form-control @error('txttingkat') is-invalid @enderror"
                                    id="txttingkat" name="txttingkat" value="{{ $txttingkat }}">
                                @error('txttingkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="noreg" class="col-form-label">No. Reg/ no.perkara/ no.sprint</label>
                                <input type="text" class="form-control @error('txttingkat') is-invalid @enderror"
                                    id="noreg" name="noreg" value="{{ $noreg }}">
                                @error('noreg')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-3">
                                <label for="tgl" class="col-form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tgl" name="tgl"
                                    value="{{ $tgl }}">
                            </div>
                            <div class="col-6">
                                <label for="pemohon" class="col-form-label">Pemohon/Penggugat</label>
                                <input type="text" class="form-control" id="pemohon" name="pemohon"
                                    value="{{ $pemohon }}">
                            </div>
                            <div class="col-6">
                                <label for="termohon" class="col-form-label">Termohon/Tergugat</label>
                                <input type="text" class="form-control" id="termohon" name="termohon"
                                    value="{{ $termohon }}">
                            </div>
                            <div class="col-6">
                                <label for="masalah" class="col-form-label">Masalah</label>
                                <input type="text" class="form-control" id="masalah" name="masalah"
                                    value="{{ $masalah }}">
                            </div>
                            <div class="col-6">
                                <label for="posisi" class="col-form-label">Kasus posisi</label>
                                <input type="text" class="form-control" id="posisi" name="posisi"
                                    value="{{ $posisi }}">
                            </div>
                            <div class="col-6">
                                <label for="tuntutan" class="col-form-label">Tuntutan penggugat/pemohon</label>
                                <input type="text" class="form-control" id="tuntutan" name="tuntutan"
                                    value="{{ $tuntutan }}">
                            </div>
                            <div class="col-6">
                                <label for="jpn" class="col-form-label">JPN</label>
                                <input type="text" class="form-control" id="jpn" name="jpn"
                                    value="{{ $jpn }}">
                            </div>
                            <div class="col-6">
                                <label for="tahap" class="col-form-label">Tahap & kegiatan penanganan perkara</label>
                                <input type="text" class="form-control" id="tahap" name="tahap"
                                    value="{{ $tahap }}">
                            </div>
                            <div class="col-6">
                                <label for="hasildiluar" class="col-form-label">Hasil kegiatan di luar pengadilan</label>
                                <input type="text" class="form-control" id="hasildiluar" name="hasildiluar"
                                    value="{{ $hasildiluar }}">
                            </div>
                            <div class="col-6">
                                <label for="hasilpenetapan" class="col-form-label">Hasil kegiatan penetapan
                                    pengadilan</label>
                                <input type="text" class="form-control" id="hasilpenetapan" name="hasilpenetapan"
                                    value="{{ $hasilpenetapan }}">
                            </div>
                            <div class="col-6">
                                <label for="ket" class="col-form-label">Keterangan</label>
                                <input type="text" class="form-control" id="ket" name="ket"
                                    value="{{ $ket }}">
                            </div>
                            <div class="col col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                                <button type="reset" class="btn btn-danger">
                                    <i class="fa fa-remove"></i> Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
