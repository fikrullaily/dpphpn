<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DpphpnProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrganizationAgendaController;
use App\Http\Controllers\OrganizationStructureController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RequestNewsController;
use App\Http\Controllers\VisionMissionController;
use App\Http\Controllers\WorkProgramController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    Artisan::call('migrate');
});

Route::get('/', [PageController::class, 'home']);

// ===================== User ===================== //
Route::get('/news/{category}', [PageController::class, 'news']);
Route::get('/catalog', [PageController::class, 'catalog']);
Route::post('/send-message', [PageController::class, 'send_message']);
Route::get('/detail-news/{id}', [PageController::class, 'detail_news']);
Route::get('/profile-lembaga', [PageController::class, 'profile_lembaga']);
Route::get('/struktur-organisasi', [PageController::class, 'struktur_organisasi']);
Route::get('/profile-dpphpn', [PageController::class, 'profile_dpphpn']);
Route::get('/program-kerja', [PageController::class, 'program_kerja']);
Route::get('/detail-catalog/{id}', [PageController::class, 'detail_catalog']);
Route::get('/daftar-dpwdpc', [PageController::class, 'daftar_dpwdpc']);
Route::post('/send-request', [PageController::class, 'send_request']);
// ===================== User ===================== //

// ===================== Template ===================== //
Route::get('/template/{page}', [PageController::class, 'template']);
// ===================== Template ===================== //

// ===================== Administrator ===================== //
Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'authenticate']);
Route::get('/logout', [PageController::class, 'logout']);

Route::middleware('administrator')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/master-news', NewsController::class);
    Route::resource('/master-catalog', CatalogController::class);
    Route::resource('/master-work-program', WorkProgramController::class);
    Route::resource('/master-organization-structure', OrganizationStructureController::class);
    Route::resource('/master-organization-agenda', OrganizationAgendaController::class);
    Route::resource('/master-profile', DpphpnProfileController::class);
    Route::resource('/master-region', RegionController::class);
    Route::resource('/master-vision', VisionMissionController::class);
    Route::resource('/master-request', MessageController::class);
    Route::get('/view-request/{id}', [MessageController::class, 'view']);
    Route::resource('/master-request-news', RequestNewsController::class);
});
// ===================== Administrator ===================== //
