@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Register Page</h2>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="">id</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <labelfor="">password</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="text-center"><button type="button" class="btn btn-primary">Register</button></div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection
