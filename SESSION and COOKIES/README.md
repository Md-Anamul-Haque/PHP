## এটা মাল্টিপুল পেজ এ ওপেন করতে পারবেন।  

###SESSION  

```php
<?php
$_SESSION["user"] ="Anamul Haque";
$_SESSION["password"]="1234";
echo $_SESSION["user"]."<br/>";
echo $_SESSION["password"];
?>```  


### COOKIES  


```PHP
<?php
if(!isset($_COOKIE["username"])){
	setcookie('username','Anamul',time()+10) or die("Could not set cookies");
	echo "this is your first visit in the page";
}else{echo "you have old visitor";}
?>
```


