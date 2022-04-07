<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;








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

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth'])->name('home');

// Route::get('/contactpage', function () {
//     return view('contactpage');
// })->middleware(['auth'])->name('contactpage');

// Route::get('/contactpage/confirm', function () {
//     return view('/contactpage/confirm');
// })->middleware(['auth'])->name('/contactpage/confirm');

// Route::post('/contactpage/confirm/completion', function () {
//     return view('/contactpage/confirm/completion');
// })->middleware(['auth'])->name('/contactpage/confirm/completion');

Route::middleware('auth')->group(function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', [ContactController::class,'index'])->name('contact');
        Route::post('/confirm', [ContactController::class,'confirm'])->name('contact.confirm');
        Route::post('/complete', [ContactController::class,'complete'])->name('contact.complete');
        // Route::post('/', [ContactController::class,'store'])->name('contact.store');
    });
});


//Route::get('/contactpage/confirm', 'ContactController@inputConfirm');




    
// Route::post('/contact', [ContactController::class,'store'])->name('contact.store');



require __DIR__.'/auth.php';
