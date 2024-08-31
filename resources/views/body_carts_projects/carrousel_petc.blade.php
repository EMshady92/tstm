<style>
    .carousel-item {
transition: transform 1s ease-in-out;
}

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
transition: opacity 0s 1s;
}
</style>
<div id="myCarousel" class="carousel slide carousel-fade" data-interval="1500" data-ride="carousel">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  style="width:100%;height:500px;" src="{{asset('images/petc_imgs/portada_petc.png')}}" alt="">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/petc_imgs/quienes_somos.png')}}" alt="Quienes somos">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/petc_imgs/modulos.png')}}" alt="Modulos">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/petc_imgs/empleados.png')}}" alt="Empleados">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/petc_imgs/listas_asistencias.png')}}" alt="Listas Asistencia">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/petc_imgs/consulta_pagos.png')}}" alt="Consulta Pagos">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/petc_imgs/nomina.png')}}" alt="Nomina">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/petc_imgs/reintegros.png')}}" alt="Reintegross">
      </div>



      <!-- Add more items as needed -->
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev " href="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon text-slate-500"></span>
    </a>
    <a class="carousel-control-next " href="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon text-slate-500"></span>
    </a>
  </div>
<script>
    $(document).ready(function(){
  // Using data-slide attribute
  $('a[data-slide="next"]').click(function() {
    $('#myCarousel').carousel('next');
  });

  $('a[data-slide="prev"]').click(function() {
    $('#myCarousel').carousel('prev');
  });

  // Alternatively, you can bind click events directly
  $('.carousel-control-next').click(function() {
    $('#myCarousel').carousel('next');
  });

  $('.carousel-control-prev').click(function() {
    $('#myCarousel').carousel('prev');
  });
});
</script>
