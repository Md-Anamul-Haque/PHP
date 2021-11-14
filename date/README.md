## Date same details  


```html
<meta name="viewport" content="width=device-width, initial-scale=1" />  
```


```php  


<?php 
echo "Today is".date("d/m/Y")."<br/>";
echo "Today is " .date("l")."<br/>";
// নির্দিষ্ট রাষ্ট্রের সময় নিরদারিত করার জন্যে নিচের লাইনটি।
date_default_timezone_set("Asia/Dhaka");
echo "Time is " .date("h:i:s");
?>```
