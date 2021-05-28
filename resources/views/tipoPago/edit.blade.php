@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>
<form action="/tipoPago/{{$tp->id}}" method="POST">
    @method('PUT')
    @csrf
   
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="1" value="{{$tp->descripcion}}">
    </div>
   
    <a href="/tipoPago" class="btn btn-secondary" tabindex="2">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="3" > Guardar</button>
</form>

@endsection