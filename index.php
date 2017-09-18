<?php
//подключение top.php
    require_once("templates/top.php");  
    
//если сцществует GET параметр с переменной url, то в переменную заносим ее значение иначе index
    if(isset($_GET['url'])) {  
        $file=$_GET['url'];
    }
    else {
        $file='index';
    }

//в переменную заносим строкуу с текстом запроса
    $query="SELECT * FROM maintexts WHERE url='$file'";

//выполнение подключения к базе по запросу заносим в переменную
    $result=mysqli_query($dbcon, $query);

//если запрос НЕ выполнен, то выходим и выдаем текст ошибки    
    if(!$result){
        exit("не проходит url");
    }


    while($tbl_arr=mysqli_fetch_array($result))
    {

        if($tbl_arr['url']=="our_work"){
 ?>     
       
               
        <article class="mcb_our_work">
            <h1 class="mcb_our_work_head" >
                <?php echo $tbl_arr['title']; /* заголовок статьи */ ?> 
            </h1>

            <div class="mcb_our_work_img">
                <img src="<?php echo $tbl_arr['img']  /* картинка статьи*/ ?>" alt="">  
            </div>

            <p class="mcb_our_work_article">
                <?php echo $tbl_arr['body']  /* текст статьи */  ?>
            </p>
        </article>    
                
                    
                            
 <?php  
        }
        else
        {
?> 


        <article class="main_content_block">      
            <h1 class="mcb_head">
               <?php echo $tbl_arr['title']; /* заголовок статьи */ ?> 
            </h1>

            <div class="mcb_img">
                <img src="<?php echo $tbl_arr['img']  /* картинка статьи*/ ?>" alt="img1">  
            </div>                      

            <p class="mcb_article">
                <?php echo $tbl_arr['body']  /* текст статьи */  ?>
            </p>  
        </article><!--END main_content_block-->


<?php  
        }
    }
?>





            
<?php
    //подключение bottom.php
    require_once("templates/bottom.php");
?>