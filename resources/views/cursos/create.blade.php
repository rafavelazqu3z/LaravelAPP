@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')

    <div class="container my-2 p-3" style="background: whitesmoke; width: 500px">
        <h1 class="text-center">Creacion de curso</h1>
        <form action="{{route('cursos.store')}}" method="POST">

            @csrf
            <div class="m-3">
                <label class="form-label">
                    Nombre:
                    <input class="form-control" type="text" name="name" value="{{old('name')}}">
                </label>
                @error('name')
                <br>
                <small style="color: #CA0000">*{{$message}}</small>
                @enderror
            </div>
            <div class="m-3">
                <label class="form-label">
                    Slug:
                    <br>
                    <input class="form-control" type="text" name="slug" value="{{old('name')}}">
                </label>
            </div>
            <div class="m-3">
                <label class="form-label">
                    Descripcion:
                    <br>
                    <textarea class="form-control" name="descripcion" rows="5">{{old('descripcion')}}</textarea>
                </label>
                @error('descripcion')
                <br>
                <small style="color: #CA0000">*{{$message}}</small>

                @enderror
            </div>
            <div class="m-3">
                <label class="form-label">
                    categoria:
                    <br>
                    <input class="form-control" type="text" name="categoria" value="{{old('categoria')}}">
                </label>
                @error('categoria')
                <br>
                <small style="color: #CA0000">*{{$message}}</small>
                <br>
                @enderror
            </div>
            <button class="btn btn-primary m-3" type="submit">Enviar formulario</button>
        </form>
    </div>
@endsection


