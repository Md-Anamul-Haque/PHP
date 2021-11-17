## এটা মাল্টিপুল পেজ এ ওপেন করতে পারবেন <br/>


<h3>SESSION</h3><br/>

```php
<?php
$_SESSION["user"] ="Anamul Haque";
$_SESSION["password"]="1234";
echo $_SESSION["user"]."<br/>";
echo $_SESSION["password"];
?>

```



### COOKIES <br/>



```PHP
<?php
if(!isset($_COOKIE["username"])){
	setcookie('username','Anamul',time()+10) or die("Could not set cookies");
	echo "this is your first visit in the page";
}else{echo "you have old visitor";}
?>

```

### if you want multiple page with used  

```php [main file]  
```
