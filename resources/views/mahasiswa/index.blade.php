@extends('layoui.dasboard.master')
@content()

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
