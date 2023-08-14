@extends('layouts.plantilla')

@section('title', 'Cursos Edit')

@section('content')

    <div class="container my-2 p-3" style="background: #FAF9F7; width: auto">
        <h1 class="text-center">En esta pagina se puede editar un curso</h1>

        <div class="d-flex justify-content-center">
            <form action="{{route('cursos.update', $curso)}}" method="POST">

                @csrf

                @method('PUT')
                <div class="m-3">
                    <label class="form-label">
                        Nombre:
                        <br>
                        <input class="form-control" type="text" name="name" value="{{old('name',$curso->name)}}">
                    </label>
                    @error('name')
                    <br>
                    <small style="color: #CA0000">*{{$message}}</small>
                    <br>
                    @enderror
                    <br>
                </div>
                <div class="m-3">
                    <label class="form-label">
                        Slug:
                        <br>
                        <input class="form-control" type="text" name="slug" value="{{$curso->name}}">
                    </label>
                    <br>
                </div>
                <div class="m-3">
                    <label class="form-label">
                        Descripcion:
                        <br>
                        <textarea class="form-control" name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
                    </label>
                    @error('descripcion')
                    <br>
                    <small style="color: #CA0000">*{{$message}}</small>
                    <br>
                    @enderror
                    <br>
                </div>
                <div class="m-3">
                    <label class="form-label">
                        categoria:
                        <br>
                        <input class="form-control" type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
                    </label>
                    @error('categoria')
                    <br>
                    <small style="color: #CA0000">*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                <button class="btn btn-primary m-3" type="submit">Actualizar formulario</button>
            </form>
        </div>
    </div>
@endsection


