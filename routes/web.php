<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminsController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/contact-us',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/about-us',[App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/interior-design',[App\Http\Controllers\HomeController::class, 'interior_design'])->name('interior-design');
Route::get('/set-design',[App\Http\Controllers\HomeController::class, 'set_design'])->name('set-design');
Route::get('/landscaping',[App\Http\Controllers\HomeController::class, 'landscaping'])->name('landscaping');
Route::get('/furniture-design',[App\Http\Controllers\HomeController::class, 'furniture_design'])->name('furniture-design');
Route::get('/latest-news',[App\Http\Controllers\HomeController::class, 'news'])->name('latest-news');
Route::get('/latest-news/{id}',[App\Http\Controllers\HomeController::class, 'new_single'])->name('latest-news-single');

Route::get('/terms-and-conditions',[App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy',[App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/copyright',[App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');

// Clear Routes
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('config:clear');
    echo "Done";
});

