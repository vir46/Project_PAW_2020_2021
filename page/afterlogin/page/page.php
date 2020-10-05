
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://www.pngall.com/wp-content/uploads/2016/09/Musical-Notes-Free-Download-PNG.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/dash.css">
    <script type="text/javascript" src="../script/dashnav.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/page.css">
    <script src="../script/page.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container section">
    <a href="" class="sidenav-trigger navigasitest" data-target="menu-side">
    <i class="material-icons menuicon">menu</i>
    </a>

    <ul class="sidenav" id="menu-side">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT9ProHVBj9Jr5Zv9j43_DaYezs4LgbWnkamQ&usqp=CAU" alt="">
                </div>
                <!-- Photo Profile -->
                <a href="">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="" class="circle">
                </a>
                <a href="">
                    <span class="name white-text">UserName</span>
                </a>
                <a href="">
                    <span class="email white-text">Email@pawstore.com</span>
                </a>
            </div>
        </li>
        <li>
            <a href="">
                <i class="material-icons">account_box</i>
                Profile
            </a>
        </li>
        <li>
            <a href="">
                <i class="material-icons">apps</i>
                Product Catalog
            </a>
        </li>
        <li>
            <div class="divider"></div>
        </li>
        <li>
            <a href="">
                <i class="material-icons">shopping_cart</i>
                Cart
            </a>
        </li>
        <li>
            <a href="">
                <i class="material-icons">account_balance_wallet</i>
                Check Out
            </a>
        </li>
        <li>
            <a href="">
            <i class="material-icons">arrow_back</i>
            Logout
            </a>
        </li>
    </ul>
</div>
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