<?php
    $link = mysqli_connect ('127.0.0.1:3306', 'root', '', 'basdem');

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  
    
<div class="container">
    
    <div class="slid">

    <div id="viewport">
        <div class="slider" style="left: 0">

    <?php
    
    $tovars = mysqli_query($link, ('SELECT * FROM `tovar` WHERE `id`<6'));

    foreach ($tovars as $tovar){
        echo "<a href='#' class='nonedec'>
        <div class='card slide' style='width: 18rem;'>
            <img src='images/".$tovar['photo']."' class='card-img-top' alt='...' style='height: 150px; padding: 10px;'>
            <div class='card-body'>
                <h5 class='card-title'>".$tovar['name']."</h5>
                <p class='card-text'>".$tovar['description']."</p>
                <a href='#' class='btn btn-primary'>".$tovar['price']."</a>
            </div>
        </div>
      </a>";
    }

    foreach ($tovars as $tovar){
        echo "<a href='#' class='nonedec'>
        <div class='card slide' style='width: 18rem;'>
            <img src='images/".$tovar['photo']."' class='card-img-top' alt='...' style='height: 150px; padding: 10px;'>
            <div class='card-body'>
                <h5 class='card-title'>".$tovar['name']."</h5>
                <p class='card-text'>".$tovar['description']."</p>
                <a href='#' class='btn btn-primary'>".$tovar['price']."</a>
            </div>
        </div>
      </a>";
    }
    
    ?>      
      
        </div>
    </div>

    <div class="cen">
        <div id="viewSlider">
            <div class="viewSlide"></div>
            <div class="viewSlide"></div>
            <div class="viewSlide"></div>
            <div class="viewSlide"></div>
            <div class="viewSlide"></div>
        </div>
 
        <button class="prev" id="prev">Назад</button>
        <button class="next" id="next">Вперёд</button>
    </div>


    </div>


</div>

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>