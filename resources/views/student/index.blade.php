@extends('layouts.master')

@section('content')
{{-- Kalau ada variabel "success", maka tampilan alert di bawah --}}
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif

<div class="row mt-3 mb-3">
    <div class="col">
        <h1>Daftar Siswa</h1>
    </div>
    <div class="col">
        <button class="btn btn-primary btn-sm float-right mt-3" data-toggle="modal" data-target="#addStudentModal">+
            Tambah Siswa</button>
    </div>
</div>
<div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>NAMA DEPAN</th>
                <th>NAMA BELAKANG</th>
                <th>JENIS KELAMIN</th>
                <th>AGAMA</th>
                <th>ALAMAT</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($students as $student)

            <tr>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->sex }}</td>
                <td>{{ $student->religion }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <a href="/students/{{$student->id}}/update-page" class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="/students/delete" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
