@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
<ul class="list-group">

  <li class="list-group-item active">MIS ASISTENCIAS </li>

   @foreach($clases as $clase)
  <li class="list-group-item"> {{ $clase->tema}}</li>
    @endforeach
</ul>
</div>

@endsection