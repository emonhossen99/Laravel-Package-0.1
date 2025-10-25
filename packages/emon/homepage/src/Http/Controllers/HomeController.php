<?php

namespace Emon\Homepage\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
