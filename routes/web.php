<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'index']);

Route::middleware('only_guest')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);   
    Route::post('register', [AuthController::class, 'registerProcess']);   
});

Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'only_admin']);

//DATA USER
Route::get('datauser', [DatauserController::class, 'index'])->middleware(['auth', 'only_admin']);
Route::get('registered-user', [DatauserController::class, 'resgisteredUser'])->middleware(['auth', 'only_admin']);
Route::get('user-detail/{slug}', [DatauserController::class, 'show'])->middleware(['auth', 'only_admin']);
Route::get('user-approve/{slug}', [DatauserController::class, 'approve'])->middleware(['auth', 'only_admin']);
Route::get('user-ban/{slug}', [DatauserController::class, 'delete'])->middleware(['auth', 'only_admin']);
Route::get('user-destroy/{slug}', [DatauserController::class, 'destroy'])->middleware(['auth', 'only_admin']);
Route::get('user-banned-list', [DatauserController::class, 'bannedUser'])->middleware(['auth', 'only_admin']);
Route::get('user-restore/{slug}', [DatauserController::class, 'restore'])->middleware(['auth', 'only_admin']);

//BARANG
Route::get('barang', [BarangController::class, 'index'])->middleware(['auth', 'only_admin']);
Route::get('barangadd', [BarangController::class, 'add'])->middleware(['auth', 'only_admin']);
Route::post('barangadd', [BarangController::class, 'store'])->middleware(['auth', 'only_admin']);
Route::get('barang-edit/{slug}', [BarangController::class, 'edit'])->middleware(['auth', 'only_admin']);
Route::post('barang-edit/{slug}', [BarangController::class, 'update'])->middleware(['auth', 'only_admin']);
Route::get('barang-delete/{slug}', [BarangController::class, 'delete'])->middleware(['auth', 'only_admin']);
Route::get('barang-destroy/{slug}', [BarangController::class, 'destroy'])->middleware(['auth', 'only_admin']);
Route::get('barang-deleted-list', [BarangController::class, 'deletedBarang'])->middleware(['auth', 'only_admin']);
Route::get('barang-restore/{slug}', [BarangController::class, 'restore'])->middleware(['auth', 'only_admin']);

// KATEGORI
Route::get('kategori', [KategoriController::class, 'index'])->middleware(['auth', 'only_admin']);
Route::get('kategoriadd', [KategoriController::class, 'add'])->middleware(['auth', 'only_admin']);
Route::post('kategoriadd', [KategoriController::class, 'store'])->middleware(['auth', 'only_admin']);
Route::get('kategori-edit/{slug}', [KategoriController::class, 'edit'])->middleware(['auth', 'only_admin']);
Route::put('kategori-edit/{slug}', [KategoriController::class, 'update'])->middleware(['auth', 'only_admin']);
Route::get('kategori-delete/{slug}', [KategoriController::class, 'delete'])->middleware(['auth', 'only_admin']);
Route::get('kategori-destroy/{slug}', [KategoriController::class, 'destroy'])->middleware(['auth', 'only_admin']);
Route::get('kategori-deleted-list', [KategoriController::class, 'deletedKategori'])->middleware(['auth', 'only_admin']);
Route::get('kategori-restore/{slug}', [KategoriController::class, 'restore'])->middleware(['auth', 'only_admin']);

Route::get('kategoribarang', [KategoriBarangController::class, 'index'])->middleware(['auth', 'only_admin']);

Route::get('sewalogs', [SewaLogsController::class, 'index'])->middleware(['auth', 'only_admin']);



Route::get('home', [UserController::class, 'home'])->middleware(['auth', 'only_client']);
Route::get('detail', [UserController::class, 'detail'])->middleware(['auth', 'only_client']);
Route::get('kontak', [UserController::class, 'kontak'])->middleware(['auth', 'only_client']);
Route::get('outdoor', [OutdoorController::class, 'index'])->middleware(['auth', 'only_admin']);
