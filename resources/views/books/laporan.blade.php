@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card mt-2">
            <div class="card-header mb-2 pb-2">
                <h4 class="card-title fw-semibold text-success">FORM CETAK LAPORAN</h4>
            </div>
            <div class="card-body">
                <p class="mb-3">Pilih tanggal/bulan/tahun laporan</p>
                <form action="">
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label for="register" class="form-label">Pilih Register</label>
                            <select class="form-control" name="register" id="register">
                                <option value="pilih">Pilih Jenis Register</option>
                                <option value="pilih">Register Penegakkan Hukum</option>
                                <option value="pilih">Register lain</option>
                                <option value="pilih">Register lain</option>
                                <option value="pilih">Register lain</option>
                            </select>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="tglawal" class="form-label">Tanggal Awal</label>
                            <input type="date" class="form-control" id="tglawal" name="tglawal">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="tglakhir" class="form-label">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="tglakhir" name="tglakhir">
                        </div>
                        <div class="col-auto">
                            <label for="" class="col-form-label"></label>
                            <button type="submit" class="btn btn-primary">
                                <i class="ti ti-printer fs-5"></i> Cetak Laporan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection