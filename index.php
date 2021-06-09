<?php include "inc/header.php"; ?>
<?php include "system/libs/Main.php"; ?>
<?php include "system/libs/DController.php"; ?>
<?php 



	if (isset($_GET['url'])) {

		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		
		include "app/controllers/$url[0].php";
		$asraf = new $url[0]();

	}





 ?>

<?php include "inc/footer.php"; ?>