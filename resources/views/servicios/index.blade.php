@extends('common.main_plantilla')
@section('title')
	<title>Servicios</title>
@endsection


@section('content')


<div class="swiper-container swiper-container-carousel">
  <div class="swiper-wrapper">
    <div class="swiper-slide bg-dark">
      <div class="image" style=" background-image:url('{{asset('imagen/oxas/fondo2.jpg')}}');" ></div>
      <div class="image band" ></div>
      <div class="caption" data-swiper-parallax-y="-100%">
        <div class="container">
          <div class="row align-items-end vh-75">
            <div class="col-md-5 text-white">
              <span class="eyebrow mb-2">Diseño web</span>
              <h2>Somos <br><span id="typed"></span></h2>
              <div id="typed-strings">
                  <p>Parte de tu Crecimiento</p>
                  <p>Diseñadores</p>
                  <p>Programadores</p>
                  <p>Tus aliados</p>
                  <p>todo lo que necesitas ...</p>
                  
              </div>
              <a href="" class="btn btn-with-ico btn-primary">Iniciar el crecimiento<i class="icon-arrow-right2 fs-20"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    ...
  </div>
</div>
<style>
  .band{
    background-image:url('{{asset('imagen/oxas/curva_blanca.svg')}}');
    background-position-y: bottom;
    bottom: -3px;
  }

</style>




	@php
		$imagen ="https://www.conmasfuturo.com/wp-content/uploads/2014/03/objetivos-paginas-web-antoniosanjuan.jpg";	
	@endphp
	 <!-- presentation -->
   <section class="section-lg">
     <div class="container">
       <div class="row text-center text-lg-left">
         <div class="col-12 col-lg-8">
           <div class="row">
             <div class="col-lg-7">
               <h2 class="text-uppercase font-weight-bold">Our Philosophy</h2>
               <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
             </div>
           </div>
           <div class="row gutter-3">
             <div class="col-sm-6 col-lg-4">
               <i class="svg-icon fs-50 text-blue">
                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                 <circle fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="32" cy="32" r="26"/>
                 <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="32,20 32,32 40,36 "/>
                 <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="21.995" y1="56.005" x2="15" y2="63"/>
                 <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="49" y1="63" x2="42.005" y2="56.005"/>
                 <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="1,8 5,4 15,6 3,18 "/>
                 <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="59,4 63,8 61,18 49,6 "/>
                 </svg>
               </i>
               <h4 class="fs-20 font-weight-bold text-primary my-1">Professional Gym</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
             </div>
             <div class="col-sm-6 col-lg-4">
               <i class="svg-icon fs-50 text-primary">
                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                 <g>
                   <rect x="1" y="18" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="62" height="36"/>
                 </g>
                 <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="1" y1="30" x2="63" y2="30"/>
                 <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="27,30 27,36 37,36 37,30 "/>
                 <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M23,18c0,0,0-8,9-8s9,8,9,8"/>
                 </svg>
               </i>
               <h4 class="fs-20 font-weight-bold text-primary my-1">Best Results</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
             </div>
             <div class="col-sm-6 col-lg-4">
               <i class="svg-icon fs-50 text-primary">
                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                 <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="56,22 56,54 1,54 1,15 19.629,15 26.726,22 
                   "/>
                 <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="8,13 8,7 26.629,7 33.726,14 63,14 63,46 
                   58,46 "/>
                 </svg>
               </i>
               <h4 class="fs-20 font-weight-bold text-primary my-1">Healthy Diet</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
             </div>
           </div>
         </div>
         <div class="col-12 col-lg-3 presentation presentation-responsive">
           <img class="left-50 vertical-align" src="{{asset('demos/trainers.jpg')}}" alt="Image">
         </div>
       </div>
     </div>
   </section>
    <!-- / presentation -->



    <!-- services -->
    <section class="pt-0 pattern pattern-dark">
      <div class="container">
        <div class="row boxed separated">
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-1.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Game Development</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-2.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Targeted Marketing</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-3.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Support</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-4.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">SEO</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-5.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Security</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-6.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Fast Delivery</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
          </div>
        </div>
      </div>
    </section>
    <!-- / services -->


	{{--<h2 class="servicio_seo_title">{{$servicio->service}}</h2>
	@foreach($banners as $banner)
	<section class="servicio_seo">
		<div class="servicio_seo_body servicio_1">
			<div class="container">
				<h3>{{$banner->title}}</h3>
				<p>{{$banner->subtitle}}</p>
			</div>
			<div class="container_imagen" style="background-image: url('{{asset('storage/'.$banner->imagen)}}');background-repeat: none; background-size: cover"></div>
		</div>
	</section>
	@endforeach--}}
<!-- 	<section class="servicio_seo">
		<div class="servicio_seo_body servicio_2">
			<div class="container_imagen" style="background-image: url('{{$imagen}}')"></div>
			<div class="container">
				<h3>title</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>
	
	<section class="servicio_seo">
		<div class="servicio_seo_body servicio_3">
			<div class="container">
				<h3>title</h3>
				<p class ="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="container_imagen" style="background-image: url('{{$imagen}}')"></div>
		</div>
	</section> -->
	
	<section class="servicio_juntos">
		<div class="servicio_juntos_body">
			<h2>Trabajemos juntos</h2>
			<a href="#">contactar</a>
		</div>
	</section>
@endsection