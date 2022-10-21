@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <h2>Form Tambah Mahasiswa</h2>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nim</label>
                        <input type="text" name="nim" class="form-control" placeholder="Masukkan Nim Anda">
                    </div>

                    <div class="form-group">
                        <label for="nama">Prodi</label>
                        <input type="text" name="prodi" class="form-control" placeholder="Masukkan Nama Prodi Anda">
                    </div>

                    <div class="form-group">
                        <label for="nama">Fakultas</label>
                        <input type="text" name="fakultas" class="form-control" placeholder="Masukkan Nama Fakultas Anda">
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Add Mahasiswa</button>

                        <div class="form-group mt-2">
                        <a href="{{url('/')}}"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection