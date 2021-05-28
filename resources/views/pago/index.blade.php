@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="pagos/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tipo Pago</th>
      <th scope="col">Disponible</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($pago as $p)
    <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->tipo_pago}}</td>
        <td>{{($p->disponible) ? 'Si' : 'No'}}</td>
        <td>
         <form action="{{ route('pagos.destroy',$p->id) }}" method="POST">
          <a href="/pagos/{{$p->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection