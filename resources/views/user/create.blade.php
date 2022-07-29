@extends('layouts.template')
@section('title')
Admin
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        @include('alert.error')
                        <h2 class="text-center">Tambah User</h2>
                                        <form class="custom-validation" action="{{ route('user.store') }}" method="POST" novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" required="" placeholder="Silahkan Input Nama" name="name">
                                            </div>
                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control" required="" name="email" parsley-type="Email" placeholder="Silahkan Masukan e-mail">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Password</label>
                                                <div>
                                                    <input type="password" class="form-control" required="" name="password" parsley-type="Password" placeholder="Enter Password">
                                                </div>
                                            </div>
                                            
                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
        
                                    </div>
                                    </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    </div> <!-- main-content --> 
@endsection