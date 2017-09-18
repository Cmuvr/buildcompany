<?php
//подключение config.php
    require_once("config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/style.css">
    <title>Главная страница</title>
</head>
<body>
    <div class="wrapper">         
       
       <header class="main_header"> 
           
            <a href="#">
                <img src="imgs/main_header.jpg" alt="">
            </a>
            
            <nav class="main_nav">
                <ol>
<?php
    require_once("config/connect_menu.php");
?>                     
                                        
                </ol>
            </nav> <!--END main_nav-->
        </header> <!--END main_header-->
        
     
        
   
        
        
        <aside class="main_news">
            <header>
               <h1 class="main_news_header">Свежие новости</h1>
            </header>
            <section>
                <article class="news_block">
                    <h1>Наши новые поступления</h1>
                    <p>
                        На  склад поступили новые материалы для утепления домов
                        <a href="news.php#news_1">Читать далее</a>
                    </p>
                </article>

                <article class="news_block">
                    <h1>Теперь доступны новые услуги</h1>
                    <p>
                        Наша компания теперь осуществляет разработку проектов домов разной сложности
                        <a href="news.php#news_2">Читать далее</a>
                    </p>
                </article>

                <article class="news_block">
                    <h1>У нас можно арендовать строительную технику</h1>
                    <p>
                        У нас можно арендовать строительную технику для рытья катлованов и транщей любой сложности. А так  же
                        <a href="news.php#news_3">Читать далее</a>
                    </p>
                </article>
            </section>
        </aside>
            
        
        
        
        
        <div class="main_content">           
            
        