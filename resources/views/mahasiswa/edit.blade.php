@extends('layout.dasboard.master');
@section('content')
<h1>data.Mahasiswa</h1>
<div class="container">
    <form action="">
        <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text"class="form-control" id="nama" value="{{ $dataMhs['nama'] }}">
        </div>
        <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text">
            <input type="text"class="form-control" id="nama" value="{{ $dataMhs['npm'] }}">
        </div>
        <button type="submit" class="btn-btn-primary">submit</button>
    </form>
</div>
<h1>Mahasiswa</h1>
    <div class="container">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama </th>
                <th>NPM</th>
            </thead>
            <tbody>
                @foreach($mahasiswa as $key => $mhs)
                <tr>
                    <td>0</td>
                    <td>{{$key+=1}}</td>
                    <td>{{$mhs['nama']}}</td>
                    <td>{{$mhs['npm']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection