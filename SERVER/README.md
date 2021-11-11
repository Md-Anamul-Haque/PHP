

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


