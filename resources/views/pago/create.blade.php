@extends('layouts.plantillabase')
@section('contenido')

<h2>CREAR REGISTROS</h2>
<form action="/pagos" method="POST">
    @csrf
  
    <div class="mb-3">
        <label for="" class="form-label">Tipo Pago</label>
        <input id="tipo_pago" name="tipo_pago" type="text" class="form-control" tabindex="1">
    </div>
    <div class="form-check">
        <label for="" class="form-label">Disponible</label>
        <input class="form-check-input" id="disponible" name="disponible" type="checkbox" class="form-control" tabindex="2" >
    </div>
    
    <a href="/pagos" class="btn btn-secondary" tabindex="3">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4" > Guardar</button>
</form>

@endsection