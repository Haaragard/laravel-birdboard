<?php

use App\Http\Controllers\ProjectsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/create', function () { return 'asdasd'; });
Route::group(['prefix' => '/projects', 'middleware' => 'auth'], function () {
    Route::get('/', [ProjectsController::class, 'index']);

    Route::get('/{project}', [ProjectsController::class, 'show'])
        ->whereNumber('project')
        ->name('projects.show');

    Route::get('/create', [ProjectsController::class, 'create']);

    Route::post('/', [ProjectsController::class, 'store']);
});

require __DIR__.'/auth.php';
