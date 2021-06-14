<h3>Add Category</h3>
<hr>
<?php 
	if (isset($msg)) {
		echo "<span style='color:green;font-weight:bold;margin-bottom:20px;display:block'>$msg</span>";
	}
 ?>
<form method="POST" action="http://localhost/OWN_MVC_FRAMEWORK/index.php?url=Category/insertCat">
	<label for="">Name :</label>
	<input type="text" placeholder="Enter your name" required="" name="name"> <br>
	<label for="">Email :</label>
	<input type="text" placeholder="Enter your Email" required="" name="email"><br>
	<input type="submit" value="Submit" >
</form>