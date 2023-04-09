<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Frontend\FrontendController;
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
Route::get('/',[FrontendController::class, "home"]);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/add",[BackendController::class,'index'])->name('add.product');
Route::post("/store",[BackendController::class,'store'])->name('store.product');
Route::get("/show",[BackendController::class,'show'])->name('show.product');
Route::get("/edit/{id}",[BackendController::class,'edits'])->name('editsproduct');
Route::post("/update/{id}",[BackendController::class,'update'])->name('updateproduct');
Route::get("/alldelete/{id}",[BackendController::class,'alldelete'])->name('alldelete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
