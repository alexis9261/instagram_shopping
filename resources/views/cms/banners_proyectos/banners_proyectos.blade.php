@extends('cms.index')


@section('content')
<section>


  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Banners de proyectos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="{{route('project.home')}}"  class="btn btn-sm btn-outline-success mr-2">Volver</a>
        <a href="{{route('banner.project.create', $project->id)}}" type="button" class="btn btn-sm btn-outline-success">Crear Banner</a>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Imagen</th>
          <th>titulo</th>
          <th>proyecto</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($banners as $banner)
          <tr>
            <td>{{$banner->id}}</td>
            <td>
              <img src="{{asset('storage/'. $banner->imagen)}}" width="50">
            </td>
            <td>{{$banner->title}}</td>
            <td>{{$banner->project->project}}</td>
            <td class="d-flex ">
              <a href="{{route('banner.project.show', array($project->id, $banner->id))}}"  class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
              <form action="{{route('banner.project.destroy', $banner->id)}}" method="POST">
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
