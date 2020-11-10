@extends('layouts.master')

@section('content')


<div class="panel-heading">
    {{-- Kalau ada variabel "success", maka tampilan alert di bawah --}}
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

    <div style="display: flex; justify-content: space-between">
        <h3>Daftar Siswa</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal"
            style="color: white; padding: 10px; margin: 10px 0; background-color:#01A0F0;">
            Tambah murid
        </button>
    </div>
</div>
<div class="panel-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NAMA DEPAN</th>
                <th>NAMA BELAKANG</th>
                <th>EMAIL</th>
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
                <td>{{ $student->email }}</td>
                <td>{{ $student->sex }}</td>
                <td>{{ $student->religion }}</td>
                <td>{{ $student->address }}</td>
                <td>
                    <a href="/students/{{$student->id}}/update-page" class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="/students/{{$student->id}}/delete" class="btn btn-danger"
                        onclick="return confirm('Yakin mau dihapus')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/students/create" method="POST">
                {{-- crsf_field() berguna untuk menambah token, karena di laravel, setiap ada submit harus ada token. Nanti akan muncul <input type="hidden" name="_token" value="random token">. Cek di inspect > elements--}}
                {{csrf_field()}}
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Tambah Murid</h3>
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
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" />
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
