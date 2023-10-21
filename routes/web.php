<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WomanController;
use App\Models\Woman;
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

// Route::get("/", function() {
//     $woman = Woman::all();
//     dd($woman->toJson());
// });

Route::resource('women', WomanController::class);
