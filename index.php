<!-- Start index.php -->
	<?php 
		require ("scripts/connect.php");
		$usr = $_GET['id'];		
		
		if ($usr == "tagteam")
			{
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>INVOTICUS | Ask, Decide, Repeat.</title>
			<LINK REL="StyleSheet" HREF="global.css" TYPE="text/css" MEDIA=screen>
		</head>
		<body>
			<h1><div id="h-pri">[LOGO] <a href="signup.php?id=tagteam">Sign up!</a>| Login | About <input name="Search" type="text" size="10" /><input name="Search" type="button" /></div></h1><br />
			<h2><div id="h-sec"> Everything   Politics   Sports   Style   Religion   News   Technology   Entertainment</div>
			</h2><br /><br />
			<h3>[NEWS GOES HERE]</h3><br /><h4>[DEFAULT STREAM CATEGORY GOES HERE]</h4><h5>Order: [<a href="#">Votes</a>] [Expiring] [Recent] [Comments]</h5>
				<br />
		<div id="h-ter"><h6>[STREAM GOES HERE]</h6></div>
				<br />
			<h7>INVOTICUS Copyright <?php echo date(Y); ?>  home v 0.2</h7>
		</body> 
	</html>
	<?php }
	else{
		echo "too bad.";
		}
		?>