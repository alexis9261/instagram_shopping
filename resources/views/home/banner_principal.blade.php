
  <!-- Banner Principal -->
  <div class="img_ppal">
    <div class="container caption">
      <div class="row">
        <div class="col s6">
          <span class="text_page_banner">Eutuxia Group</span><br>
          <span class="text_banner">Llevamos tu empresa al mundo digital.</span>
          <div style="margin-top:2rem;">
            <a class="waves-effect waves-light btn btn-large blue darken-2">Empezar la transformación<i class="material-icons right">arrow_forward</i></a>
          </div>
        </div>
        <div class="col s6">
          <div class="cont_image">
            <img src="imagen/monitorLarge_sombra.png" alt="" width="85%" style="position:relative;" data-aos="fade-up" data-aos-duration="1000">
            <img src="imagen/tablet_sombra.png" alt="" width="25%" style="position:absolute;bottom:4%;right:17%;z-index:3;" id="image_tablet">
            <img src="imagen/celular2_sombra.png" alt="" width="11%" style="position:absolute;bottom:8%;right:17%;z-index:5;" id="image_celular">
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    anime({
    targets: '#image_tablet',
    translateY: 12,
    duration: 2500,
    direction: 'alternate',
    loop: true,
    easing: 'easeInOutSine'
    });
    anime({
      targets: '#image_celular',
      translateY: 8,
      duration: 4000,
      direction: 'alternate',
      loop: true,
      easing: 'easeInOutSine'
    });
  </script>