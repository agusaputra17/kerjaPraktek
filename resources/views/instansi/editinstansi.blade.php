@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card mt-2">
            <div class="card-header pb-2">
                <h4 class="card-title fw-semibold" style="color: grey">PROFIL INSTANSI / <span class="text-success">FORM EDIT</span></h4>
            </div>
            <div class="card-body">
                <button class="btn btn-sm btn-warning" onclick="window.location='{{ url('instansi') }}'">
                    <i class="fas fa-arrow-left"></i> Kembali
                </button>
                <form method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-6">
                            <label for="idregister" class="col-form-label">Kepala Kejaksaan Negeri Baubau</label>
                            <input type="text" class="form-control" id="idregister" name="idregister" value="">
                        </div>
                        <div class="col-6">
                            <label for="txttingkat" class="col-form-label">Kepala Seksi Perdata & TUN</label>
                            <input type="text" class="form-control" name="txttingkat" value="">
                        </div>
                        <div class="col-6">
                            <label for="txttingkat" class="col-form-label">NIP Kajari</label>
                            <input type="text" class="form-control" name="txttingkat" value="">
                        </div>
                        <div class="col-6">
                            <label for="txttingkat" class="col-form-label">NIP Kasi Datun</label>
                            <input type="text" class="form-control" name="txttingkat" value="">
                        </div>
                        <div class="col-6">
                            <label for="txttingkat" class="col-form-label">Tingkat</label>
                            <input type="text" class="form-control" name="txttingkat" value="">
                        </div>
                        <div class="col-6">
                            <label for="txttingkat" class="col-form-label">Tingkat</label>
                            <input type="text" class="form-control" name="txttingkat" value="">
                        </div>
                        <div class="col col-12">
                            <button type="submit" class="btn btn-primary">
                               <i class="fa fa-save"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-danger">
                               <i class="fa fa-remove"></i> Reset
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
