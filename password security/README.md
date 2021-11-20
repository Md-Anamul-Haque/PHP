## password sender  

```html
	<form action="View.php" method="post"  >
		<input type="text" name="username"/>
		<input type="email" name="email" />
		<input type="password" name="password"/>
		<br><br>
		<input type="submit"/>
		<input type="reset"/>
	</form>

```  

## password receiver  

```php
//name of file-> View.php  
<?
	$usernamr =$_POST["username"];
	$email    =$_POST["email"];
	$pass	  =$_POST["password"];
	
$hf="$2y$20$";
$st="abuzbdjehsnxjxhxh";
$CC=$st.$hf;
echo($pass."<br/>");
echo crypt($pass,$CC);
?>

```
