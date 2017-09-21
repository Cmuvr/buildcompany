<?php
   // $query="SELECT name FROM maintexts WHERE showhide = 'show' ORDER BY id";
?>  
    
<?php   
    $query="SELECT DISTINCT name, url FROM maintexts";
    $result = mysqli_query($dbcon, $query);

    if(!$result){
        exit("");
    }

    

    while($tbl_arr=mysqli_fetch_array($result))
        {
?>
                <li>
                    <a href="index.php?url=<?php echo $tbl_arr['url']?>">
                        <?php echo $tbl_arr['name']?>
                    </a>                    
                </li>
<?php 
        }
?>
                <li>
                    <a href="articles.php">Статьи пользователей</a>
                </li>