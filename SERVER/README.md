

## $_SERVER style start hear  


```css

<style type="text/css">
*{text-align:center; background:red; color:#FFF;}

</style> 
```    



## $_SERVER start hear

  
```php

<?php
$x= 5;
function mytest(){
echo $_SERVER['PHP_SELF'];<!--this file information-->
echo "<br/>";
echo "<hr/>";
echo $_SERVER['SERVER_NAME'];<!--host name-->
echo "<br/>";
echo "<hr/>";
echo $_SERVER['SCRIPT_NAME'];<!--this all file information-->
echo "<br/>";
echo "<hr/>";
echo $_SERVER['HTTP_USER_AGENT'];<!-- browser information-->
echo "<br/>";
echo "<hr/>";
echo $_SERVER['SERVER_ADDR'];
echo "<br/>";
echo "<hr/>";
echo $_SERVER['SERVER_ADDR'];
}
mytest();
?> 

```

  
## form to data get request post etc follow down
  

```html
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get" >
	<label for="username"> Username
		<input type="text" name="username" >
	</label>
		<input type="submit" value="Submit" >
</form>
```

```php
<?php
	echo "REQUEST:".$_REQUEST['username']."<br/>";
	echo "GET:".$_GET['username']."<br/>";  // if (method="get"); tahole ata kaj korbe
	echo "POST:". $_POST['username']; // if (method="post"); tahole ata kaj korbe
	
?>
```

  

## Advance. 



```html  



<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php
	$Name= $Email= $website= $Comments= $Gender="";
	$errorname= $erroremail= $errorgender="";
if($_SERVER['REQUEST_METHOD']=='POST'){
	if(empty($_POST['name'])){
		$errorname= "Required field";
	}else{
		$Name =ok($_REQUEST['name']);
	}
	if(empty($_POST['email'])){
		$erroremail="Required field";
	} else {
	$Email    =ok($_REQUEST['email']);
	}
	
	$website  =ok($_REQUEST['website']);
	$Comments =ok($_REQUEST['comments']);
	if(empty($_POST['gender'])){
	$errorgender="Required field";
	} else {
	$Gender   =ok($_REQUEST['gender']);
	}
	echo "Name: ".$Name."<br/>"."E-mail: ".$Email."<br/>"."Website: ".$website."<br/>"."Comment: ".$Comments."<br/>"."Gender: ".$Gender;
}
	function ok($aaa){
	$aaa= trim($aaa);
	$aaa= stripcslashes($aaa);
	$aaa= htmlspecialchars($aaa);
	return $aaa;
	}
	?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  >
<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"  /><?php echo $errorname ?></td>
	</tr>
	<tr>
		<td>E-mail </td>
		<td><input type="email" name="email"  /><?php echo $erroremail ?></td>
	</tr>
	<tr>
		<td>website </td>
		<td><input type="text" name="website"  /></td>
	</tr>
	<tr>
		<td>Comments </td>
		<td><textarea name="comments" rows="5" cols="40"  ></textarea></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
		<input type="radio" name="gender" value="male" />male
		<input type="radio" name="gender" value="female" />female
		<?php echo $errorgender ?></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Submit"  /></td>
	</tr>
</table>
</form>


```

