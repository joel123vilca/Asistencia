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
                            <h4>Lista de cursos</h4>
                        </div>
                    </div>
                    <br>
                    <table id="studentTable" class="table table-striped table-bordered dt-responsive small" style="width: 100%">
                        <thead class="thead-inverse">
                        <tr>
                            <th>ID#</th>
                            <th>Nombre</th>
                            <th>Turno</th>
                            <th>Ciclo</th>
			                        
     <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cursos as $key => $curso)
                            <tr>
                                <td>{{$curso->id}}</td>
                                <td style="text-transform: uppercase">{{$curso->nombre}}</td>
                                <td style="text-transform: uppercase">{{$curso->turno}}</td>
                                <td>{{$curso->ciclo}}</td>
				
                                <td>
                                    <button type="button" data-id="{{$curso->id}}" class="btn btn-outline-primary btn-sm read-curso-modal">
                                        <i class="fa fa-eye"></i></button>
                                    <button type="button" data-id="{{$curso->id}}"  class="btn btn-outline-warning btn-sm edit-curso-modal">
                                        <i class="fa fa-pencil"></i></button>
 <a class="btn btn-primary btn-xs" href="" ><span class="glyphicon glyphicon-pencil"></span>Imprimir</a>

                                    <button type="button" data-id="{{$curso->id}}" class="btn btn-outline-success btn-sm confirmate-student">
                                        Email
                                    </button>
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

@section('after-scripts')
    
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
  
    
    
    <script src="https://unpkg.com/sweetalert2@7.20.3/dist/sweetalert2.all.js"></script>
    
    <script type="text/javascript">


        $(document).ready(function () {
            var studentTable = $('#studentTable').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis'],
language: {
                    "search":'Buscar'
        }
            });

                studentTable.buttons().container()
        .appendTo('#studentTable_wrapper .col-md-6:eq(0)');
            console.log()
        })


        
    </script>


@endsection

