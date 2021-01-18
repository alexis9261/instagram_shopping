@extends('cms.index')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar Categoria</h1>
    <div class="btn-group mr-2">
      <a href="{{route('blog.category')}}" type="button" class="btn btn-sm btn-outline-success px-4">Volver</a>
    </div>
  </div>
    

  <div class="">
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @if(session('error'))
    <div class="alert alert-danger" role="alert">
      {{session('error')}}
    </div>
    @endif

    <div>
        <ul style="display: none;" class="alert alert-danger" id="alert_container">
          
        </ul>
    </div>

    <form action="{{route('blog.category.update', $categoria->id)}}" id="form" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12 mb-4">
          <h5>Titulo</h5>
          <input class="form-control" id="input_title" type="text" name="title" value="{{$categoria->title}}" placeholder="Titulo" maxlength="191">
        </div>
        <div class="col-12 mb-4">
          <h5>Descripción</h5>
          <textarea class="form-control" id="description" name="description" placeholder="Descripción">{{$categoria->description}}</textarea>
        </div> 
        <div class="col-12 mb-4">
          <h5>Imagen</h5>
          <input type="file" id="input_file" name="image">
        </div>
        <div class="col-12 mb-5">
          <a href="{{route('blog.category')}}" type="button" class="btn btn-outline-danger px-4 mr-4">Cancelar</a>
          <input type="button" id="submit_button" class="btn btn-success px-5" value="Editar Categoría">
        </div>
      </div>
    </form>
  </div>
</section>


<script type="text/javascript">
  let inputTitle = document.getElementById('input_title'),
      inputFile = document.getElementById('input_file'),
      submitButton = document.getElementById('submit_button'),
      description = document.getElementById('description'),
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

        if(inputTitle.value == ''){
          arrayValidate.push('Debe agregar un titulo')
        }if(description.value == '')
        {
          arrayValidate.push('Debe agregar una descripción')
        }

        if(arrayValidate.length > 0){
          let container = document.getElementById('alert_container')
          container.innerHTML = '';

          arrayValidate.forEach(alert => {
            container.innerHTML += `

              <li>${alert}</li>

            `
          });

          container.style.display = 'block';

          return false;
        } else {
          return true;
        }
      }


</script>


@endsection
