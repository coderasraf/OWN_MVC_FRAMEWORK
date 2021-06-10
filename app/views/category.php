
<h1>Category List : </h1>
<hr>

<?php 
  
 foreach ($data as $key){

 	echo $key['name'] . '<br>';
 	echo $key['email'] . '<br>';
 	echo $key['country'] . '<br>';
 	echo $key['district'] . '<br>';
 	echo $key['mobile'] . '<br>';
 }

?>
