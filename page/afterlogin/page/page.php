<?php
 include '../dashboard.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Online Store Website</title>
    <link rel="stylesheet" href="../css/page.css">
    <script src="../script/page.js"></script>
</head>
<body>
    <div class="conttitle">
        <h1>Product Carousel</h1>
    </div>
    <div class="carousel">
           <div class="carousel-item">
               <img src="https://cf.shopee.co.id/file/2b8ea45900e7a85129938ea8bcf9b83f" alt="">
               <h1>Violin</h1>
           </div>
           <div class="carousel-item">
               <img src="https://id.yamaha.com/id/files/CLP-665GPPE_1080_1080_1080x1080_de607cc3c59ebb6e2375f74285c0353c.jpg" alt="">
               <h1>Organ</h1>
           </div>
           <div class="carousel-item">
               <img src="https://www.artistguitars.com.au/assets/full/14334.jpg?20200507094636" alt="">
               <h1>Guitar</h1>
           </div>
           <div class="carousel-item">
               <img src="https://d1aeri3ty3izns.cloudfront.net/media/33/330997/600/preview_2.jpg" alt="">
               <h1>Bass</h1>
           </div>
           <div class="carousel-item">
               <img src="https://static.keymusic.com/products/287848/XL/roland-vad506-v-drum.jpg" alt="">
               <h1>Drum</h1>
           </div>
       </div>
    <script src="jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.carousel').carousel();
      });
    </script>
</body>
</html>