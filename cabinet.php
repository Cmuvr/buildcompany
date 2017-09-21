<?php
    require_once("templates/top.php"); 
	
	if($_SESSION['id']){		// когда сессия открыта
		require_once("templates/session_user.php");  //подключение запроса из базы данных информации о пользователе
		
		
		// ОБРАБОТКА ЗАГРУЗКИ КАРТИНКИ НА СЕРВЕР
		
		if($_POST){
			$p_name=$_POST['name']; //читаем название статьи
			$error=[]; // массив ошибок
			
         
            
			if(is_uploaded_file($_FILES['picture']['tmp_name'])){ //Определяем, был ли файл загружен при помощи HTTP POST
			
				$dir=$_SERVER['DOCUMENT_ROOT'].'/media/uploads/'; //путь к папке где будет хранится загруженная пользователем картинка
                
				if(move_uploaded_file($_FILES['picture']['tmp_name'], $dir.$_FILES['picture']['name'])){ //Проверяет выполннение перемещения загруженного файла в новое место, где параметрами являются путь к файлу где он хранился сразу после загрузки (он расчеблен попиксельно) и вторым параметром является путь к файлу куда его мы перемещаем для длительного храниения. Оно и выполняется если можно переместить
					$pic=$_FILES['picture']['name']; //тогда создаем переменную где храним имя картинки которую получаем через форму 
                    
				}else{
					echo "Ошибка загрузки файла";
				};
				
				$_query="INSERT INTO pictures VALUES(
						NULL,
						'$p_name',
						'$p_body'
						'$pic',
						NOW(),
						".$_SERVER['id']."
					)";
					
				if(!mysqli_query($dbcon,$query)){
					exit($query);
				}
?>
<!--
	<script>
		document.location.href='cabinet.php';
	</script>
-->

<?php
			}else {
				echo "Ошибка загрузки файла";
			}
	
	} else{
	
?>








	<form action="cabinet.php" method="post" class="form-horizontal" enctype="multipart/form-data">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Имя</label>
			<div class="col-sm-10">
				<input name='name' type="text" class="form-control" id="inputEmail3" placeholder="">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Текст статьи</label>
			<div class="col-sm-10">
				<textarea name="text" class="form-control" rows="3"></textarea>
			</div>
		</div>
		
	  
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Загрузить картинку</label>
			<input name="picture" type="file" id="exampleInputFile">			
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-default">Добавить Статью</button>
		</div>
	</form>
	
	
	
	
	
	
	
<?php	
	
	
	
	}
	
	
		




	} else {
?>
	<script>
		document.location.href='index.php';
	</script>
	
	
	
	
	
	
	
<?php
	}
    require_once("templates/bottom.php");
?>