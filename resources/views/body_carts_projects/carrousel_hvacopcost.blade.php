<style>
    .carousel-item {
transition: transform 1s ease-in-out;
}

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
transition: opacity 0s 1s;
}
</style>
<div id="myCarousel_hvac" class="carousel slide carousel-fade" data-interval="1500" data-ride="carousel">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  style="width:100%;height:500px;" src="{{asset('images/hvacopcost_imgs/portada_hvac.png')}}" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/hvacopcost_imgs/sols.png')}}" alt="Ingreso">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/hvacopcost_imgs/resul.png')}}" alt="Carga de Expedientes">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/hvacopcost_imgs/pdfs.png')}}" alt="Actuarios">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/hvacopcost_imgs/proys.png')}}" alt="Actuarios">
      </div>


      <!-- Add more items as needed -->
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel_hvac" data-slide="prev">
      <span class="carousel-control-prev-icon text-slate-800"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel_hvac" data-slide="next">
      <span class="carousel-control-next-icon text-slate-800"></span>
    </a>
  </div>
<script>
    $(document).ready(function(){
  // Using data-slide attribute
  $('a[data-slide="next"]').click(function() {
    $('#myCarousel_hvac').carousel('next');
  });

  $('a[data-slide="prev"]').click(function() {
    $('#myCarousel_hvac').carousel('prev');
  });

  // Alternatively, you can bind click events directly
  $('.carousel-control-next').click(function() {
    $('#myCarousel_hvac').carousel('next');
  });

  $('.carousel-control-prev').click(function() {
    $('#myCarousel_hvac').carousel('prev');
  });
});
</script>
