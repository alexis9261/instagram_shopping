<!-- Dropdown prodcutos -->
   <ul id="dropdown1" class="dropdown-content">
    @foreach($productos as $producto)
      <li>
        <a href="{{route('product.option', $producto->id)}}" class="dropdown-item">
          {{$producto->product}}
        </a>
      </li>
    @endforeach
  </ul>
  
  <!-- Dropdown servicios -->
   <ul id="dropdown3" class="dropdown-content">
    @foreach($servicios as $servicio)
    <li>
      <a href="{{route('service.option', $servicio->id)}}" class="dropdown-item">
        {{$servicio->service}}
      </a>
    </li>
    @endforeach
  </ul>


  <ul id="dropdown4" class="dropdown-content">
    @foreach($proyectos as $proyecto)
    <li>
      <a href="{{route('project.option', $proyecto->id)}}" class="dropdown-item">
        {{$proyecto->project}}
      </a>
    </li>
    @endforeach
  </ul>

  <!-- Dropdown Nosotros -->
  {{-- <ul id="dropdown5" class="dropdown-content">
    <li>
      <a href="" class="dropdown-item">
        <i class="material-icons">explore</i> Inicios
      </a>
    </li>
    <li>
      <a href="" class="dropdown-item">
        <i class="material-icons">view_carousel</i> Proyectos
      </a>
    </li>
    <li>
      <a href="" class="dropdown-item">
        <i class="material-icons">star_border
        </i> Premios
      </a>
    </li>
    <li>
      <a href="" class="dropdown-item">
        <i class="material-icons">location_on</i> Contacto
      </a>
    </li>
  </ul>
  <ul id="dropdown6" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul> --}}
  <!-- Menu superior -->
  <nav class="navbar_ppal" role="navigation">
    <div class="nav-wrapper"><a id="logo-container" href="/" class="brand-logo">Eutuxia</a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a class="dropdown-trigger waves-effect waves-light btn-flat white-text" style="padding:0px 0.7rem!important;margin:0px!important;" href="/productos" data-target="dropdown1" style="padding:0px;margin:0px;">Productos
            <i class="material-icons right" style="margin-right:0px;">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-trigger waves-effect waves-light btn-flat white-text" style="padding:0px 0.3rem!important;margin:0px!important;" href="/servicios" data-target="dropdown3" style="padding:0px;margin:0px;">Servicios
            <i class="material-icons right" style="margin-right:0px;">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-trigger waves-effect waves-light btn-flat white-text" style="padding:0px 0.3rem!important;margin:0px!important;" href="/servicios" data-target="dropdown4" style="padding:0px;margin:0px;">Proyectos
            <i class="material-icons right" style="margin-right:0px;">arrow_drop_down</i>
          </a>
        </li>
        <li>
          <a class="dropdown-trigger waves-effect waves-light btn-flat white-text" style="padding:0px 0.7rem!important;margin:0px!important;" href="/nosotros" data-target="dropdown5" style="padding:0px;margin:0px;">Nosotros
            <i class="material-icons right" style="margin-right:0px;">arrow_drop_down</i>
          </a>
        </li>
        <li><a class="btn-small waves-effect waves-light btn purple darken-4">Cotizar</a></li>
      </ul>
      <!-- Manu lateral Mobile -->
      <ul id="nav-mobile" class="sidenav">
        <li><a href="/">Home</a></li>
        <li><a href="/productos">Productos</a></li>
        <li><a href="/servicios">Servicios</a></li>
        <li><a href="/nosotros">Nosotros</a></li>
        {{-- <li><a class="dropdown-trigger" href="/productos" data-target="dropdown2">Productos<i class="material-icons right">arrow_drop_down</i></a></li> --}}
        {{-- <li><a class="dropdown-trigger" href="/servicios" data-target="dropdown4">Servicios<i class="material-icons right">arrow_drop_down</i></a></li> --}}
        {{-- <li><a class="dropdown-trigger" href="/nosotros" data-target="dropdown4">Nosotros<i class="material-icons right">arrow_drop_down</i></a></li> --}}
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>