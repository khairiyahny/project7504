<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KegiatanControllerOpd;
use App\Http\Controllers\KegiatanControllerTpi;
use App\Http\Controllers\SocialAuthController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\LocationController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [IndexController::class, 'index']);

/* backend */
Route::get('/backend', function () {
    return view('backend.index-backend');
});
Route::get('/backend/charts-apexcharts', function () {
    return view('backend.charts-apexcharts');
});
Route::get('/backend/charts-chartjs', function () {
    return view('backend.charts-chartjs');
});
Route::get('/backend/charts-echarts', function () {
    return view('backend.charts-echarts');
});
Route::get('/backend/components-accordion', function () {
    return view('backend.components-accordion');
});
Route::get('/backend/components-alerts', function () {
    return view('backend.components-alerts');
});
Route::get('/backend/components-badges', function () {
    return view('backend.components-badges');
});
Route::get('/backend/components-breadcrumbs', function () {
    return view('backend.components-breadcrumbs');
});
Route::get('/backend/components-buttons', function () {
    return view('backend.components-buttons');
});
Route::get('/backend/components-cards', function () {
    return view('backend.components-cards');
});
Route::get('/backend/components-carousel', function () {
    return view('backend.components-carousel');
});
Route::get('/backend/components-list-group', function () {
    return view('backend.components-list-group');
});
Route::get('/backend/components-modal', function () {
    return view('backend.components-modal');
});
Route::get('/backend/components-pagination', function () {
    return view('backend.components-pagination');
});
Route::get('/backend/components-progress', function () {
    return view('backend.components-progress');
});
Route::get('/backend/components-spinners', function () {
    return view('backend.components-spinners');
});
Route::get('/backend/components-tabs', function () {
    return view('backend.components-tabs');
});
Route::get('/backend/components-tooltips', function () {
    return view('backend.components-tooltips');
});
Route::get('/backend/forms-editors', function () {
    return view('backend.forms-editors');
});
Route::get('/backend/forms-elements', function () {
    return view('backend.forms-elements');
});
Route::get('/backend/forms-layouts', function () {
    return view('backend.forms-layouts');
});
Route::get('/backend/forms-validation', function () {
    return view('backend.forms-validation');
});
Route::get('/backend/icons-bootstrap', function () {
    return view('backend.icons-bootstrap');
});
Route::get('/backend/icons-boxicons', function () {
    return view('backend.icons-boxicons');
});
Route::get('/backend/icons-remix', function () {
    return view('backend.icons-remix');
});
Route::get('/backend/pages-blank', function () {
    return view('backend.pages-blank');
});
Route::get('/backend/pages-contact', function () {
    return view('backend.pages-contact');
});
Route::get('/backend/pages-error-404', function () {
    return view('backend.pages-error-404');
});
Route::get('/backend/pages-faq', function () {
    return view('backend.pages-faq');
});
Route::get('/backend/pages-login', function () {
    return view('backend.pages-login');
});
Route::get('/backend/pages-register', function () {
    return view('backend.pages-register');
});
// Route::get('/backend/tables-data', function () {
//     return view('backend.tables-data');
// });
Route::get('/backend/tables-general', function () {
    return view('backend.tables-general');
});
Route::get('/backend/users-profile', function () {
    return view('backend.users-profile');
});

// Route::get('/forms-layout', [FaqController::class, 'create'])->name('faq.create');
// Route::post('/forms-layout', [FaqController::class, 'submit'])->name('faq.submit');
// Route::get('/backend/tables-data', [FaqController::class, 'index'])->name('faq.index'); 
// Route::delete('/backend/tables-data/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
// Route::get('/backend/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
// Route::put('/backend/update/{id}', [FaqController::class, 'update'])->name('faq.update');

Route::get('/backend/tables-kegiatan-opd', [KegiatanControllerOpd::class, 'index'])->name('backend.tables-kegiatan-opd');
Route::get('/backend/forms-tambahkegiatan-opd', [KegiatanControllerOpd::class, 'create'])->name('backend.forms-tambahkegiatan-opd');
Route::post('/backend/submit-opd', [KegiatanControllerOpd::class, 'submit'])->name('kegiatanopd.submit');
Route::put('/backend/update-opd/{id}', [KegiatanControllerOpd::class, 'update'])->name('kegiatanopd.update');
Route::get('/backend/edit-opd/{id}', [KegiatanControllerOpd::class, 'edit'])->name('kegiatanopd.edit');
Route::delete('/backend/tables-kegiatan-opd/{id}', [KegiatanControllerOpd::class, 'destroy'])->name('kegiatanopd.destroy');

Route::get('/backend/forms-tambahkegiatan', function () {
    return view('backend.forms-tambahkegiatan');
});


Route::get('/backend/tables-kegiatan-tpi', [KegiatanControllerTpi::class, 'index'])->name('backend.tables-kegiatan-tpi');
Route::get('/backend/forms-tambahkegiatan-tpi', [KegiatanControllerTpi::class, 'create'])->name('backend.forms-tambahkegiatan-tpi');
Route::post('/backend/submit-tpi', [KegiatanControllerTpi::class, 'submit'])->name('kegiatantpi.submit');
Route::put('/backend/update-tpi/{id}', [KegiatanControllerTpi::class, 'update'])->name('kegiatantpi.update');
Route::get('/backend/edit-tpi/{id}', [KegiatanControllerTpi::class, 'edit'])->name('kegiatantpi.edit');
Route::delete('/backend/tables-kegiatan-tpi/{id}', [KegiatanControllerTpi::class, 'destroy'])->name('kegiatantpi.destroy');

// Route::get('/backend/login', function () {
//     return view('backend.pages-login-oauth');
// });
// Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('google.login');
// Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
// Route::post('/backend/login', [SocialAuthController::class, 'login'])->name('login');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
// Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/change-password', [PasswordController::class, 'showPasswordForm'])->name('password.change');
Route::post('/change-password', [PasswordController::class, 'updatePassword']);

// Diharuskan login dulu sebelum bisa akses backend
// Route::middleware(['auth'])->get('/backend', function () {
//     return view('backend.index-backend');
// });
Route::middleware(['auth'])->group(function () {
    Route::get('/change-password', [PasswordController::class, 'showPasswordForm'])->name('password.change');
    Route::post('/change-password', [PasswordController::class, 'updatePassword']);
});
Route::middleware(['auth', 'role:admin'])->get('/backend', function () {
    return view('backend.index-backend');
});
Route::middleware(['auth', 'role:user'])->get('/backend/pages-blank', function () {
    return view('backend.pages-blank');
});

Route::get('/get-location', [LocationController::class, 'getLocation'])->name('get.location');


Auth::routes();
