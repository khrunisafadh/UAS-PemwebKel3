<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $news = News::latest()->take(3)->get();

        return view('index', ['data' => $news]);
    }

    public function showContact()
    {
        return view('contact');
    }

    public function contactPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        return back();
    }
}
