{{-- @extends('layouts.app') --}}


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

{{-- @section('content') --}}
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-6" style="margin:0 auto">
            <p>Editar tema</p>
        {{ $clase->tema}}
                    <form method="POST" action="{{action('ClaseController@actualizarClase',$clase->id)}}"  role="form">
                        {{ csrf_field() }}
                        
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="tema" id="tema"  value="{{$clase->tema}}" class="form-control input-sm" placeholder="Tema de la clase">
                                    <input type="hidden" name="curso" id="curso" value="{{$clase->id}}" class="form-control input-sm" placeholder="Tema de la clase">
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                    <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                                    {{-- <a href="{{ route('clase.index') }}" class="btn btn-info btn-block" >Atrás</a> --}}
                                </div>
                        </div>
                       
                    </form>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
{{-- @endsection --}}