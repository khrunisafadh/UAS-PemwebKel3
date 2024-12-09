<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{

    public function showLogin(): View
    {
        return view('login');
    }

    public function Authenticated(Request $request): RedirectResponse
    {
        // dd($request);

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function login(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showDashboard(): View
    {
        $news = News::get();

        return view('adminindex', ['data' => $news]);
    }

    public function editNew($id): View
    {
        $new = News::where('id', $id)->first();
        $category = Category::all();

        return view('editNew', ['berita' => $new, 'categories' => $category]);
    }

    public function deleteNew(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => 'required'
        ]);

        $new = News::where('id', $request->id);

        $new->delete();


        return back();
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showAddNew(): View
    {
        $category = Category::all();
        return view('adminpanel', ['categories' => $category]);
    }

    public function addNews(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'konten' => 'required',
            'category_id' => 'required'
        ]);


        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'author' => $request->author,
            'image' => $imageName,
            'content' => $request->konten,
            'category_id' => $request->category_id
        ]);

        return back();
    }
}
