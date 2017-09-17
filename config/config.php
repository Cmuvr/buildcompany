<?php
    
    $dblocation='localhost';
    $dbuser='root';
    $dbpass='';
    $dbname='buildcompany';
    
    
    $dbcon=mysqli_connect($dblocation, $dbuser, $dbpass, $dbname);

    if(!$dbcon) {
        exit('error connect!');
    }

    @mysqli_query($dbcon, "SET Names 'utf8'");