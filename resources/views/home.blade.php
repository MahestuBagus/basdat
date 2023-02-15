@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h6>Info</h6>
                </div>
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="">Nama</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="" class="row needs-validation" novalidate>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" placeholder="" class="form-control   ">
                        </div>
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="input-group has-validation mb-3">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                              </div>
                          </div>
                        <button type="submit" class="btn btn-danger">batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
