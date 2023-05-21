<?php

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/loby', function () {
    return view('loby');
});
Route::get('/editar_rol', function () {
    return view('editar_rol');
});
Route::get('/reporte_vehiculos', function () {
    return view('reporte_vehiculos');
});
Route::get('/editar_usuario', function () {
    return view('editar_usuario');
});
Route::get('/cobrar_usuario', function () {
    return view('cobrar_usuario');
});
Route::get('/eliminar_usuario', function () {
    return view('eliminar_usuario');
});
Route::get('/registrar_rol', function () {
    return view('registrar_rol');
});
Route::get('/registrar_funcionalidad', function () {
    return view('registrar_funcionalidad');
});
Route::get('/registro_usuario', function () {
    return view('registro_usuario');
});
Route::get('/registro_vehiculo', function () {
    return view('registrar_vehiculo');
});
Route::get('/editar_vehiculo', function () {
    return view('Editar_vehiculo');
});
Route::get('/editar_un_usuario', function () {
    return view('editar_un_usuario');
});
Route::get('/renovar_alquiler', function () {
    return view('renobar_alquiler');
});
Route::get('/reportes', function () {
    return view('reportes');
});
Route::get('/perfil_usuario', function () {
    return view('perfil_usuario');
});
Route::get('/alquilar_parqueo', function () {
    return view('alquilar_parqueo');
});
Route::get('/editar_alquiler', function () {
    return view('editar_alquiler');
});
Route::get('/pagos_admi', function () {
    return view('pagos_admi');
});
Route::get('/deudas_admi', function () {
    return view('deudas_admi');
});
Route::get('/eliminar_parqueo', function () {
    return view('eliminar_parqueo');
});
Route::get('/editar_parqueo', function () {
    return view('editar_parqueo');
});
Route::get('/loby2', function () {
    return view('loby2');
});
Route::get('/ver_parqueo', function () {
    return view('ver_parqueo');
});
Route::get('/reporte_parqueos', function () {
    return view('reporte_parqueos');
});
Route::get('/registroEntSal', function () {
    return view('registroEntSal');
});
Route::get('/marcar_ingreso', function () {
    return view('marcar_ingreso');
});
Route::get('/marcar_salida', function () {
    return view('marcar_salida');
});
Route::get('/perfil_guardia', function () {
    return view('perfil_guardia');
});
Route::get('/reporte_guardias', function () {
    return view('reporte_guardias');
});
Route::get('/pagar_usuario', function () {
    return view('pagar_usuario');
});

