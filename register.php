<?php
//подключение top.php
    require_once("templates/top.php");     
	if($_POST){
	
		if($_POST['name']){
			$p_name=$_POST['name'];
		}else{
			$p_name='';
		}
		
		if($_POST['email']){
			$p_email=$_POST['email'];
		}else{
			$p_email='';
		}
		
		if($_POST['pass']){
			$p_pass=$_POST['pass'];
		}else{
			$p_pass='';
		}
		
		if($_POST['pass_again']){
			$p_pass_again=$_POST['pass_again'];
		}else{
			$p_pass_again='';
		}
		
		$error =[];
		
		
		
		if(!$p_name){
			$error[]='Поле name должно быть заполнено';
		}
		
		if(!$p_email){
			$error[]='Поле email должно быть заполнено';
		}
		
		if(!$p_pass){
			$error[]='Поле pass должно быть заполнено';
		}
		
		if($p_pass != $p_pass_again){
			$error[]='Пароли не совпадают!';
		}
		
		
		
		$query="SELECT * FROM users WHERE email='$p_email'";
		
		$usr=mysqli_query($dbcon, $query); //выполнение запроса
		
		if(!$usr){ //если ошибка в запросе 
			exit('error!!!!');
		}
		
		$arr_user=mysqli_fetch_array($usr); //формируем ассоциативный массив
			
		if($arr_user[0]){ //если пользователь сюда добавился при выборке, то выводим ошибку
			$error[]="Такой email уже есть в базе!";
		}
		
		
		
		
		if($error[0]){
			foreach($error as $one){ //вывод ошибок!
				echo "<p style='color:red'>";
				echo $one;
				echo "</p>";		
			} 
		} else{
			$query="INSERT INTO users VALUES(
				null, 
				'$p_name',
				'$p_email',
				'$p_pass',
				NOW(),
				NOW(),
				'unblock'		
			)";
			
			$reg=mysqli_query($dbcon, $query);
			
			if(!$reg){
				exit($query);
			}
		
?>
		<script>
			document.location.href="index.php";		
		</script>
		
<?php
		}
	}
?>




<form action="register.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword2">Password</label>
    <input name="pass_again" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div> 
  <button type="submit" class="btn btn-default">Вход</button>
</form>



            
<?php
    //подключение bottom.php
    require_once("templates/bottom.php");
?>