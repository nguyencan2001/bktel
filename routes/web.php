<?php

use App\Http\Controllers\Admin\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/information', function () {
//     return view('auth/information');
// })->name('information');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'students'], function () {
	Route::get('/{student_id}', [StudentsController::class, 'show'])->name('student.show');
	Route::post('/', [StudentsController::class, 'store'])->name('student.store');
	Route::put('/{student_id}', [StudentsController::class, 'update'])->name('student.update');
	//Route::delete('/{student_id}',  [StudentsController::class, 'delete'])->name('student.destroy');
	Route::any('/delete/{student_id}',  [StudentsController::class, 'delete'])->name('student.destroy');
});



Route::get('information', [StudentsController::class, 'information'])->middleware('auth')->name('auth.information');
Route::post('information', [StudentsController::class, 'information'])->middleware('auth')->name('auth.information');
Route::get('unicode', [StudentsController::class, 'unicode'])->middleware('auth')->name('auth.unicode');

//Route::get('checkadmin', [StudentsController::class, 'checkadmin'])->middleware('checkadmin')->name('auth.checkadmin');
