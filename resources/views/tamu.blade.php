@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header fs-5 bg-warning">
                    {{ __('List Tamu') }}
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tamu as $t)
                                
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <th>{{ $t->nama }}</th>
                                <td>
                                    <button class="btn btn-sm btn-info">Info</button>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card">
                <div class="card-header fs-5 bg-primary text-light">{{ __('Dashboard') }}</div>

                <form method="post" action="{{ route('tamu.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="">Nama</label>
                            <input type="text" placeholder="" class="form-control " name="nama">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Alamat</label>
                            <input type="text" placeholder="" class="form-control " name="alamat">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">No Telp</label>
                            <input type="text" placeholder="" class="form-control " name="no_telp">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-success">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
