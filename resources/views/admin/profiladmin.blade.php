@extends('layout.main')

@section('content')
    <div class="container-fluid">
        <div class="card mt-2">
            <div class="card-header pb-2">
                <h4 class="card-title fw-semibold text-success">PROFIL ADMIN</h4>
            </div>
            <div class="card-body">
                
                <form method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="idregister" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="idregister" name="idregister" value="">
                        </div>
                        <div class="col-12">
                            <label for="txttingkat" class="col-form-label">Username</label>
                            <input type="text" class="form-control" name="txttingkat" value="">
                        </div>
                        <div class="col-12">
                            <label for="txttingkat" class="col-form-label">Password</label>
                            <input type="password" class="form-control" name="txttingkat" value="">
                        </div>
                        <div class="col col-12">
                            <label for="" class="col-form-label"></label>
                            <button type="button" class="btn btn-success" onclick="window.location='{{ url('edit-admin') }}'">
                                <i class="fa fa-edit"> </i>  Edit
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection
