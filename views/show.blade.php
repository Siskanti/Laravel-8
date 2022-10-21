@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <h2>Form Edit Mahasiswa</h2>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/update/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">nama mahasiswa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nanda" value="{{$data->nama}}">
                    </div>

                    <div class="form-group">
                        <label for="nama">nim</label>
                        <input type="text" name="nim" class="form-control" placeholder="H071201055" value="{{$data->nim}}">
                    </div>

                    <div class="form-group">
                        <label for="nama">program studi</label>
                        <input type="text" name="prodi" class="form-control" placeholder="Sistem Informasi" value="{{$data->prodi}}">
                    </div>

                    <div class="form-group">
                        <label for="nama">fakultas</label>
                        <input type="text" name="fakultas" class="form-control" placeholder="Fakultas Mipa" value="{{$data->fakultas}}">
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">+ Add Mahasiswa</button>

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