<h3>Update Category</h3>
<hr>

<!--  -->
<form method="POST" action="http://localhost/OWN_MVC_FRAMEWORK/index.php?url=Category/updateCategory">
	<?php 
		if (isset($getdata)) {
			foreach($getdata as $value){ ?>
	<label for="">Name :</label>
	<input value="<?php echo $value['name']; ?>" type="text" placeholder="Enter your name" required="" name="name"> <br>
	<label for="">Email :</label>
	<input value="<?php echo $value['email']; ?>" type="text" placeholder="Enter your Email" required="" name="email"><br>
<?php } } ?>
	<input type="submit" value="Submit" >
</form>