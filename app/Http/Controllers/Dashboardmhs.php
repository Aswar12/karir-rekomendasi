<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardmhs extends Controller
{
    public function index()
    {
        return view('dbmahasiswa.index');
    }
}