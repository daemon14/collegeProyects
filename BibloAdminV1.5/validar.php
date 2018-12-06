
<?php


	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];



	$sql2=mysql_query("SELECT * FROM usuario WHERE email='$username'");
	if($f2=mysql_fetch_array($sql2)){
		if($pass==$f2['pasadmin']){
			echo '<script>alert("Bienvenido al Sistema")</script> ';
		
			echo "<script>location.href='index2.html'</script>";
		
		}
	}




	$sql=mysql_query("SELECT * FROM usuario WHERE email='$username'");
	if($f=mysql_fetch_array($sql)){
		if($pass==$f['Password']){
			header("Location: index2.html");
		}else{
			echo '<script>alert("Contraseña Incorrecta")</script> ';
		
			echo "<script>location.href='index.html'</script>";
		}
	}else{
		
		echo '<script>alert("Este Usuario no existe en la base de datos, contactar al proveedor si el problema persiste.")</script> ';
		
		echo "<script>location.href='index.html'</script>";	

	}



		


?>