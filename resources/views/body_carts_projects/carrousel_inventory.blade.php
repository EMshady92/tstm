<style>
    .carousel-item {
transition: transform 1s ease-in-out;
}

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
transition: opacity 0s 1s;
}
</style>
<div id="myCarousel_inv" class="carousel slide carousel-fade" data-interval="1500" data-ride="carousel">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  style="width:100%;height:500px;" src="{{asset('images/inventory_imgs/portada_inventory.png')}}" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/inventory_imgs/cates.png')}}" alt="Categorias">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/inventory_imgs/product.png')}}" alt="Productos">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/inventory_imgs/altas.png')}}" alt="Altas">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/inventory_imgs/config.png')}}" alt="Config">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/inventory_imgs/e_s.png')}}" alt="Config">
      </div>


      <!-- Add more items as needed -->
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel_inv" data-slide="prev">
      <span style="color:black;" class="carousel-control-prev-icon text-slate-500"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel_inv" data-slide="next">
      <span style="color:black;" class="carousel-control-next-icon text-slate-500"></span>
    </a>
  </div>
<script>
    $(document).ready(function(){
  // Using data-slide attribute
  $('a[data-slide="next"]').click(function() {
    $('#myCarousel_inv').carousel('next');
  });

  $('a[data-slide="prev"]').click(function() {
    $('#myCarousel_inv').carousel('prev');
  });

  // Alternatively, you can bind click events directly
  $('.carousel-control-next').click(function() {
    $('#myCarousel_inv').carousel('next');
  });

  $('.carousel-control-prev').click(function() {
    $('#myCarousel_inv').carousel('prev');
  });
});
</script>
