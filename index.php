<?php include "inc/header.php"; ?>
<?php include "system/libs/Main.php"; ?>
<?php include "system/libs/DController.php"; ?>
<?php 

		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		
		include "app/controllers/$url[0].php";
		$ctlr   = new $url[0]();
		$method = $url[1];
		$param  = $url[2];
		echo "<br>";
		$ctlr->$method($param);


 ?>

<?php include "inc/footer.php"; ?>