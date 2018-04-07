
<?php
$dir = "slider/images";
$a = scandir($dir);


//echo "success";
if(isset($_POST["save"])){
	
	echo "success";
	$pass=$_POST["pass"];
	$pic1=$_POST["pic1"];
	$pic2=$_POST["pic2"];
	$pic3=$_POST["pic3"];
	
	$del="-";
	$msg=$pic1.$del.$pic2.$del.$pic3;
	if($pass=="doodle"){

file_put_contents("warning.txt", "");
$file = fopen("warning.txt","w");
 fwrite($file,$msg);
fclose($file);
		$flag=0;
		
	}
	else{
		$flag=1;
	}
	
	

	
	
}

?>
<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>ADMIN PAGE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>

				</ul>
			</nav>

		<!-- One -->
			

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p></p>
								<h2></h2>
							</header>
							<form method="post" action="">
							<div class="6u$ 12u$(xsmall)">
											<input type="password" name="pass" id="pass" value="" placeholder="PASSWORD" />
										</div>
							<br>
							<div class="6u$ 12u$(xsmall)">
											<select name="pic1">
								            <option>SELECT IMAGE GROUP 1</option>
								               <?php
												foreach($a as $val)
												echo " <option value='$val'>$val</option>";
												
												?>
									
								           </select>
										</div>
							<br>
							<div class="6u$ 12u$(xsmall)">
											<select name="pic2">
								            <option>SELECT IMAGE GROUP 1</option>
								               <?php
												foreach($a as $val)
												echo " <option value='$val'>$val</option>";
												
												?>
									
								           </select>
										</div>
							<br>
							<div class="6u$ 12u$(xsmall)">
											<select name="pic3">
								            <option>SELECT IMAGE GROUP 1</option>
								               <?php
												foreach($a as $val)
												echo " <option value='$val'>$val</option>";
												
												?>
									
								           </select>
										</div>
							<br>
										<!-- Break !-->
								<?php
								if(isset($flag))
								{
									if($flag==0)
										echo "<H2>SAVED SUCCESSFULLY</H2>";
									else
										echo "<h2>TRY AGAIN</h2>";
								}
								?>
								<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="SAVE" name="save" /></li>
												<li><input type="reset" value="Reset" class="alt" /></li>
											</ul>
										</div>
								</form>
							
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>