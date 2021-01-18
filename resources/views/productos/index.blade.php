@extends('common.main_plantilla')

@section('title')
<title>Productos</title>
@endsection

@section('content')

<!-- cover classic -->
<section class="p-0 pt-10 bg-primary text-white">
  <div class="container">
    <div class="row align-items-center justify-content-between py-5 py-md-10">
      <div class="col-12 col-lg-6 text-center text-lg-left">
        <h1 class="display-3">Speed up your workflow with our <b>features.</b></h1>
        <div class="input-group mb-1">
          <input type="text" class="form-control px-3" placeholder="your@mail.com" aria-label="Get a free copy">
          <div class="input-group-append">
            <button class="btn btn-white" type="button">Subscribe</button>
          </div>
        </div>
        <small>* we won't share your data with third parties</small>
      </div>
      <div class="col-12 col-lg-6" data-aos="zoom-in" data-aos-delay="500">
        <img src="{{asset('imagen/app/app-1.svg')}}" alt="Image">
      </div>
    </div>
  </div>
</section>
<!-- / cover classic -->


<!-- steps carousel -->
<section class="bg-primary text-white">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 col-lg-8">
        <h2>Appropriately reintermediate resource-leveling <b>functionalities</b> through resource.</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="owl-carousel visible" data-items="[3,2,2]" data-margin="20">
          <div class="step step-highlight">
            <h4 class="step-title">Download</h4>
            <p>Create your free account in a matter of minutes with our patented awesome sign up process.</p>
          </div>
          <div class="step">
            <h4 class="step-title">Install</h4>
            <p>Create your free account in a matter of minutes with our patented awesome sign up process.</p>
          </div>
          <div class="step">
            <h4 class="step-title">Sign up</h4>
            <p>Create your free account in a matter of minutes with our patented awesome sign up process.</p>
          </div>
          <div class="step">
            <h4 class="step-title">Calibrate</h4>
            <p>Create your free account in a matter of minutes with our patented awesome sign up process.</p>
          </div>
          <div class="step">
            <h4 class="step-title">Sign up for free</h4>
            <p>Create your free account in a matter of minutes with our patented awesome sign up process.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / steps carousel -->


<!-- features -->
<section>
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-lg-6">
        <img src="{{asset('imagen/app/app-2.svg')}}" alt="Image">
      </div>
      <div class="col-12 col-lg-5">
        <div class="row">
          <div class="col">
            <h2 class="text-decorate">Speed up your workflow with our <b>features.</b></h2>
          </div>
        </div>
        <div class="row gutter-3">
          <div class="col-4" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
            <i class="icon-activity fs-30 mb-2 text-purple">
            </i>
            <span class="eyebrow">Activity Tracker</span>
          </div>
          <div class="col-4" data-aos="fade-up">
            <i class="icon-airplay fs-30 mb-2 text-purple">
            </i>
            <span class="eyebrow">Airplay Compatibility</span>
          </div>
          <div class="col-4" data-aos="fade-up">
            <i class="icon-command fs-30 mb-2 text-purple">
            </i>
            <span class="eyebrow">Task Manager</span>
          </div>
          <div class="col-4" data-aos="fade-up">
            <i class="icon-headphones2 fs-30 mb-2 text-purple">
            </i>
            <span class="eyebrow">Voice to text messaging</span>
          </div>
          <div class="col-4" data-aos="fade-up">
            <i class="icon-life-buoy2 fs-30 mb-2 text-purple">
            </i>
            <span class="eyebrow">Friendly Support</span>
          </div>
          <div class="col-4" data-aos="fade-up">
            <i class="icon-map-pin2 fs-40 mb-1 text-purple">
            </i>
            <span class="eyebrow">Location Services</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / features  -->



<!-- gallery -->
<section class="bg-light separator-top separator-bottom">

  <div>
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-12 col-lg-4 align-self-center text-center text-md-left">
          <h2 class="h1">Check our <b>awesome app.</b></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet placeat velit provident blanditiis, dolore nobis cum voluptates</p>
        </div>

        <div class="col-12 col-lg-7 scrolling-gallery" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
          <div data-bottom-top="transform: translateY(0px);" data-top-bottom="transform: translateY(-1000px);">
            <ul class="masonry gallery gutter-1 gutter-md-2">
              <li class="col-6">
                <figure class="photo">
                  <a href="#">
                    <img src="{{asset('imagen/app/app-screen-1.png')}}" alt="Image">
                  </a>
                </figure>
              </li>
              <li class="col-6 mt-10">
                <figure class="photo">
                  <a href="#">
                    <img src="{{asset('imagen/app/app-screen-2.png')}}" alt="Image">
                  </a>
                </figure>
              </li>
              <li class="col-6">
                <figure class="photo">
                  <a href="#">
                    <img src="{{asset('imagen/app/app-screen-3.png')}}" alt="Image">
                  </a>
                </figure>
              </li>
              <li class="col-6">
                <figure class="photo">
                  <a href="#">
                    <img src="{{asset('imagen/app/app-screen-4.png')}}" alt="Image">
                  </a>
                </figure>
              </li>
              <li class="col-6">
                <figure class="photo">
                  <a href="#">
                    <img src="{{asset('imagen/app/app-screen-1.png')}}" alt="Image">
                  </a>
                </figure>
              </li>
              <li class="col-6">
                <figure class="photo">
                  <a href="#">
                    <img src="{{asset('imagen/app/app-screen-2.png')}}"  alt="Image">
                  </a>
                </figure>
              </li>

            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- / gallery -->



<!-- presentation -->
<section>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-4" data-aos="zoom-in" data-aos-anchor-placement="top-center">
        <div class="presentation-circle">
          <figure style="background-image: url('{{asset('imagen/app/app-3.svg')}}')"></figure>
        </div>
      </div>
      <div class="col-md-5 pl-md-10 text-center">
        <h2><b>GDPR</b> Ready</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum tempora totam omnis corporis voluptatibus necessitatibus eum quod maxime labore aliquam?</p>
        <a href="" class="link">Learn More</a>
      </div>
    </div>
    <div class="row align-items-center justify-content-center">
      <div class="col-md-5 pr-md-10 text-center">
        <h2><b>Take control</b><br>of your app.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <a href="" class="link">Learn More</a>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-anchor-placement="top-center">
        <div class="presentation-circle">
          <figure style="background-image: url('{{asset('imagen/app/app-4.svg')}}')"></figure>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / presentation -->

@endsection