@extends('layouts.default')

@section('content')

<section>
<div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
            <h1>Data Mahasiswa</h1>
            <a href="{{url('create')}}" class="btn btn-primary">Tambah Mahasiswa</a>
            </div>
           <div class="container mt-4">
               <div class="row">
            <table class="table-bordered">
                <tr>
                    <th>No</th>
                    <th>nama mahasiswa</th>
                    <th>nim</th>
                    <th>program studi</th>
                    <th>fakultas</th>
                    <th>Aksi</th>
                </tr>
                @foreach($data as $dataMahasiswa)
                <tr>
                    <td>{{$dataMahasiswa->id}}</td>
                    <td>{{$dataMahasiswa->nama}}</td>
                    <td>{{$dataMahasiswa->nim}}</td>
                    <td>{{$dataMahasiswa->prodi}}</td>
                    <td>{{$dataMahasiswa->fakultas}}</td>
                    <td>
                        <a href="{{url('/show/'.$dataMahasiswa->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/destroy/'.$dataMahasiswa->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                </table>
                
                </div>

</div>
            
            </div>
        </div>
   
</section>
    
@endsection