<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index (){
        $data1 =[
            [
            'nama'=> 'Jenny',
            'email' => 'jejenurdianti@gmail.com',
            'telp' => '085523701408',
            'alamat' => [
                'street' => 'buahbatu',
                'postcode' => '112'



            ]

            ]
        ];

        $data2 =[
            [
            'nama'=> 'Naya',
            'email' => 'naya@gmail.com',
            'telp' => '0850000000',
            'alamat' => [
                'street' => 'blitar',
                'postcode' => '001'
            ]
        ]
        ];

        $data3 =[
            [
            'nama'=> 'Muklis',
            'email' => 'muklis@gmail.com',
            'telp' => '0850000212121',
            'alamat' => [
                'street' => 'jakarta',
                'postcode' => '5454'
            ]
        ]
        ];

        $data = array_merge($data1, $data2,$data3);
        $id ='111';

    return view ('user/user', compact ('data', 'id'));

    }
    public function create(){
        return view ('user.create');
    }

    public function edit(){
        return view ('user.edit');
    }







}
