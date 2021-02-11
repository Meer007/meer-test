<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS 
  <link rel="stylesheet" href="../package/swiper-bundle.min.css"> -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- Demo styles -->
  <style>
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }
	.childs{
		width: inherit;
		height: 50%;
		
		
	}

    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
	  border-color: red;
    border-style: dotted;

    }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(./tinder1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./tinder2.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./tinder3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./tinder4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./tinder5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./tinder6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./tinder7.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./tinder8.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./tinder9.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(./tinder1.jpg)"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS 
  <script src="../package/swiper-bundle.min.js"></script> -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>

</html>