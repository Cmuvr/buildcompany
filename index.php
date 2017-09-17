<?php
    require_once("templates/top.php");
    
    if(isset($_GET['url'])) {
        $file=$_GET['url'];
    }
    else {
        $file='index';
    }

    $query="SELECT * FROM maintexts WHERE url='$file'";
    $result=mysqli_query($dbcon, $query);
    
    if(!$result){
        exit($query);
    }
    
    $tbl_arr=mysqli_fetch_array($result);
    







?>
               <h1 class="mcb_head">
                    <?php echo $tbl_arr['name'];?>
                </h1>
                           
                <?php echo $tbl_arr['body'];

    require_once("templates/bottom.php");
?>