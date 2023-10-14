<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data['mahasiswa']=[
            ['nama' =>'Mahasiswa 1',
             'npm' =>'5520121990'],
            ['nama' =>'Mahasiswa 2',
             'npm' =>'5520121090']
        ];
        $dataMhs=null;
    foreach($data as $key=>$mhs){
        if($mhs['npm'] == $id){
            $dataMhs=$data[$key];
            }
        }
    if($dataMhs==null){
        return redirect()->back();
        }
    return view('mahasiswa.index')->with($dataMhs);
    }
    public function edit(){
        $data['mahasiswa']=[
            ['nama' =>'Mahasiswa 1',
             'npm' =>'5520121990'],
            ['nama' =>'Mahasiswa 2',
             'npm' =>'5520121090']
        ];
    return view('mahasiswa.edit',compact('dataMhs'));
    }
}
