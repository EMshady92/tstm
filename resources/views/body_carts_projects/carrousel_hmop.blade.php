<style>
    .carousel-item {
transition: transform 1s ease-in-out;
}

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
transition: opacity 0s 1s;
}

</style>
<div id="myCarousel_hmop" class="carousel slide carousel-fade" data-interval="1500" data-ride="carousel">
    <!-- Carousel items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  style="width:100%;height:500px;" src="{{asset('images/hmop_imgs/ajax.png')}}" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img style="width:100%;height:500px;"  src="{{asset('images/hmop_imgs/table.png')}}" alt="Categorias">
      </div>


      <!-- Add more items as needed -->
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel_hmop" data-slide="prev">
      <span style="color:black;" class="carousel-control-prev-icon text-slate-500"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel_hmop" data-slide="next">
      <span style="color:black;" class="carousel-control-next-icon text-slate-500"></span>
    </a>
  </div>
<script>
    $(document).ready(function(){
  // Using data-slide attribute
  $('a[data-slide="next"]').click(function() {
    $('#myCarousel_hmop').carousel('next');
  });

  $('a[data-slide="prev"]').click(function() {
    $('#myCarousel_hmop').carousel('prev');
  });

  // Alternatively, you can bind click events directly
  $('.carousel-control-next').click(function() {
    $('#myCarousel_hmop').carousel('next');
  });

  $('.carousel-control-prev').click(function() {
    $('#myCarousel_hmop').carousel('prev');
  });
});
</script>
