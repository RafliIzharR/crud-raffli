@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-secondary" href="/warga/create">Tambah Data</a>
        <table class="table table-success table-striped">
<tr>
<th>NO</th>
<th>NAMA</th>
<th>NIK</th>
<th>NO KK</th>
<th>JENIS KELAMIN</th>
<th>ALAMAT</th>
<th>ACTION</th>
</tr>
@php
    $no =   1;
@endphp
@foreach ($warga as $sw)
<tr>
<th scope="sw">{{ $no++ }}</th>
<td>{{$sw->nama}}</td>
<td>{{$sw->nik}}</td>
<td>{{$sw->no_kk}}</td>
<td>{{$sw->jenis_kelamin}}</td>
<td>{{$sw->alamat}}</td>
<td>{{$sw->action}}</td>
<td>
<div class="btn-group" role="group" aria-label="Basic example">    
                        <a class="btn btn-success" href="/warga/{{$sw->id}}/edit">Edit</a>
                            <form action="/warga/{{$sw->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-warning" type="submit" name="submit" value="Hapus" onclick="confirm('Sure?')">
                            </form>
                    </div>
                    </td>
                </tr>
        @endforeach
    </table>
        </div>
@endsection