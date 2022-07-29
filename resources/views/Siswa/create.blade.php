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
                        @include('alert.error')
                        <h2 class="text-center">Tambah Siswa</h2>
                                        <form class="custom-validation" action="{{ route('siswa.store') }}" method="POST" novalidate="">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" required="" placeholder="Silahkan Input Nama" name="nama">
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
                                                {{-- <textarea required="" class="form-control" rows="5"></textarea> --}}
                                                <textarea type="textarea" class="form-control" required="" placeholder="Silahkan Input Alamat" name="alamat"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label>Email</label>
                                                <div>
                                                    <input type="email" class="form-control" required="" name="email" parsley-type="Email" placeholder="Silahkan Masukan e-mail">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label>Telepon</label>
                                                <input type="text" class="form-control" required="" placeholder="Silahkan Input Telepon" name="telepon">
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