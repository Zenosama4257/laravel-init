@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Clientes')

@section('content')
  <h4> Pagina Inicio</h4>
    <p>Este contenido es público<p>
      @role('ceo')
    <p>Este contenido es para el Administrador<p>
      @endrole

      @role('usuario')
    <p>Este contenido es para el Usuario Empleado<p>
      @endrole

@endsection
