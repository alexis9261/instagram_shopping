@extends('cms.index')


@section('content')
<section>


  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Proyectos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="{{route('project.create')}}" type="button" class="btn btn-sm btn-outline-success">Agregar proyecto</a>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Imagen</th>
          <th>Proyecto</th>
          <th>Seccion</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($projects as $project)
          <tr>
            <td>{{$project->id}}</td>
            <td>
              <img src="{{asset('storage/'. $project->imagen)}}" width="50">
            </td>
            <td>{{$project->project}}</td>
            <td>{{$project->section->section}}</td>
            <td class="d-flex ">
              <a href="{{route('project.show', $project->id)}}"  class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
              <a href="{{route('banners.project', $project->id)}}"  class="btn btn-sm btn-outline-success mr-2 editar">Banners</a>
              <form action="{{route('project.delete', $project->id)}}" method="POST">
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
