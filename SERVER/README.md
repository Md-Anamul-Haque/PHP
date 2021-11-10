

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
echo $_SERVER['PHP_SELF'];<!--file information-->
echo "<br/>";
echo "<hr/>";
echo $_SERVER['SERVER_NAME'];<!--host name-->
echo "<br/>";
echo "<hr/>";
echo $_SERVER['SCRIPT_NAME'];<!--file information-->
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
?> ```



