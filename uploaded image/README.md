## update images tricks in below  


```php

<?php
	$thisfile = $_FILES["images"]["name"];
	$thistmpfile= $_FILES["images"]["tmp_name"];
	move_uploaded_file($thistmpfile,"images/".$thisfile);//save this folder in images folder in
	echo "successful image upload";
?>
<form method="post" action="" enctype="multipart/form-data"  >
	<input type="file" name="images" >
	<input type="submit" name="Submit" value="Submit"  >
	
</form>

```


## this work in single line below steps


```php
move_uploaded_file($_FILES["images"]["name"],"images/".$_FILES["images"]["tmo_name"]);
```
