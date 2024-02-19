<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\PageController;




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

Route::get('/', [PageController::class, 'resolovePages']);

Route::get('contact', [PageController::class, 'resolovePages']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
}); //->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('page-manager', [PageController::class,'index']);

Route::get('page/liveedit/{section_id}',[SectionsController::class,'liveEdit']);

Route::post('sections/uploadsliderimage',[SectionsController::class,'uploadSliderImages'])->name('upload-slider-images');

Route::get('page/sections/{page_id}',[SectionsController::class,'getPageSections']);

Route::post('section/save',[SectionsController::class, 'saveSection'])->name('section.save');

require __DIR__.'/auth.php';
