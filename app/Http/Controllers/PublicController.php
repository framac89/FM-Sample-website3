<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PublicController extends Controller
{
    public function home() {
        return view('home');
    }
}
