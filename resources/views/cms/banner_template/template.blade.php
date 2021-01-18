@php
  $imagen ="https://www.conmasfuturo.com/wp-content/uploads/2014/03/objetivos-paginas-web-antoniosanjuan.jpg";  
@endphp

<section class="servicio_seo">
    <div class="servicio_seo_body servicio_1">
      <div class="container">
        @if(isset($banner->title) && isset($banner->subtitle))
          <h3 id="template_title">{{$banner->title}}</h3>
          <p id="template_content">{{$banner->subtitle}}</p>
        @else 
          <h3 id="template_title">title</h3>
          <p id="template_content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        @endif
      </div>
      <div  class="container_imagen">
        @if(isset($banner->imagen))
          <img id="image_banner" src="{{asset('/storage/'. $banner->imagen)}}" style="width: 100%; height: 100%; object-fit: cover;">
        @else
          <img id="image_banner" src="{{$imagen}}" style="width: 100%; height: 100%;">
        @endif

      </div>
    </div>
</section>