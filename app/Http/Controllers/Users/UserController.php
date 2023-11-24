<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getData(request $request){
        //nama = 'Jenny'
        //email = 'jejenurdianti@gmail.com'

        $nama =$request->get(key:'nama');
        $request=$request->get(key:'email');

        $arrNama = [
            'nama'=>$nama,
            'email'=>$email
        ];
        return json_encode($arrNama);
    }
    public function createDataUser(Request $request) {
        $post = $request ->post();
        $nama = $request->post('nama');
        $email= $request->post('email');
        $no_telp= $request->post( 'no_telp');

        $isValid = self ;; cekUser (username $arr['username']);
        if ($isValid){
            $res['status'] = true;
            $res['message'] = 'Username Valid';
        } else {
            $res['status'] = false;
            $res['message'] = 'Username Tidak Valid';
        }
    }
        return $res;

    private function cekUser($username){
        if ($username == 'Jenny'){
            return true;
        } else {
            return false;
        }

    }

    public function editDataUser(Request $request) {
        $post = $request ->post();
        $nama = request->post( key 'nama' );
        $email= request->post( key 'email' );
        $no_telp= request->post( key 'no_telp' );

        $isValid = self ;; cekUser (username $arr['username']);
        if ($isValid){
            $res['status'] = true;
            $res['message'] = 'Username Valid';
        } else {

        }

    }

        return $arr;

    private function cekUser($username){
        if ($username == 'Jenny'){
            return true;
        } else {
            return false;
        }

    }


}

