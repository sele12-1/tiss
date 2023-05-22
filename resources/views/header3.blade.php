@extends('header2')
@section('estilos')
<link rel="stylesheet" href="{{asset('css/header3.css')}}">
@endsection
@section('header')
    <div class="row">
        <div class="col">
            <span class="material-symbols-outlined icono">home</span>
            <span class="label">Inicio</span>
        </div>
        <div class="col">
            <span class="material-symbols-outlined icono">person</span>
            <span class="label">Rol</span>
        </div>
        <div class="col">
            <span class="material-symbols-outlined icono">person</span>
            <span class="label">Usuarios</span>
        </div>
        <div class="col">
            <span class="material-symbols-outlined icono">garage_home</span>
            <span class="label">Reportes</span>
        </div>
        <div class="col">
            <span class="material-symbols-outlined icono">calendar_month</span>
            <span class="label">Alquiler</span>
        </div>
        <div class="col">
            <span class="material-symbols-outlined icono">prescriptions</span>
            <span class="label">Registrar</span>
        </div>
        <div class="col">
            <span class="material-symbols-outlined icono">edit_note</span>
            <span class="label">Reclamos</span>
        </div>
        <div class="col">
            <span class="material-symbols-outlined icono">logout</span>
            <span class="label">Salir</span>
        </div>
@endsection
