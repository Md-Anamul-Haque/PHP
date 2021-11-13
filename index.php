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
