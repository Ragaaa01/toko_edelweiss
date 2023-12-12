<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\OutdoorController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SewaLogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriBarangController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware('only_guest')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);   
    Route::post('register', [AuthController::class, 'registerProcess']);   
});

Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'only_admin']);

Route::get('datauser', [DatauserController::class, 'index'])->middleware(['auth', 'only_admin']);

//BARANG
Route::get('barang', [BarangController::class, 'index'])->middleware(['auth', 'only_admin']);
Route::get('barangadd', [BarangController::class, 'add']);
Route::post('barangadd', [BarangController::class, 'store']);

// KATEGORI
Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategoriadd', [KategoriController::class, 'add']);
Route::post('kategoriadd', [KategoriController::class, 'store']);
Route::get('kategori-edit/{slug}', [KategoriController::class, 'edit']);
Route::put('kategori-edit/{slug}', [KategoriController::class, 'update']);
Route::get('kategori-delete/{slug}', [KategoriController::class, 'delete']);
Route::get('kategori-destroy/{slug}', [KategoriController::class, 'destroy']);
Route::get('kategori-deleted-list', [KategoriController::class, 'deletedKategori']);
Route::get('kategori-restore/{slug}', [KategoriController::class, 'restore']);

Route::get('kategoribarang', [KategoriBarangController::class, 'index'])->middleware(['auth', 'only_admin']);

Route::get('sewalogs', [SewaLogsController::class, 'index'])->middleware(['auth', 'only_admin']);



Route::get('home', [UserController::class, 'home'])->middleware(['auth', 'only_client']);
Route::get('detail', [UserController::class, 'detail'])->middleware(['auth', 'only_client']);
Route::get('kontak', [UserController::class, 'kontak'])->middleware(['auth', 'only_client']);
Route::get('outdoor', [OutdoorController::class, 'index'])->middleware('auth');
