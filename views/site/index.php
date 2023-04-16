<?php

/** @var yii\web\View $this */
use yii\helpers\Url;
use yii\bootstrap5\Html;
$this->title = 'Главная';

$this->registerCssFile('../css/style.css');
$this->registerJsFile('../js/main.js');
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4"> </h1>
    </div>
    
        <div class="body-content">

            <?php
                if(!Yii::$app->user->isGuest && Yii::$app->user->identity->admin == 1){
                    echo '<h5 class="card-title navbar-light bg-light position-relative text-center">Панель Администратора</h5>
                        <nav class="navbar navbar-light bg-light">
                            <a href="#" class="btn btn-info">Список Заказов</a>
                            <a href="#" class="btn btn-info">Управление товарами</a>
                            <a href="#" class="btn btn-info">Управление категориями</a>
                        </nav>';
                } 
            ?>
            
        
    <?php if(!$products == null){
        echo "<h1 class='display-4 text-center'>Последние товары:</h1><br>";
    } 
    ?>
        <div class="slid">
            <div id="viewport">
                <div class="slider" style="left: 0">
                    <?php
                    
                    if($products == null){
                        echo "<h1 class='display-4 text-center'>Товары не загружены!</h1>";
                    }
                    else{
                        foreach ($products as $product){
                            $image_url =  Html::encode($product->image_url);
                            $name = Html::encode($product->name);
                            $desc = Html::encode($product->description);
                            $price = Html::encode($product->price);
                            echo "<a href='#' class='nonedec'>
                                    <div class='card slide' style='width: 18rem;'>
                                        <img src='images/". $image_url ."' class='card-img-top' alt='...' style='height: 150px; padding: 10px;'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>". $name ."</h5>
                                            <p class='card-text'>". $desc ."</p>
                                            <a href='#' class='btn btn-primary'>". $price ." Руб.</a>
                                        </div>
                                    </div>
                                </a>";
                        }
                    }
                    ?>   
                </div>
            </div>
        

                <div id="viewSlider "  class="m-auto d-flex justify-content-around mt-4">
                    <div class="d-flex flex-row">
                        <div class="viewSlide mx-4"></div>
                        <div class="viewSlide mx-4"></div>
                        <div class="viewSlide mx-4"></div>
                        <div class="viewSlide mx-4"></div>
                        <div class="viewSlide mx-4"></div>
                    </div>
                </div>
                    <div id="viewSlider "  class="m-auto d-flex justify-content-around mt-4">
                        <div class="d-flex flex-row">
                            <button class="prev btn btn-primary mx-2" id="prev">Назад</button>
                            <button class=" next btn btn-primary mx-2" id="next">Вперёд</button>
                        </div>
                    </div>
            </div>
        </div>
</div>
