@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <div class="container my-2 p-3" style="background: ghostwhite; width: auto">
        <h1 class="text-center">Bienvenido al curso {{$curso->name}}</h1>

        <a class="btn btn-info" style="margin-right: 1.5rem" href="{{route('cursos.index')}}">Volver a Cursos</a>

        <a class="btn btn-dark" href="{{route('cursos.edit', $curso)}}">Editar Curso</a>

            <div class="justify-content-center">
                <br>
                <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
                <p><strong>Descripcion: </strong>{{$curso->descripcion}}</p>
            </div>
            <form action="{{route('cursos.destroy', $curso)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Eliminar</button>
            </form>
    </div>
@endsection

