<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{


    public function login(Request $request)
    {

        $email=$request->email;
        $password=$request->password;

        $response =Http::post('http://127.0.0.1:8000/api/Apilogin', [
            'headers'=>[
               'Authorization'=>'Bearer'.session()->get('token.access_token')
            ],
            'query'=>[
            'email' => $email,
            'password' => $password,
            'c_password' => $password,
            ]
        ]);

        $result=json_decode((string)$response->getBody(),true);
        return dd( $result);

    }
}
