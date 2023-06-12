<?php

use App\Http\Controllers\ListingController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/',[ListingController::class,'index']);

// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [s
//         'listing' => Listing::find($id)
//     ]);
// });

Route::get('/listings/{listing}',[ListingController::class,'show']);
