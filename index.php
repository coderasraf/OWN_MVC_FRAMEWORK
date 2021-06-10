<?php include "inc/header.php"; ?>
<?php include "system/libs/Main.php"; ?>
<?php include "system/libs/DController.php"; ?>
<?php include "system/libs/Load.php"; ?>
<?php 
	// Getting controller, method, param from url
	$url = isset ($_GET['url']) ? $_GET['url'] : NULL;
	if ($url != NULL) {
		$url = rtrim($url, '/');
		$url = explode('/', filter_var($url,FILTER_SANITIZE_URL));
	}else{
		unset($url);
	}

	// controllr, method, and param define
	if (isset($url[0])){
		include "app/controllers/$url[0].php";
		$ctlr   = new $url[0]();
		if (isset($url[2]) && isset($url[1])){
			$method = $url[1];
			$param  = $url[2];
			$ctlr->$method($param);
		}
		else{
			if (isset($method)) {
				$ctlr->$method();
			}
		}
	}else{
		include "app/controllers/Index.php";
		$welcome = new Index();
		$welcome->category();
	}







// including footer file
include "inc/footer.php";