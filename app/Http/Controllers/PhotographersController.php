<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotographersController extends Controller
{
    public function index()
    {
        return view('admin.photographers');
    }
}
