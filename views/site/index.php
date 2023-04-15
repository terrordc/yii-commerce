<?php

/** @var yii\web\View $this */
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4"> </h1>

       


        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">TJRF dasdasdadas</a></p>

    </div>

    <div class="body-content">

    <?php
    
        if(Yii::$app->user->identity->admin == 1){
            
    echo '
    <h5 class="card-title navbar-light bg-light position-relative text-center">Панель Администратора</h5>
    <nav class="navbar navbar-light bg-light">
    <a href="#" class="btn btn-info">Список Заказов</a>
    <a href="#" class="btn btn-info">Управление товарами</a>
    
    
    <a href="#" class="btn btn-info">Управление категориями</a>

</nav>


    ';
    
     } 
            ?>


  


        <div class="card" style="width: 18rem;">
        <a href="" class="b-socials__link"><img class="card-img-top " src="https://s0.rbk.ru/v6_top_pics/resized/590xH/media/img/1/58/755663202278581.jpg" 
                onmouseover="this.src='https://s0.rbk.ru/v6_top_pics/resized/590xH/media/img/6/60/755663230090606.jpg'"
                onmouseout="this.src='https://s0.rbk.ru/v6_top_pics/resized/590xH/media/img/1/58/755663202278581.jpg'"
                alt="Дорога на Новочеремушкинской"></a>
        <div class="card-body">
            <h5 class="card-title">Болотниковская от улицы Новочеремушкинской до Севастопольского проспекта</h5>
            <p class="card-text">Эта часть улицы была в плане ремонта на 2018 год. На панорамной съемке «Яндекс.Карт» в 2017 году на дороге видны трещины, а в 2018 году на тех же местах их уже не было.</p>
            <a href="#" class="btn btn-primary">Просмотр</a>
        </div>
        </div>


    </div>
</div>
