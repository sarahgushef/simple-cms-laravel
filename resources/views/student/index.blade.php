<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>SMA 2 Tangerang Selatan</title>
</head>
<body>
    <div class="container">
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
                <button class="btn btn-primary btn-sm float-right mt-3" data-toggle="modal" data-target="#addStudentModal">+ Tambah Siswa</button>
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
                            <button class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Vertically centered scrollable modal -->
        <div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" >
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
                                    <input type="text" class="form-control" id="firstName" name="first_name"/>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Nama Belakang</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name"/>
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
                                    <select class="form-control" id="religion" name="religion" >
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
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
