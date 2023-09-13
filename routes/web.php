<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/fresh-migrate', [PageController::class, 'freshMigrate']);

Route::get('/', function () {
    return view('login');
});

Route::get('login', function () {
    return view('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


Route::post('login', [PageController::class, 'login'])->name('login');
// Route::POST('logout', [PageController::class, 'logout'])->name('logout');


    Route::get('/Home', [PageController::class, 'adminhome'])->name('admin.home');
    Route::get('/Ingredient', [PageController::class, 'adminingredient'])->name('admin.ingredient');
    Route::post('/Add_Ingredient', [PageController::class, 'admin_add_ingredient'])->name('admin.add_ingredient');

    

    Route::get('/Menu', [PageController::class, 'pos_menu'])->name('pos.menu');
