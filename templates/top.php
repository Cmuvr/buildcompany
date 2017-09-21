<?php
//подключение config.php
	session_start();
    require_once("config/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/style.css">
    <title>Главная страница</title>
</head>
<body>
    <div class="wrapper"> 




	


	
<?php
	if($_SESSION['id']){
		
?>




	<a href='logout.php'>Выход</a>
	
	
	
	
	
<?php		
	} else {
?> 
	<form action="login.php" method="post" class="form-inline">
		<div class="form-group">
			<label class="sr-only" for="exampleInputEmail3">Имя</label>
			<input name="name" type="text" class="form-control" id="exampleInputEmail3" placeholder="name" >
		</div>
		<div class="form-group">
			<label class="sr-only" for="exampleInputPassword3">Пароль</label>
			<input name="pass" type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox"> Remember me
			</label>
		</div>
	<button type="submit" class="btn btn-default">Войти</button>
	</form>
<?php
	}
?>
	   
	   
	   
	   
	   
	   
	   
	   
       <header class="main_header"> 
           
            <a href="#">
                <img src="media/imgs/main_header.jpg" alt="">
            </a>
            
            <nav class="main_nav">
                <ol>
                
<?php
    require_once("config/connect_menu.php");
    if($_SESSION['id']){
?>
				<li>
                    <a href="cabinet.php">Кабинет</a>                    
                </li>
<?php
    } else  {
?> 
				<li>
                    <a href="register.php">Регистрация</a>                    
                </li>
<?php
            }  
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
            
        