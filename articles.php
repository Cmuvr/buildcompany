<?php
//подключение top.php
    require_once("templates/top.php");

//ВЫВОД СТАТЕЙ ПОЛЬЗОВАТЕЛЕЙ

    $query="SELECT * FROM articles"; //запрос на все поля таблицы статей
    
    $result=mysqli_query($dbcon, $query); //выполнение запроса в БД
        
    if(!$result){ //если запрос не выполнен
        exit("Нет контакта с БД!"); //выход и ошибка
    }

    //ИНАЧЕ
    
    
    //циклом выводятся статьи пользователей по порядку
    while($tbl_arr=mysqli_fetch_array($result)){
?>    
    
    
    
        <article class="user_article">
            <!--    картинка статьи-->
            <div class="user_img_article">     
                <img src="media/uploads/<?php echo $tbl_arr['picture']; ?>" alt="">
            </div>  
            <!--    заголовок статьи    -->
            <h1 class="user_article_title">
                <?php echo $tbl_arr['name']; ?>
            </h1> 
            <!--     текст статьи     -->
            <p class="user_content_article">
                <?php echo $tbl_arr['body']; ?>
            </p> 
            <!--      автор статьи    -->
            <span class="user_name">
    
  
    
<?php
    //запрос имени автора статьи по id 
    $query="SELECT name FROM users WHERE id=".$tbl_arr['user_id'];    
        
    $userdb=mysqli_query($dbcon, $query);//выполнение запроса в БД
    
    
    if(!$result){
         exit("Ошибка запроса имени автора статьи");
    }
                                                
    $user_arr=mysqli_fetch_array($userdb);
  
    echo $user_arr['name'];
?>
   
   
   
            </span></br>       
            <span class="user_date_article">
                <?php echo $tbl_arr['putdate']; ?>
            </span>
        </article>
                           
                                                                 
                            
<?php                                           
    }

    //подключение bottom.php
    require_once("templates/bottom.php");
?>