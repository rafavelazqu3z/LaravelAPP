@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1 class="text-center mt-4">Bienvenido a la pagina principal de cursos</h1>
    <div class="container">
        <a href="{{route('cursos.create')}}" class="btn btn-primary m-3">Crear Curso</a>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($cursos as $curso)
                <div class="card m-3 mb-3" style="width: 17rem;">
                    <img
                        src="https://images.unsplash.com/photo-1518640467707-6811f4a6ab73?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title"><a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a></p>
                    </div>
                </div>
            @endforeach
        </div>
        {{$cursos->links()}}
    </div>
    <br>

@endsection
