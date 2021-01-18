@extends('cms.index')


@section('content')
<section>


  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Blog Categorias</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="{{route('blog.category.create')}}" type="button" class="btn btn-sm btn-outline-success">Agregar Categoria</a>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Imagen</th>
          <th>Titulo</th>
          <th>Descripción</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categorias as $categoria)
          <tr>
            <td>{{$categoria->id}}</td>
            <td>
              <img src="{{asset('storage/'. $categoria->image)}}" width="50">
            </td>
            <td>{{$categoria->title}}</td>
            <td>{{$categoria->description}}</td>
            <td class="d-flex ">
              <a href="{{route('blog.category.edit', $categoria->id)}}"  class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
              <form action="{{route('blog.category.destroy', $categoria->id)}}" method="POST">
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

@endsection