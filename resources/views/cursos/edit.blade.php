{{--En blade heredamos con @extends--}}
@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')

        <h3 class="text-center">Modicación de curso</h3>
        <form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
        {{--csrf es una protección contra ataques malintencionados--}}
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nombre">Modifique el nombre del curso</label>
                <input id="nombre" class="form-control" type="text" name="nombre" value="{{$cursito->nombre}}">
            </div>
            <div class="form-group">
                <label for="descrip">Modifique la Descripción</label>
                <input id="descrip" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
            </div>
            <div class="form-group">
                <label for="imagen">Cargar nueva imagen</label>
                <br>
                <input id="imagen" type="file" name="imagen">
            </div>
            <button class="btn btn-dark" type="submit">Actualizar</button>
        </form>
@endsection
