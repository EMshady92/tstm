<style>
    .carousel-item {
transition: transform 1s ease-in-out;
}

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
transition: opacity 0s 2.6s;
}
</style>
<div id="myCarousel_sitzac" class="carousel slide carousel-fade" data-interval="1500" data-ride="carousel">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  style="width:100%;height:500px;" src="{{asset('images/sijel.png')}}" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/sitzac_imgs/welcome_sitzac.png')}}" alt="Ingreso">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/sitzac_imgs/carga_expedientes.png')}}" alt="Carga de Expedientes">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/sitzac_imgs/actuarios.png')}}" alt="Actuarios">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/sitzac_imgs/efirma.png')}}" alt="Actuarios">
      </div>


      <!-- Add more items as needed -->
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev " href="#myCarousel_sitzac" data-slide="prev">
      <span class="carousel-control-prev-icon text-slate-500"></span>
    </a>
    <a class="carousel-control-next " href="#myCarousel_sitzac" data-slide="next">
      <span class="carousel-control-next-icon text-slate-500"></span>
    </a>
  </div>
<script>
    $(document).ready(function(){
  // Using data-slide attribute
  $('a[data-slide="next"]').click(function() {
    $('#myCarousel_sitzac').carousel('next');
  });

  $('a[data-slide="prev"]').click(function() {
    $('#myCarousel_sitzac').carousel('prev');
  });

  // Alternatively, you can bind click events directly
  $('.carousel-control-next').click(function() {
    $('#myCarousel_sitzac').carousel('next');
  });

  $('.carousel-control-prev').click(function() {
    $('#myCarousel_sitzac').carousel('prev');
  });
});
</script>
