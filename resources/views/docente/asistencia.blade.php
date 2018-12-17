@extends('layouts.app')


@section('after-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
@endsection



@section('content')
    
    
    <!-- dependences -->
    <section id="cursos">
        <div class="container">
            <!-- Errors-->
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li>UN ERROR A OCURRIDO</li>
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <ul>
                        <li>CORRECTO</li>
                    </ul>
                </div>
            @endif
            <div class="row">
                
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Mis clases</h4>
                        </div>
                    </div>
                    <br>
                    {{-- <a class="btn btn-primary btn-xs" href="{{roue('ClaseController@crearClase',['id'=>$clase->id,'id2'=>$id_curso])}}" >Crear clase</a> --}}
                    <table id="studentTable" class="table table-striped table-bordered dt-responsive small" style="width: 100%">
                        <thead class="thead-inverse">
                        <tr>
                            <th>ID#</th>
                            <th>Tema</th>
                        <th>Turno</th>
                            <th>Ciclo</th>                 -
     <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td style="text-transform: uppercase">{{$user->codigo}}</td>
                                <td style="text-transform: uppercase">{{$user->nombre}}</td> 
                                <td>{{$user->telefono}}</td>
				
                                <td>
                                    {{-- <button type="button" data-id="{{$curso->id}}" class="btn btn-outline-primary btn-sm read-curso-modal">Agregar</button>
                                        <i class="fa fa-eye"></i></button>
                                    <button type="button" data-id="{{$curso->id}}"  class="btn btn-outline-warning btn-sm edit-curso-modal">Editar</button>
                                        <i class="fa fa-pencil"></i></button> --}}
 {{-- <a class="btn btn-primary btn-xs" href="" >Ver clases</a> --}}

                                    {{-- <button type="button" data-id="{{$curso->id}}" class="btn btn-primary btn-sm confirmate-student">
                                        Ver clases
                                    </button> --}}

                                    {{-- <a class="btn btn-primary btn-xs" href="{{action('ClaseController@editarClase', $clase->id)}}" >Ver clases</a> --}}
                                </td>
                            </tr>
                            
                            
                        @endforeach
                        
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection





