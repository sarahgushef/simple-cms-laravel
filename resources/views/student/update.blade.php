@extends('layouts.master')

@section('content')
{{-- Kalau ada variabel "success", maka tampilan alert di bawah --}}
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif

<div class="panel-heading">
    <h3>Edit Data Siswa</h3>
</div>
<div class="panel-body">
    <form action="/students/{{$student->id}}/update" method="POST">
        {{-- crsf_field() berguna untuk menambah token, karena di laravel, setiap ada submit harus ada token. Nanti akan muncul <input type="hidden" name="_token" value="random token">. Cek di inspect > elements--}}
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="firstName">Nama Depan</label>
            <input type="text" class="form-control" id="firstName" name="first_name" value="{{$student->first_name}}" />
        </div>
        <div class="form-group">
            <label for="lastName">Nama Belakang</label>
            <input type="text" class="form-control" id="lastName" name="last_name" value="{{$student->last_name}}" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}" />
        </div>
        <div class="form-group">
            <label for="sex">Jenis Kelamin</label>
            <select class="form-control" id="sex" name="sex">
                <option value="pria" @if($student->sex === "pria") selected @endif>Pria</option>
                <option value="wanita" @if($student->sex === "wanita") selected @endif>Wanita</option>
            </select>
        </div>
        <div class="form-group">
            <label for="religion">Agama</label>
            <select class="form-control" id="religion" name="religion">
                <option value="islam" @if($student->religion === "islam") selected @endif>Islam</option>
                <option value="kristen" @if($student->religion === "kristen") selected @endif>Kristen</option>
                <option value="khatolik" @if($student->religion === "khatolik") selected @endif>Khatolik</option>
                <option value="hindu" @if($student->religion === "hindu") selected @endif>Hindu</option>
                <option value="buddha" @if($student->religion === "buddha") selected @endif>Buddha</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <textarea class="form-control" id="address" name="address" rows="3">{{$student->address}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ubah data</button>
    </form>
</div>

<!-- Vertically centered scrollable modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/students/create" method="POST">
                {{-- crsf_field() berguna untuk menambah token, karena di laravel, setiap ada submit harus ada token. Nanti akan muncul <input type="hidden" name="_token" value="random token">. Cek di inspect > elements--}}
                {{csrf_field()}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Murid</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="firstName">Nama Depan</label>
                        <input type="text" class="form-control" id="firstName" name="first_name" />
                    </div>
                    <div class="form-group">
                        <label for="lastName">Nama Belakang</label>
                        <input type="text" class="form-control" id="lastName" name="last_name" />
                    </div>
                    <div class="form-group">
                        <label for="sex">Jenis Kelamin</label>
                        <select class="form-control" id="sex" name="sex">
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="religion">Agama</label>
                        <select class="form-control" id="religion" name="religion">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="khatolik">Khatolik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah Murid</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
