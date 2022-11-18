<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $http = Http::get('http://127.0.0.1:8000/api/event/index');
        $events = json_decode($http, true);
        
        
        return view('index', compact('events'));
    }
}
