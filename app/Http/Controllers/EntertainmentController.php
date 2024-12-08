<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    public function index()
    {
        return view('entertainment');
    }

    public function entertainmentById($id)
    {
        return view("entertainment{$id}");
    }
    
}
