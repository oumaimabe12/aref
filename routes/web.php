<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfsController;
use App\Http\Controllers\EtabController;
use App\Http\Controllers\MatController;
use App\Http\Controllers\TakalifController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\BinyaController;





use Faker\Guesser\Name;

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
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard'); 
Route::post('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard'); 

Route::get('/login', [LoginController::class,'login'])->name('login');

Route::post('/custom-login', [ProfController::class, 'customLogin'])->name('login.custom'); 
Route::get('/registration', [ProfController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [ProfController::class, 'customRegistration'])->name('register.custom'); 
Route::get('/signout', [ProfController::class, 'signOut'])->name('signout');

Route::get('/tableprof', [ProfController::class,'tableprof'])->name('tableprof'); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/prof', ProfsController::class);
//Route::get('/prof', [App\Http\Controllers\ProfsController::class, 'index']);

Route::get('/formulaire', [App\Http\Controllers\ProfsController::class, 'create']);
Route::post('/formulaire', function () {
    return 'Formulaire ';
});

Route::get('prof/{id}/edit',[App\Http\Controllers\ProfsController::class,'edit'])->name("edit");
Route::get('prof.index',[App\Http\Controllers\ProfsController::class,'index'])->name("prof.index");
Route::put('prof/{id}',[App\Http\Controllers\ProfsController::class,'update'])->name("prof.update");
Route::get('prof/{id}',[App\Http\Controllers\ProfsController::class,'show'])->name("prof.show");

//Route::resource('/prof', 'ProfsController')
//->except(['destroy']);
                   
Route::post('/formulaire', function () {
    return 'Prof added ' . request('Nom');
});

Route::resource('etab', EtabController::class);
Route::resource('mat', MatController::class);
Route::resource('takalif', TakalifController::class);
Route::resource('binya', BinyaController::class);




//Route::resource('excel', ExcelController::class);

Route::get('/import-users',[App\Http\Controllers\UserController::class, 'import'])->name('import');
Route::post('/import-users',[App\Http\Controllers\UserController::class, 'upload'])->name('upload');

Route::get('excel/view', [ExcelController::class, 'index'])->name('index');
Route::get('excel/export', [ExcelController::class, 'export'])->name('export');
Route::post('excel/import', [ExcelController::class, 'import'])->name('import');









