<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dress;

class MainController extends Controller
{
    //
    public function index() {
        return view('home');
    }

    public function dresses() {

        $data = Dress::all();
        return view('dresses');
    }

    public function info() {
        return view('info');
    }
}
