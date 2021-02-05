<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\EspecialistasController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MiniExamenMentalController;
use App\Http\Controllers\EntrevistaInicialController;
use Illuminate\Support\Facades\Auth;
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
    return view('front.index');
})->name('index');
Route::get('/Login', function () {
    return view('auth/login');
})->name('_login');
Route::get('/Registro', function () {
    return view('Registro');
});
Route::get('/Contacto', function () {
    return view('contacto');
});
Route::get('/Formulario', function () {
    return view('formulario');
});
Route::get('/ProgramaIn', function () {
    return view('Programain');
});

Route::get('/Sesiograma', function () {
    return view('sesiograma');
});

Route::get('/MiniExamen', function () {
    return view('miniexamen');
});

Route::get('/EntrevistaInicial', function () {
    return view('entrevistaInicial');
});

Route::get('adminBeta', function () {
    return view('admin_template');
});
Route::get('adminBeta/{data}', function () {
    return view('admin_template');
});
Route::get('adminBeta/{data}/{Opcion}', function () {
    return view('admin_template');
});



route::get('admin2', function(){
    return view('ejemploVDG');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if( Auth::user()->id_tipo == 3){
        return view('formulario ');
    }
    else{
        return view('ejemploVDG');
    }
})->name('dashboard');

//rutas para login con cuentas de facebook y google
// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

Route::get('logout',[LoginController::class ,'logout'])->name('logout');

//rutas de contactos
Route::get('/contacto/crear',[ContactosController::class,'create'])->name('contacto.crear');
Route::post('/contacto/store',[ContactosController::class,'store'])->name('contacto.store');

//** RUTAS CON INICIO CON SESION REQUERIDO **/
//Route::group(['middleware'=>['auth']], function () {

    //rutas de contactos
    Route::get('/contacto/ver/{id}',[ContactosController::class,'show'])->name('especialista.ver');
    Route::get('/contacto/listar',[ContactosController::class,'index'])->name('contacto.listar');
    Route::get('/contacto/editar/{id}',[ContactosController::class,'edit'])->name('contacto.editar');
    Route::post('/contacto/actualizar',[ContactosController::class,'update'])->name('contacto.actualizar');
    Route::delete('/contacto/eliminar/{id}',[ContactosController::class,'destroy'])->name('contacto.eliminar');
    //rutas de manejo de usuarios

    //Especialistas
    Route::get('/especialista/crear',[EspecialistasController::class,'create'])->name('especialista.crear');
    Route::post('/especialista/store',[EspecialistasController::class,'store'])->name('especialista.store');
    Route::get('/especialista/listar',[EspecialistasController::class,'index'])->name('especialista.listar');
    Route::get('/especialista/ver/{id}',[EspecialistasController::class,'show'])->name('especialista.ver');
    Route::get('/especialista/editar/{id}',[EspecialistasController::class,'edit'])->name('especialista.editar');
    Route::post('/especialista/actualizar',[EspecialistasController::class,'update'])->name('especialista.actualizar');
    Route::delete('/especialista/eliminar/{id}',[EspecialistasController::class,'destroy'])->name('especialista.eliminar');
    Route::get('/dashboardEspecialista',[EspecialistasController::class,'dashboardEspecialista'])->name('especialista.dashboard');


    //Pacientes
    Route::get('/paciente/crear',[PacientesController::class,'create'])->name('paciente.crear');
    Route::post('/paciente/store',[PacientesController::class,'store'])->name('paciente.store');
    Route::get('/paciente/listar',[PacientesController::class,'index'])->name('paciente.listar');
    Route::get('/paciente/ver/{id}',[PacientesController::class,'show'])->name('paciente.ver');
    Route::get('/paciente/editar/{id}',[PacientesController::class,'edit'])->name('paciente.editar');
    Route::post('/paciente/actualizar/{id}',[PacientesController::class,'update'])->name('paciente.actualizar');
    Route::delete('/paciente/eliminar/{id}',[PacientesController::class,'destroy'])->name('paciente.eliminar');
    Route::get('/paciente/agendar',[PacientesController::class,'agendarCita'])->name('paciente.agendar');


    //Mini Examen Mental

    Route::get('/miniExamen/listar',[MiniExamenMentalController::class,'index'])->name('miniExamen.listar');

    //Entrevista inicial

    Route::post('/entrevistaInicial/store',[EntrevistaInicialController::class,'store'])->name('entrevista.store');

//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
