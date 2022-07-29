@extends('layouts.template')
@section('title')
Siswa
@endsection

<!-- ini untuk isi home -->
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Edit Siswa</h2>
                                        <form class="custom-validation" action="{{ route('siswa.update',[$user->id]) }}" method="POST" novalidate="">
                                            @csrf
                                            {{ method_field('PUT') }}
                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" required="" value="{{ $user->nama }}" name="nama">
                                            </div>
                                            <div class="mb-3">
                                                <label>Jenis Kelamin</label>
                                                <select id="JenisKelamin" name="jenis"  class="form-control" >
                                
            
                                                    <option value="Pria" >Pria</option>
                                                    <option value="Wanita" >Wanita</option>
                                                  
                                                    
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label>Alamat</label>
                                                <input type="textarea" class="form-control" required="" value="{{ $user->alamat }}" name="alamat">
                                            </div>
                                            <div class="mb-3">
                                                <label>E-Mail</label>
                                                <div>
                                                    <input type="email" class="form-control" required="" name="email" parsley-type="Email" value="{{ $user->email }}">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Telepon</label>
                                                <input type="text" class="form-control" required="" value="{{ $user->telepon }}" name="telepon">
                                            </div>
        
                                            
                                            <div class="mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Edit
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