<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/quote', function () {
    return view('quote');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});



     Route::get('/', [UserController::class, 'home'])->name('home');
     Route::get('/search', [UserController::class, 'search'])->name('search');
     Route::get('/dashboard', function () {
        return view('dashboard');
     })->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/community', [UserController::class, 'create'])->name('form.create');
Route::post('/form/store', [UserController::class, 'store'])->name('form.store');
Route::get('/forms', [UserController::class, 'show'])->name('form.index');
});

require __DIR__.'/auth.php';
