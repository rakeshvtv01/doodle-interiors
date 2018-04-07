<?php
$dir = "slider/images";



// Sort in ascending order - this is default





//print_r($a);
$str= file_get_contents("warning.txt");

//print_r (explode("-",$str));
$str_dir=explode("-",$str);



$dir5= "slider/images/$str_dir[0]/";
$dir6= "slider/images/$str_dir[1]/";
$dir7= "slider/images/$str_dir[2]/";

$a = scandir($dir5);
$b = scandir($dir6);
$c = scandir($dir7);


//echo "$dir5==$dir6==$dir7";


//print_r($a);echo "\n";
//print_r($b);echo "\n";
//print_r($c);echo "\n";

?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>DOODLE INTERIORS</title>

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-21.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <script src="sliderengine/initslider-21.js"></script>

    <link rel="stylesheet" type="text/css" href="sliderengine1/amazingslider-22.css">
    <script src="sliderengine1/initslider-22.js"></script>
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine1/jquery.js"></script>
    <script src="sliderengine1/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine1/amazingslider-23.css">
    <script src="sliderengine1/initslider-23.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine1/amazingslider-24.css">
    <script src="sliderengine1/initslider-24.js"></script>

    <link rel="stylesheet" href="slider/assets/css/main.css" />

    <link rel="shortcut icon" href="images/logo plain 2_edited.jpg" />
    <!-- End of head section HTML codes -->

    <script>

        function calVal()
        {
            //alert("hey");
            var n1=document.getElementById("soon").style;
            n1.visibility="visible";

        }

        function calVal1()
        {
            //alert("hey");
            var n1=document.getElementById("soon").style;
            n1.visibility="hidden";

        }
    </script>

</head>
<body>


<!-- End of body section HTML codes --><br><br><br><br><br><br>



<hr style=" background-color: #0cb8b6; height: 1px;" >
<!-- menu item -->

<section id="three" class="wrapper style2">

    <div class="inner">
        <header class="align-center">
            <center>
                <h3 class="animated slideInLeft"  style="" ><span style="color:#0cb8b6;font: 400">W</span>hat <span style="color:#0cb8b6;font: 400">W</span>e <span style="color:#0cb8b6;font: 400">D</span>o </h3>
                <br>
                <br>
                <p style="font-size: 16px; color:#000" class=" animated bounceIn">
                    We are professional interior designers based out of Bangalore, India.

                    Founded in 2016 with an objective of differentiated service approach and comprehesive low-maintenance packages, Doodle Interiors has managed to penetrate the market in Bangalore and surroundig areas.

                    ​

                    We believe that interior desinging is as much as execution as it is about planning. With customer focus and timiliness as a clear objective, we leave no stone unturned to meet our committment.

                    ​

                    We also believe that our job does not end with handover of the project to property owners but instead we believe that it is a start of a shared relationship and responsibility to upkeep efficiently.

                    ​

                    Try us and you will not be disappointed.
                </p>

            </center>


        </header>





    </div>


    </div>
    </div>

</section>

<br>
<!-- Insert to your webpage where you want to display the slider -->

<h3 class="animated slideInLeft" style=""  align="center"><span style="color:#0cb8b6;font-weight: bolder">F</span>EATURED <span style="color:#0cb8b6;font: 400">P</span>ROJECTS</h3>
<hr>
<br>
<br>
<div class="animated fadeIn" id="amazingslider-wrapper-22" style="display:block;position:relative;max-width:800px;margin:0px auto 56px;">
    <h3 class="animated lightSpeedIn" ><?php echo "$str_dir[0]"; ?></h3><br>

    <div id="amazingslider-22" style="display:block;position:relative;margin:0 auto;">
        <ul class="amazingslider-slides" style="display:none;">

            <?php

            foreach($a as $val){


                $len=strlen($val);
                if($len>10)
                    echo "<li><img src='$dir5/$val' />
                </li>";
            }
            ?>


        </ul>

        <div  class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive jQuery Content Slider">Responsive jQuery Content Slider</a></div>
    </div>
