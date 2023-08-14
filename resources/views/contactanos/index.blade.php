@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')

    <div class="container my-2 p-3" style="background: whitesmoke; width: 500px">
        <h1 class="text-center">Dejanos un mensaje</h1>
        <div class="d-flex justify-content-center">
            <form action="{{route('contactanos.store')}}" method="POST">

                @csrf
                <div class="m-3">
                    <label class="form-label">Nombre:
                        <input class="form-control" type="text" name="name">
                    </label>
                    @error('name')
                    <p><strong style="color: #CA0000">{{$message}}</strong></p>
                    @enderror
                </div>

                <div class="m-3">
                    <label class="form-label">Correo:
                        <input class="form-control" type="text" name="correo">
                    </label>
                    @error('correo')
                    <p><strong style="color: #CA0000">{{$message}}</strong></p>
                    @enderror
                </div>

                <div class="m-3">
                    <label class="form-label">Mensaje:
                        <textarea class="form-control" name="mensaje" rows="4"></textarea>
                    </label>
                    @error('mensaje')
                    <p><strong style="color: #CA0000">{{$message}}</strong></p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary m-3">Enviar Mensaje</button>

            </form>
        </div>
    </div>
    @if(session('info'))
        <script>
            alert('{{session('info')}}');
        </script>
    @endif

@endsection

