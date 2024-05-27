<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Middleware\CheckAdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\componentsController;

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

// Authentication Routes
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::middleware(['auth:user', CheckAdminMiddleware::class])->group(function () {
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/announcement',[AdminController::class,'announcement']);
        Route::get('/new-user',[AdminController::class,'register_page']);
        Route::post('/register-user',[AdminController::class,'register_user']);
        Route::get('/show-users',[AdminController::class,'show_users']);
        Route::get('/edit-user/{id}',[AdminController::class,'edit_user']);
        Route::post('/update-user',[AdminController::class,'update_user']);
        Route::get('/delete-user/{id}',[AdminController::class,'delete_user']);
        Route::get('/settings',[AdminController::class,'settings']);
        Route::post('/update-password',[AdminController::class,'update_pw']);
        Route::get('/search',[AdminController::class,'search']);

        Route::get('/new-component',[componentsController::class,'register_component_page']);
        Route::post('/register-component',[componentsController::class,'register_component']);
        Route::get('/show-components',[componentsController::class,'show_components']);
        Route::get('/edit-component/{id}',[componentsController::class,'edit_component']);
        Route::post('/update-component',[componentsController::class,'update_component']);
        Route::get('/delete-component/{id}',[componentsController::class,'delete_component']);
        Route::get('component-desc/{id}', [AdminController::class, 'component_desc']);

        Route::get('/chat',[ChatController::class,'show_chat_admin']);
        Route::get('/chat-box/{id}',[ChatController::class,'chat_box_admin']);
        Route::post('/send-msg/{id}',[ChatController::class,'admin_send_msg']);
    });
    Route::view('login', 'login');
});

// User Routes
Route::prefix('user')->group(function () {
    Route::middleware('auth:user')->group(function () {
        Route::get('dashboard', [UserController::class, 'dashboard']);
        Route::get('component-desc/{id}', [UserController::class, 'component_desc']);
        Route::get('/chat',[ChatController::class,'show_chat_user']);
        Route::get('/chat-box/{id}',[ChatController::class,'chat_box_user']);
        Route::post('/send-msg/{id}',[ChatController::class,'user_send_msg']);
        Route::get('/search',[UserController::class,'search']);
        Route::get('/settings',[UserController::class,'settings']);
        Route::post('/update-password',[UserController::class,'update_pw']);
    });
});

// Default Route
Route::redirect('/', 'login');
