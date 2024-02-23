<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// == BASIC ROUTING ==

// Route::get('/hello', function() {
// return 'Hello World'; });
 
Route::get('/world', function () {   
return 'World'; 
}); 

Route::get('/pesan', function() {
    return 'Selamat Datang';
});

// Route::get('/about', function() {
//     return 'Nama : Zaki Lazuardi Ferysa Putra 
//     NIM : 2241720101';
// });

// == ROUTE PARAMETERS ==
Route::get('/user/{name}', function($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}' , function($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

// == OPTIONAL PARAMETERS==
// Route::get('/user/{name?}', function($name=null) {
//     return 'Nama saya ' . $name;
// });

Route::get('/user/{name?}', function($name='John') {
    return 'Nama saya ' . $name;
});

// == ROUTE NAME ==
Route::get('/user/profile', function() {
    //
})->name('profile');

// == ROUTE GROUP DAN ROUTE PREFIXES ==
// Route::middleware(['first', 'second']) ->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware..
//     });
// Route::get('/user/profile', function () {         
//         // Uses first & second middleware... 
//     }); 
// }); 
// Route::domain('{account}.example.com')->group(function() {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

// Route::middleware('auth')->group(function () { 
//     Route::get('/user', [UserController::class, 'index']); 
//     Route::get('/post', [PostController::class, 'index']); 
//     Route::get('/event', [EventController::class, 'index']); 
     
// }); 

// // == ROUTE PREFIXES ==
// Route::prefix('admin')->group(function () { 
//     Route::get('/user', [UserController::class, 'index']); 
//     Route::get('/post', [PostController::class, 'index']); 
//     Route::get('/event', [EventController::class, 'index']);  
// }); 

// == REDIRECT ROUTES ==
Route::redirect('/here', '/there'); 

// == VIEW ROUTES ==
Route::view('/welcome', 'welcome'); 
Route::view('/welcome', 'welcome', ['name' => 'Taylor']); 

// == MEMBUAT CONTROLLER ==
Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);

// == RESOURCE CONTROLLER ==
Route::resource('photos', PhotoController::class); 

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);