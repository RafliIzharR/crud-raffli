@extends('layouts.master')

@section('content')
<div class="container">
<h1>Edit Data</h1>

<form action="/warga/{{$warga->id}}" method="POST">
    @method('put')
    @csrf
<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nama</label>
        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nama}}">
    </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nik</label>
        <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->nik}}">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NO KK</label>
            <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga->no_kk}}">
    </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">JENIS KELAMIN</label>
            <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$warga->jenis_kelamin}}">
    </div>
            @csrf
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select><br>  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">alamat</label>  
            <textarea class="form-control" name="alamat" cols="30" rows="10">{{$warga->alamat}}</textarea><br>
        </div>
            <input type="submit" name="submit" class="btn btn-success" value="Update">
</form>
</div>

@endsection