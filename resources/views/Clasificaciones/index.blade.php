@extends('PlanillaBase.Menu')

@section('contenido')

<div class="caja_tabla-2">
    <div class="container-fluid d-flex justify-content-center text-light">
        <h2 class="text-center p-2 m-2 fs-1 fw-bold text-dark">Listado de clasificaciones</h2>
    </div>
    
    <button class="btn btn-primary rounded-pill btnmodal" title="Nuevo" id="nuevaClasificacion">
        <i class="fa-solid fa-plus"></i> Agregar
    </button>
    <br></br>
</div>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col"><i class="fa-solid fa-hexagon-nodes-bolt"></i> Acciones</th>
        </tr>
    </thead>
    <tbody>
            @foreach($clasificaciones as $unaClasificacion)
                <tr>
                    <td>{{$unaClasificacion->id}}</td>
                    <td>{{$unaClasificacion->nombre}}</td>
                    
                    <td>    
                        <a href="/categorias/{{$unaClasificacion->id}}/edit " name="Editar" class="btn " title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="/quitarUnaCategoria/{{$unaClasificacion->id}}" name="delete" class="btn " title="delete"><i class="fa-solid fa-trash-can"></i></a> 
                        
                    </td>
                </tr>
            @endforeach

        </tbody>
</table>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Registrar Mascota</h4>
            </div>
            <form role="form" action="" name="frmMascotas" onsubmit="Registrar(); return false">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>ID Mascota</label>
                  <input name="ID" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nombre</label>
                  <input name="Nombre" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Fecha De Nacimiento</label>
                  <input name="Fecha" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Raza</label>
                  <input name="Raza" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label>Especie</label>
                  <input name="Especie" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-info btn-lg">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Registrar
                </button>

              </div>
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i class="fa fa-times"></i>x</button>
            </div>
          </div>
        </div>
      </div>
    </div> 


<!-- <script>
    $(document).ready(function () {
        $('#example').DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            }
        });
    });
</script> -->

<script type="text/javascript">
        $(document).ready(function(){
            $('#btnmodal').click(function(){
                $('#modal').modal('show');
            });
            
        });
</script>

@endsection
