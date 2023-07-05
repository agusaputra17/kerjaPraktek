@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card mt-2">
            <div class="card-header pb-2">
                <h4 class="card-title fw-semibold text-success">PROFIL INSTANSI</h4>
            </div>
            <div class="card-body">
                
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
                            <label for="" class="col-form-label"></label>
                            <button type="button" class="btn btn-success" onclick="window.location='{{ url('edit-instansi') }}'">
                                <i class="fa fa-edit"> </i>  Edit
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
