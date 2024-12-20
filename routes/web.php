<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FaqController;

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

Route::get('/forms-layout', [FaqController::class, 'create'])->name('faq.create');
Route::post('/forms-layout', [FaqController::class, 'submit'])->name('faq.submit');
Route::get('/backend/tables-data', [FaqController::class, 'index'])->name('faq.index'); 
Route::delete('/backend/tables-data/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
Route::get('/backend/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
Route::put('/backend/update/{id}', [FaqController::class, 'update'])->name('faq.update');
