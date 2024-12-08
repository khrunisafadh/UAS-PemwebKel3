<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $techNews = News::where('category_id', 2)->paginate(15);
        
        return view('technology', ['data' => $techNews]);
    }

    public function searchBySlug($slug)
    {
        $techNew = News::where('slug', $slug)->first();
        $techSameNews = News::where('category_id', $techNew->category_id)->take(5)->get();
        
        return view('technology1', ['data' => $techNew, 'sameNews' => $techSameNews]);
    }
}
