## A multiple selector checkbox full code  

```php

<?php
if(isset($_POST["language"])){
	$language = $_POST["language"];
	foreach($language as $lang =>$value){
		echo $value.", ";
	}


}
	$gen = $_POST
?>
<p id="pp" ></p>
<form action="" method="post" name="myform" id="myform" onsubmit="myf(); return false;" >
	<table>
		<tr>
			<th>Username</th>		
			<td>
			<input type="checkbox" name="language[]" value="A" />A
			<input type="checkbox" name="language[]" value="B" />B
			<input type="checkbox" name="language[]" value="C" />C
			<input type="checkbox" name="language[]" value="D" />D
			<input type="checkbox" name="language[]" value="E" />E
			<input type="checkbox" name="language[]" value="F" />F
			<input type="checkbox" name="language[]" value="G" />G
			</td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" value="Submit"/></td>
		</tr>
	</table>
</form>

```
