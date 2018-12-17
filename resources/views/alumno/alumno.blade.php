@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
<ul class="list-group">
  <li class="list-group-item active">LISTA DE MIS CURSOS</li>
  @foreach($cursos as $curso)
  <li class="list-group-item"><a href="/{{ Auth::user()->nombre }}/{{ $curso->id }}/asistencias" class="list-group-item">{{ $curso->nombre}}</a></li>
    @endforeach
</ul>
</div>

@endsection