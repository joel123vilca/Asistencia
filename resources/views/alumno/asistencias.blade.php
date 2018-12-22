@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
<ul class="list-group">
  <li class="list-group-item active">MIS ASISTENCIAS </li>
</ul>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Tema</th>
                <th>Fecha</th>
                <th>Asistio</th>
                <th>Justificacion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clases as $clase)
            <tr>
                <td>{{ $clase->tema}}</td>
                <td></td>
                
                <td>{{ $clase->alumnos->nombre}}</td>
                <td><a class=" btn-btn">Justificar</a></td>
            </tr>
          @endforeach
        </tbody>
  </table>
</div>
@endsection