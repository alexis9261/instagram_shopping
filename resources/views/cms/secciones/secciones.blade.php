@extends('cms.index')


@section('content')
<section>

  @if(session('message'))
        <div class="alert alert-success my-3" role="alert">
          {{session('message')}}
        </div>
  @endif

  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Secciones</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="#" type="button" data-toggle="modal" data-target="#modalSecciones" class="btn btn-sm btn-outline-success">Agregar Sección</a>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Sección</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($secciones as $seccion)
          <tr>
            <td>{{$seccion->id}}</td>
            <td>{{$seccion->section}}</td>
            <td class="d-flex ">
              <button type="button" id="{{$seccion->id}}" class="btn btn-sm btn-outline-success mr-2 editar"  data-toggle="modal" data-target="#modalEditarSecciones">Editar</button>
              <form action="{{route('seccion.eliminar', $seccion->id)}}" method="POST">
                @csrf
                <input type="submit" value="Eliminar" type="button" class="btn btn-sm btn-outline-danger">
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>


<div class="modal fade" id="modalSecciones" tabindex="-1" role="dialog" aria-labelledby="modalSubscriptor" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSubscriptor">Crear Sección</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('seccion.crear')}}" method="POST" id="form_create_section" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <h5>Sección</h5>
              <input class="form-control" id="crear_categoriaNombre" type="text" name="section" placeholder="Nombre de la sección" maxlength="191">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success px-4" id="agregarSection">Crear Sección</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modalEditarSecciones" tabindex="-1" role="dialog" aria-labelledby="modalSubscriptor" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSubscriptor">Crear Sección</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" id="form_editar_section" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <h5>Sección</h5>
              <input class="form-control" id="editar_seccionTitle" type="text" name="section" placeholder="Nombre de la sección" maxlength="191">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success px-4" id="actualizarSection">Crear Sección</button>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
  let submitCrear = document.getElementById('agregarSection');
  let editarButtons = document.querySelectorAll('.editar');
  let submitEditar = document.getElementById('actualizarSection');

  submitEditar.addEventListener('click', () => {
    let form = form_editar_section;

    form.submit();
  });

  if(editarButtons){
    editarButtons.forEach(button => {
      button.addEventListener('click', (e) => {
          let id = e.target.id
          axios.get(`/cms/seccion/obtener/${id}`)
            .then(response => {
              
              modalEditar(id, response.data)
            });
      })
    }); 
  }


  submitCrear.addEventListener('click', () => {
    let form = document.getElementById('form_create_section')
    form.submit();
  });



 function modalEditar(id, titulo) {
    let title = document.getElementById('editar_seccionTitle')
    let form  = document.getElementById('form_editar_section')

    title.value = titulo;

    form.action = `/cms/actualizar/section/${id}`
 }

</script>

@endsection
