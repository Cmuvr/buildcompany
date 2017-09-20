<?php
	require_once("templates/top.php");
	
	if($_POST){
	
		$p_name=$_POST['name']; 
		$p_pass=$_POST['pass'];
		
		$query="SELECT * FROM users WHERE name='$p_name' AND password='$p_pass' AND blockunblock='unblock'";

		$con=mysqli_query($dbcon, $query);
		if(!$con){
			exit($query);
		}
		
		$user=mysqli_fetch_array($con);
		
		if(isset($user)){
			$_SESSION['id']=$user['id'];
			$query="UPDATE user SET lastvisit=NOW() WHERE id=".$user['id'];
			
			mysqli_query($db_con,$query);
?>
	<script>
		document.location.href='cabinet.php';
	</script>
<?php
			
		}else{
			echo "<div class='bg_warning'>";
			echo "Ошибка входа на сайт";
			echo "</div>";
			
		}
		
	
	}
	
	
	require_once("templates/bottom.php");