<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// part 8.1
// cara 1
// Route::get(
//     '/localization/{language}',
//     App\Http\Controllers\LocalizationController::class
// )->name('localization.switch');

//cara 2
Route::get(
    '/localization/{language}',
    [App\Http\Controllers\LocalizationController::class, 'switch']
)->name('localization.switch');

/*
catatan : untuk nama class/file dari controller Localization

awalnya 
nama file:
LocalizationControler.php

nama class
LocalizationControler

ubah menjadi
nama file:
LocalizationController.php

nama class
LocalizationController

(typo: kurang huruf "l")
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('layouts.dashboard');
// });

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
});
