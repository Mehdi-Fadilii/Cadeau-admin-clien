<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/commande.blade.php',function(){
    return view('adminLTE.commande');
});

Route::get('/inscription.blade.php',function(){
    return view('adminLTE.inscription');
});

Route::get('/listep.blade.php',function(){
    return view('adminLTE.listep');
});

Route::get('/livraison.blade.php',function(){
    return view('adminLTE.livraison');
});

Route::get('/mlivraison.blade.php',function(){
    return view('adminLTE.mlivraison');
});

Route::get('/offreur.blade.php',function(){
    return view('adminLTE.offreur');
});
Route::get('/table-data.blade.php',function(){
    return view('adminLTE.table-data');
});
Route::resource('categorie', CategorieController::class);

Route::get('/tags.blade.php',function(){
    return view('adminLTE.tags');
});

Route::get('/evenement.blade.php',function(){
    return view('adminLTE.evenement');
});

Route::get('/admin',function(){
    return view('auth.login');
});

Route::get('/',function(){
    return view('pageaccueil');
});

Route::get('/inscription.html',function(){
    return view('inscription');
});

Route::get('/login.html',function(){
    return view('login');
});

Route::get('/listeev.html',function(){
    return view('listeev');
});

Route::get('/dashboard.blade.php',function(){
    return view('adminLTE.dashboard');
});

