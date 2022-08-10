<?php

namespace App\Controllers;

class LansiaController extends BaseController
{
    public function index()
    {
        return view('LansiaViews/index.php');
    }

    public function buat()
    {
        return view('LansiaViews/create.php');
    }
}
