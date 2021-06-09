<?php include "inc/header.php"; ?>
<?php include "system/libs/Main.php"; ?>
<?php 



	if (isset($_GET['url'])) {
		
		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		
		$controller = $url[0];
		echo $controller;

	}





 ?>

<?php include "inc/footer.php"; ?>