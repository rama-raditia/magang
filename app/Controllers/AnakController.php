<?php

namespace App\Controllers;

class AnakController extends BaseController
{
    public function index()
    {
        return view('AnakViews/index.php');
    }

    public function buat()
    {
        return view('AnakViews/create.php');
    }
}