</div>
<!-- End of body section HTML codes -->
<hr>
<br><br><br>
<!-- Insert to your webpage where you want to display the slider -->
<div class="animated fadeIn" id="amazingslider-wrapper-23" style="display:block;position:relative;max-width:800px;margin:0px auto 56px;">
    <h3 class="animated lightSpeedIn"><?php echo "$str_dir[1]"; ?></h3><br><br>
    <div id="amazingslider-23" style="display:block;position:relative;margin:0 auto;">
        <ul class="amazingslider-slides" style="display:none;">
            <?php

            foreach($b as $val){


                $len=strlen($val);
                if($len>10)
                    echo "<li><img src='$dir6/$val' />
                </li>";


                echo "$dir/$val== \n";
            }
            ?>

        </ul>

        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="JavaScript Slider">JavaScript Slider</a></div>
    </div>
</div>
<!-- End of body section HTML codes -->
<hr>

<br><br>
<!-- Insert to your webpage where you want to display the slider -->
<div class="animated fadeIn" id="amazingslider-wrapper-24" style="display:block;position:relative;max-width:800px;margin:0px auto 56px;">
    <h3 class="animated lightSpeedIn"><?php echo "$str_dir[2]"; ?></h3><br><br>
    <div id="amazingslider-24" style="display:block;position:relative;margin:0 auto;">
        <ul class="amazingslider-slides" style="display:none;">
            <?php

            foreach($c as $val){


                $len=strlen($val);
                if($len>10)
                    echo "<li><img src='$dir7/$val' />
                </li>";

                echo "$dir6/$val== \n";
            }
            ?>


    </div>
</div>
<!-- End of body section HTML codes -->
<br></br>

</center>




<!-- One -->
<section id="one" class="wrapper style2">
    <h3 align="center"><span style="color:#0cb8b6; font-weight: 500">W</span>E  <span style="color:#0cb8b6; font-weight: 500">A</span>RE <span style="color:#0cb8b6; font-weight: 500">E</span>XPANDING</h3>
    <br>
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/pic02.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>doodle interiors</p>

                            <h2>PUNE</h2>
                        </header>
                        <p> <img src="images/construction.png" width="200" height="200"> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>

                        <footer class="align-center">

                        </footer>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/pic03.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <p>doodle interiors</p>
                            <h2>AMARAVATHI</h2>
                        </header>
                        <p> <img src="images/construction.png" width="200" height="200"> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.</p>
                        <footer class="align-center">

                        </footer>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--
	<section id="three" class="wrapper style2">

				<div class="inner">
					<header class="align-center">
						<center>
							<h3 style="" ><span style="color:#0cb8b6;font: 400">W</span>E <span style="color:#0cb8b6;font: 400">A</span>RE <span style="color:#0cb8b6;font: 400">E</span>XPANDING </h3>
							<br>
							<br>
							<div class="col-md-3 about-w3-grids" style="height:325px; width:250px; background-color:#099;border: 1px solid #fff; opacity: 0.8">
				<br><br>
				<a href="slider/slider1.html"><h3 style=" color: aliceblue" onClick="calVal1()" onMouseOver="calVal1()">BANGALORE</h3></a>
                <br>
                <br>
				<img id="soon" style="visibility:hidden; position: absolute" src="images/construction.png" height="170px" width="170px">
				<a><h3 style=" color: aliceblue" onClick="calVal()" onMouseOver="calVal()" >PUNE</h3></a>
                <br>
                <br>
				<a><h3 style=" color: aliceblue" onClick="calVal()" onMouseOver="calVal()">PUNE</h3></a>

			</div>

						</center>


					</header>
					</section>


	<!-- Footer -->

<!-- Footer -->
<footer id="footer">
    <div class="container" style="color: white">
        <p>#467, 8th A Criss, JR Greenpark Lakefront,

            Anekal Road,

            Bangalore- 562106</p>
        <br>
        <p>Tel: +91 9986 097 448</p>

        <p>Email: doodleinteriors@gmail.com</p>
        <ul class="icons">


            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/doodleinteriors/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="mailto: doodleinteriors@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
    <div class="copyright">
        &copy; doodleinteriors.com . All rights reserved.
    </div>
</footer>


</body>
</html>