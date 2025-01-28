@extends('PlanillaBase.Menu')

@section('contenido')

<div class="caja_tabla-2">
    <div class="container-fluid d-flex justify-content-center  text-light">
        <h2 class="text-center p-2 m-2 fs-1 fw-bold text-dark" > Listado de clasificaciones
        </h2>
   
    </div>
    
      
    
    <a href="articulos/create" type="button" class="btn btn-primary rounded-pill "><i class="fa-solid fa-plus"></i> Agregar</a>
    </div>
    
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th sacope="col">ID</th>
                <th scope="col">Descripcion</th>
                <th scope="col"><i class="fa-solid fa-hexagon-nodes-bolt"></i>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- @foreach($articulos as $unArticulo)
                <tr>
                    <td></td>
                    <td></td>
                    <td>    
                        <a href="articulos/{{$unArticulo->id}}/edit " name="Editar" class="btn " title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                        <button class="btn btn eliminar" title="Eliminar" id="{{$unArticulo->id}}" value= '{{$unArticulo->id}}'><i class="fa-solid fa-trash-can"></i></button>
                            
                   </td>
                </tr>
            @endforeach -->

        </tbody>
    
    
    </table>
    </div>

@endsection