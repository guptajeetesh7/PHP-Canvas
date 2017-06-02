<?php
session_start();



if(!isset($_POST['secure'])){
	$_SESSION['secure'] = rand(10000,99999);
}

else{
		if($_SESSION['secure']==$_POST['secure']){
			echo "Correct Match!!";
			$_SESSION['secure'] = rand(10000,99999);
		}

		else
		{
		$_SESSION['secure'] = rand(10000,99999);
		echo "Incorrect , try again";	
		}


}


?>

<img src="generate.php">

<form action="index.php" method="POST">

Type the the value see in captcha : <input type="text" name="secure" size="6"><input type="submit" name="Submit">	

</form>


<?php




?>