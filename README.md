# Learning<br/> in -> PHP <br/>With Anamul Haque<br/>  


<hr/>

## All topics list short cut in below.  
<ol>
<li> <a href="https://github.com/Md-Anamul-Haque/PHP/tree/main/SERVER"> $_SERVER </a> </li>
<li><a href="https://github.com/Md-Anamul-Haque/PHP/tree/main/date">Data/time</li>



</ol> 


## Create a file in this code  


```php


<?php
$file = fopen("new.txt","w");

$one ="1.hi i am first line \n";
 fwrite($file,$one);
 
 $two ="2.hi i am secound line \n";
 fwrite($file,$two);
 

fclose($file);
$show = fopen("new.txt","r");
echo fread($show, filesize("new.txt"));
fclose($show);





?>```



