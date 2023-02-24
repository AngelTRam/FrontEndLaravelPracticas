<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function loginApi(Request $request)
    {
        $http     = new \GuzzleHttp\Client;
        $email    = $request->email;
        $password = $request->password;
        $response = $http->post('http://127.0.0.1:8000/api/login', [
            'form_params' => [
                'email'   => $email,
                'password' => $password
            ]
        ]);
        $result = json_decode((string)$response->getBody(), true);
        $datos = Http::get('http://127.0.0.1:8000/api/usuarios');
        $usuarios = $datos->json();
        return view('usuarios', Compact('usuarios'),Compact('result'));
    }
}
