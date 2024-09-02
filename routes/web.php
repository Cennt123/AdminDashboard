<?php


use App\Http\Controllers\AuthenticatedManagerController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
})->name('login');

Route::post('/welcome', [AuthenticatedManagerController::class, 'loginPost'])->name('loginPost');
Route::get('/admin/dashboard', [AuthenticatedManagerController::class, 'home'])
    ->name('dashboard')
    ->middleware('auth');



// // Route for the admin dashboard
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->name('admin.dashboard');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
