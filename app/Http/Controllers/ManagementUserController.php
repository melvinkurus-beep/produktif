<?php

namespace app\http\controllers;

use illuminate\http\request;

use App\Http\Controllers\Controller;

class ManagementUserController extends controller
{
    public function index(){
        $nama ="tama";
        $pelajaran =["pemweb","mtk"];
        return view('home',compact('nama','pelajaran'));
    }

    // public function create(){
    //     return "untuk menampilkan form";
    // }

    // public function store (Requset $request){
    //     return "buat new user";
    // }

    // public function show($id){
    //     return "ambil data sngn id".$id;
    // }

    //  public function edit($id){
    //     return "edit data".$id;
    // }

    //  public function update(Requset $request, $id){
    //     return "ubah data user dengan id".$id;
    // }

    //  public function destroy($id){
    //     return "hapus user".$id;
    // }

}