@extends('home.main_plantilla')

@section('title')
<title>Proyectos</title>
@endsection

@section('content')
@include('home.plantilla_header')
<section>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="nav nav-tabs">
          <a class="nav-item nav-link active" data-filter="all">All</a>
          <a class="nav-item nav-link" data-filter="branding">Branding</a>
          <a class="nav-item nav-link" data-filter="illustration">Illustration</a>
          <a class="nav-item nav-link" data-filter="photography">Photography</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-full">
    <div class="row">
      <div class="col">
        <ul class="row gutter-0 gallery filtr-container">
          <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, branding" data-sort="value">
            <figure class="photo equal">
              <a href="#" 
                style="background-image: url('{{asset('imagen/minimal/portfolio-1.jpg')}}');">
              </a>
            </figure>
          </li>
          <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, illustration" data-sort="value">
            <figure class="photo equal equal-long">
              <a href="../../assets/images/demo/minimal/portfolio-2.jpg" 
                style="background-image: url('{{asset('imagen/minimal/portfolio-2.jpg')}}');">
              </a>
            </figure>
          </li>
          <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, photography" data-sort="value">
            <figure class="photo equal">
              <a href="#" 
                style="background-image: url('{{asset('imagen/minimal/portfolio-3.jpg')}}');">
              </a>
            </figure>
          </li>
          <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, illustration" data-sort="value">
            <figure class="photo equal equal-long">
              <a href="#" 
                style="background-image: url('{{asset('imagen/minimal/portfolio-4.jpg')}}');">
              </a>
            </figure>
          </li>
          <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, branding" data-sort="value">
            <figure class="photo equal equal-long">
              <a href="#" 
                style="background-image: url('{{asset('imagen/minimal/portfolio-5.jpg')}}');">
              </a>
            </figure>
          </li>
          <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, illustration, branding" data-sort="value">
            <figure class="photo equal">
              <a href="#" 
                style="background-image: url('{{asset('imagen/minimal/portfolio-6.jpg')}}');">
              </a>
            </figure>
          </li>
          <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, photography" data-sort="value">
            <figure class="photo equal equal-long">
              <a href="#" 
                style="background-image: url('{{asset('imagen/minimal/portfolio-7.jpg')}}');">
              </a>
            </figure>
          </li>
          <li class="col-6 col-md-4 col-lg-3 filtr-item" data-category="all, photography, illustration" data-sort="value">
            <figure class="photo equal">
              <a href="#" 
                style="background-image: url('{{asset('imagen/minimal/portfolio-8.jpg')}}');">
              </a>
            </figure>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection