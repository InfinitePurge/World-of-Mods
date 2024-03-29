<?php

use App\Http\Controllers\UploadsController;
use App\Http\Controllers\OurPolicyController;
use App\Http\Controllers\AboutController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/About', [AboutController::class, 'index' ]);
{
    
}

Route::get('/OurPolicy', [OurPolicyController::class, 'index' ]);
{
    
}

Route::get('/uploads', [UploadsController::class, 'index' ]);
{
    
}
Route::post('/uploads', [UploadsController::class, 'store' ]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
