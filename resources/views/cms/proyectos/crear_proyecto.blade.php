@extends('cms.index')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Proyecto</h1>
    <div class="btn-group mr-2">
      <a href="{{route('project.home')}}" type="button" class="btn btn-sm btn-outline-success px-4">Volver</a>
    </div>
  </div>
    

  <div class="">
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif

    <div>
        <ul style="display: none;" class="alert alert-danger" id="alert_container">
          
        </ul>
    </div>

    <form action="{{route('project.store')}}" id="form" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12 mb-4">
          <h5>Proyecto</h5>
          <input class="form-control" id="input_title" type="text" name="project" value="" placeholder="Titulo" maxlength="191">
        </div> 
        <div class="col-12 mb-4">
          <h5>Imagen</h5>
          <input type="file" id="input_file" name="project_imagen">
        </div>
        <div class="col-12 mb-5">
          <a href="#" type="button" class="btn btn-outline-danger px-4 mr-4">Cancelar</a>
          <input type="button" id="submit_button" class="btn btn-success px-5" value="Crear proyecto">
        </div>
      </div>
    </form>
  </div>
</section>

<script type="text/javascript">
  let inputTitle = document.getElementById('input_title'),
      inputFile = document.getElementById('input_file'),
      submitButton = document.getElementById('submit_button')
      formularioSubmit = document.getElementById('form');


  submitButton.addEventListener('click', (e) => {
    e.preventDefault();
    
    if(!validar()){
      return ;
    }

    formularioSubmit.submit();

  });





  const validar = () => {
        let arrayValidate = [];
        let container = document.getElementById('alert_container');


        if(inputTitle.value == ''){
          arrayValidate.push('Debe agregar un titulo')
        } if(inputFile.files.length <= 0)
        {
          arrayValidate.push('Debe agregar una imagen');
        }

        if(arrayValidate.length > 0){
          

          container.innerHTML = '';

          arrayValidate.forEach(alert => {
            container.innerHTML += `

              <li>${alert}</li>

            `;

          container.style.display = 'block';
          });

          return false;
        } else {
          return true;
        }
      }
</script>

@endsection
