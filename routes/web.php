<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
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


// Rotas Profile
$router->get('profile/novo', [ProfileController::class, 'create']);
$router->post('profile/novo', [ProfileController::class, 'store'])->name('save_profile');
$router->get('profile/ver', [ProfileController::class, 'show']);
$router->get('profile/excluir/{id}', [ProfileController::class, 'destroy'])->name('exclude');
$router->get('profile/editar/{id}', [ProfileController::class, 'edit'])->name('edits');
$router->post('profile/editar/{id}', [ProfileController::class, 'update'])->name('updates');

// Rotas Report
$router->get('report/novo', [ReportController::class, 'create']);
$router->post('report/novo', [ReportController::class, 'store'])->name('save_report');
$router->get('report/ver', [ReportController::class, 'show']);
$router->get('report/excluir/{id}', [ReportController::class, 'destroy'])->name('exclude');
$router->get('report/editar/{id}', [ReportController::class, 'edit'])->name('edits');
$router->post('report/editar/{id}', [ReportController::class, 'update'])->name('updates');
