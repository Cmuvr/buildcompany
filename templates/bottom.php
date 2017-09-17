            </article>
</div>
        
        
        
        
        
        
        <footer class="main_footer">
            <nav class="main_nav_footer">
                <ol>
<?php
    $query="SELECT * FROM maintexts WHERE showhide = 'show' ORDER BY id";

    $result = mysqli_query($dbcon, $query);

    if(!$result){
        exit($query);
    }
    while($tbl_arr=mysqli_fetch_array($result)){
    ?>
                <li>
                    <a href="index.php?url=<?php echo $tbl_arr['url']?>"><?php echo $tbl_arr['name']?></a>                    
                </li>
        <?php
    }
?> 
                    <li>
                        <a href="#">Новости</a>
                    </li>
                    <li>
                        <a href="#">Наша продукция</a>                    
                    </li>
                    
                </ol>
            </nav>
        </footer>
        
        
        
        
        
        
    </div>
</body>
</html>