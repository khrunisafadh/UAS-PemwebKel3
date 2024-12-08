<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function searchBySlug($kategori, $slug)
    {
        $new = News::where('slug', $slug)->first();
        $sameNews = News::where('category_id', $new->category_id)->inRandomOrder()->limit(5)->get();

        return view('art1', ['data' => $new, 'news' => $sameNews]);
    }

    public function indexCategory($kategori): View
    {
        $categoryId = Category::where('name', $kategori)->first();
        $news = News::where('category_id', $categoryId->id)->paginate(10);

        return view('art', ['data' => $news, 'title' => $kategori]);
    }
}
