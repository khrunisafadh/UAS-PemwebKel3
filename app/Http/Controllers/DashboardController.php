<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        News::where('id', $request->id);

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
        dd($request);
    }
}
