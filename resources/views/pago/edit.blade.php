@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>
<form action="/pagos/{{$pago->id}}" method="POST">
    @method('PUT')
    @csrf
   
    <div class="mb-3">
        <label for="" class="form-label">Tipo Pago</label>
        <input id="tipo_pago" name="tipo_pago" type="text" class="form-control" tabindex="1" value="{{$pago->tipo_pago}}">
    </div>
    <div class="form-check">
        <label for="" class="form-label">Disponible</label>
        <input id="disponible" class="form-check-input" name="disponible" type="checkbox" class="form-control" tabindex="2" value="1"  {{ ($pago->disponible) ? 'checked="checked"' : '' }} >
    </div>
   
    <a href="/pagos" class="btn btn-secondary" tabindex="3">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4" > Guardar</button>
</form>

@endsection