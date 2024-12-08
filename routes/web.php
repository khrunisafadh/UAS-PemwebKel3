<?php

use App\Http\Middleware\Authenticated;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\UnAuthenticated;
use App\Http\Controllers\SportController;
use App\Http\Controllers\PoliticController;
use App\Http\Middleware\AdminAuthenticated;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LifestyleController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\InternationalController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/art', [ArtController::class, 'index']);

Route::get('/category', function () {
    return view('category');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/entertainment', [EntertainmentController::class, 'index']);
Route::get('/entertaiment/{id}', [EntertainmentController::class, 'entertaimentById']);

Route::get('/home1', function () {
    return view('home1');
});
Route::get('/home2', function () {
    return view('home2');
});
Route::get('/home3', function () {
    return view('home3');
});

Route::get('/international', [InternationalController::class, 'index']);
Route::get('/international/{id}', [InternationalController::class, 'internationalById']);

Route::get('/lifestyle', [LifestyleController::class, 'index']);
Route::get('/lifestyle/{id}', [LifestyleController::class, 'lifestyleById']);

Route::get('/national', [NationalController::class, 'index']);
Route::get('/national/{id}', [NationalController::class, 'nationalById']);

Route::get('/politic', [PoliticController::class, 'index']);
Route::get('/politic/{id}', [PoliticController::class, 'politictById']);

Route::get('/sport', [SportController::class, 'index']);
Route::get('/sport/{id}', [SportController::class, 'sportById']);

Route::get('/technology', [TechnologyController::class, 'index']);
Route::get('/technology/{slug}', [TechnologyController::class, 'searchBySlug']);


Route::middleware([UnAuthenticated::class])->group(function () {
    Route::get('/login', [DashboardController::class, 'showLogin']);
    Route::post('/login', [DashboardController::class, 'Authenticated']);
});


Route::get('/forgot_password', function () {
    return view('forgot_password');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/admin', function () {
    return view('adminpanel');
});

Route::get('/adminindex', function () {
    return view('adminindex');
});

Route::get('/adminpanel', function () {
    return view('adminpanel');
});

Route::get('/international1', function () {
    return view('international1');
});
Route::get('/international2', function () {
    return view('international2');
});
Route::get('/international3', function () {
    return view('international3');
});

Route::get('/national1', function () {
    return view('national1');
});
Route::get('/national2', function () {
    return view('national2');
});
Route::get('/national3', function () {
    return view('national3');
});

Route::get('/sport1', function () {
    return view('sport1');
});

Route::get('/sport2', function () {
    return view('sport2');
});

Route::get('/sport3', function () {
    return view('sport3');
});

Route::get('/sport4', function () {
    return view('sport4');
});

Route::get('/sport5', function () {
    return view('sport5');
});

Route::get('/art1', function () {
    return view('art1');
});
Route::get('/art2', function () {
    return view('art2');
});
Route::get('/art3', function () {
    return view('art3');
});
Route::get('/art4', function () {
    return view('art4');
});
Route::get('/art5', function () {
    return view('art5');
});

Route::get('/lifestyle1', function () {
    return view('lifestyle1');
});
Route::get('/lifestyle2', function () {
    return view('lifestyle2');
});
Route::get('/lifestyle3', function () {
    return view('lifestyle3');
});
Route::get('/lifestyle4', function () {
    return view('lifestyle4');
});
Route::get('/lifestyle5', function () {
    return view('lifestyle5');
});

Route::get('/technology1', function () {
    return view('technology1');
});
Route::get('/technology2', function () {
    return view('technology2');
});
Route::get('/technology3', function () {
    return view('technology3');
});
Route::get('/technology4', function () {
    return view('technology4');
});
Route::get('/technology5', function () {
    return view('technology5');
});

Route::get('/politic1', function () {
    return view('politic1');
});
Route::get('/politic2', function () {
    return view('politic2');
});
Route::get('/politic3', function () {
    return view('politic3');
});
Route::get('/politic4', function () {
    return view('politic4');
});
Route::get('/politic5', function () {
    return view('politic5');
});



Route::middleware([Authenticated::class])->group(function () {
    
    Route::post('/logout', [DashboardController::class, 'logout']);
    
    
    Route::middleware([AdminAuthenticated::class])->group(function () {
        Route::get('/adminindex', function () {
            return view('adminindex');
        });
        
        Route::get('/adminpanel', function () {
            return view('adminpanel');
        });
    });
    
    
});

Route::resource('news', NewsController::class);

?>
