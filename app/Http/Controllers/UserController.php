<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        $http = Http::post('http://localhost:8000/api/auth', [
            'email' => $request->post('email'),
            'password' => $request->post('password'),
            'remember' => false,
        ]);
        
        $apiResponse = json_decode($http, true);
        if ($apiResponse['result'] !== 'Ok') {
            return back()->with('statusLogin', $apiResponse['result']);
        }

        return view('index');
    }

    public function getRegister()
    {
        $http = Http::get('http://localhost:8000/getSubscriptions');
        $apiResponse = json_decode($http, true);

        return view('registerModal', [
            'subscriptions' => $apiResponse,
        ]);
    }

    public function register(RegisterRequest $request)
    {
        $http = Http::post('http://localhost:8000/api/register', $request->validated());
        $apiResponse = json_decode($http, true);
        if ($apiResponse['result'] !== 'ok') {
            return back()->with('statusRegister', $apiResponse);
        }
        return route('home');
    }

    public function showLogin()
    {
        return view('login');
    }
}
