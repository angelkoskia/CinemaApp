<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MovieController;
use App\Http\Controllers\Backend\MovieSliderController;
use App\Http\Controllers\Backend\ShowUsersController;
use App\Http\Controllers\Backend\TicketController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ShowMovieController;
use App\Http\Controllers\Frontend\UserLogin;
use App\Http\Controllers\ProfileController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

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

Route::middleware('web')->group(function () {
    require __DIR__.'/auth.php';
    require __DIR__.'/verification.php';
    Route::group(['prefix'=>'admin','middleware'=>['isAdmin']],function (){
        Route::get('/dashboard',[DashboardController::class, 'index']);
        Route::get('/logout',[\App\Http\Controllers\Backend\AuthController::class, 'logout']);
        Route::group(['prefix' => 'movies'], function () {
            Route::post('/store/{id?}/{status?}', [MovieController::class, 'store']);
            Route::get('/{id?}', [MovieController::class, 'index']);

            Route::group(['prefix' => '{movie_id}/tickets'], function () {
                Route::post('/store/{id?}/{status?}', [TicketController::class, 'store']);
                Route::get('/{id?}', [TicketController::class, 'index']);
            });
        });
        Route::group(['prefix' => 'users'], function () {

            Route::post('/store/{id?}/', [ShowUsersController::class, 'store']);
            Route::get('/{id?}', [ShowUsersController::class, 'index']);
            Route::delete('/{id}', [ShowUsersController::class, 'destroy'])->name('users.destroy');
            Route::put('/{id}/{status?}', [ShowUsersController::class, 'status'])->name('users.status');

            Route::group(['prefix' => '{user_id}/orders'], function () {
                Route::post('/store/{id?}/', [OrderController::class, 'store']);
                Route::get('/{id?}', [OrderController::class, 'index']);
            });
        });
        Route::group(['prefix' => 'slider'], function () {
            Route::post('/store/{id?}/{status?}', [MovieSliderController::class, 'store']);
            Route::get('/{id?}', [MovieSliderController::class, 'index']);

            Route::group(['prefix' => '{movie_id}/tickets'], function () {
                Route::post('/store/{id?}/{status?}', [TicketController::class, 'store']);
                Route::get('/{id?}', [TicketController::class, 'index']);
            });
        });
        Route::get('/orders', [App\Http\Controllers\Backend\OrderController::class, 'index']);
        Route::get('/users', [ShowUsersController::class, 'index']);
        Route::post('/users/import', [ShowUsersController::class, 'importUsers']);
    });


});

Route::get('/',function (){
    return view('frontend.src.home');
});
Route::get('/movie-tickets-info/{movie_id}',[OrderController::class, 'show']);

Route::get('/',[ShowMovieController::class, 'showMovies']);

Route::get('/login',[UserLogin::class,'showLoginPage']);

Route::post('/login',[UserLogin::class,'login']);

Route::post('/logout',[UserLogin::class,'logout']);

Route::get('/register',[UserLogin::class,'showRegisterPage']);

Route::post('/register',[UserLogin::class,'register']);

Route::get('/movie-tickets-info/{ticket_id}/buy-ticket',[OrderController::class,'processPayment']);

Route::post('/movie-tickets-info/{ticket_id}/buy-ticket', [OrderController::class,'addOrder']);

Route::get('/view-orders', [OrderController::class,'viewOrders']);

Route::get('/download-orders', [OrderController::class, 'downloadOrders']);





