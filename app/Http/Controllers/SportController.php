<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
        return view('sport');
    }

    public function sportById($id)
    {
        return view("sport{$id}");
    }
}
