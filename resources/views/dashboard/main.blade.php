@extends('template.structure')

@section('titulo')
    Tablero general
@endsection

@section('contenido')
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
@endsection