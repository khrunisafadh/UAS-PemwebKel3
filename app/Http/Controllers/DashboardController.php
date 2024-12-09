<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\returnSelf;

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

            return redirect('/dashboard/news');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showDashboard(): View
    {
        $news = News::get();

        return view('dashboard/index', ['data' => $news]);
    }

    public function showDashboardNews(): View
    {
        $news = News::get();

        return view('dashboard/news', ['data' => $news]);
    }

    public function showEditNew($id): View
    {
        $new = News::where('id', $id)->first();
        $category = Category::all();

        return view('dashboard/editNew', ['berita' => $new, 'categories' => $category]);
    }

    public function EditNew($id, Request $request)
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


        News::where('id', $id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'author' => $request->author,
            'content' => $request->konten,
            'image' => $imageName,
            'category_id' => $request->category_id
        ]);

        return redirect('/dashboard/news')->with('edit-success', 'Berhasil mengedit berita');
    }

    public function deleteNew(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => 'required'
        ]);

        $new = News::where('id', $request->id);

        $new->delete();


        return back()->with('delete-success', 'Berhasil menhapus berita');
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
        return view('dashboard/news/add', ['categories' => $category]);
    }

    public function addNews(Request $request)
    {
        // dd($request);

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

        return back()->with('succes-edit', 'Berhasil menambah berita');
    }

    public function showMessage()
    {
        $pesan = Contact::get();
        return view('dashboard/message', ['data' => $pesan]);
    }
}
