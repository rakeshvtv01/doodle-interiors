<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>doodle interiors</title>

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>

    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="shortcut icon" href="../images/logo plain 2_edited.jpg" />



    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>


    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-2.css">
    <script src="sliderengine/initslider-2.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-3.css">
    <script src="sliderengine/initslider-3.js"></script>
    <!-- End of head section HTML codes -->

</head>
<body>



<?php

session_start();



if(!isset($_POST["next"]) && !isset($_POST["back"]) ){




    $_SESSION["count"]=2;


}


if(isset($_POST["next"])){

    $_SESSION["count"]=$_SESSION["count"]+1;
    echo "inside if";



}

if(isset($_POST["back"])){

    $_SESSION["count"]=$_SESSION["count"]-5;
    echo "inside back";



}



$image_dir="images/";
$_SESSION["image_id"]=1;
$space=" ";
//$a = scandir($image_dir,1);
$a = array_diff( scandir("$image_dir",SCANDIR_SORT_NONE), array(".", "..") );


$total_proj=count($a)+1;

echo "== $total_proj";









echo "count==$_SESSION[count] \n";
?>
<div style="background-color: black; height: 50px">
    <br>
    <h4 style="color: white; float: left">doodle interiors</h4>
    <a href="../index.php"><h4 style="color: white; float: right">HOME</h4></a>
</div>
<br>
<h3 align="center">COMPLETED PROJECTS</h3>
<br><br>

<!-- Insert to your webpage where you want to display the slider -->
<div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:800px;margin:0px auto 56px;">
    <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
        <ul class="amazingslider-slides" style="display:none;">
            <?php

            $count=$_SESSION["count"];
            $image_1 = array_diff( scandir("images/$a[$count]",SCANDIR_SORT_NONE), array(".", "..") );

            foreach($image_1 as $val)
            {
                echo "$val  <li><img src='images/$a[$count]/$val' alt=''  title='' />";
            }
            $_SESSION["count"]=$_SESSION["count"]+1;

            echo "count==$_SESSION[count] \n";
            ?>
        </ul>

        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Slider jQuery">Slider jQuery</a></div>
    </div>
</div>
<!-- End of body section HTML codes --><br><br>

<!-- Insert to your webpage where you want to display the slider -->
<div id="amazingslider-wrapper-2" style="display:block;position:relative;max-width:800px;margin:0px auto 56px;">
    <div id="amazingslider-2" style="display:block;position:relative;margin:0 auto;">
        <ul class="amazingslider-slides" style="display:none;">


            <?php

            $count=$_SESSION["count"];
            $image_1 = array_diff( scandir("images/$a[$count]",SCANDIR_SORT_NONE), array(".", "..") );

            foreach($image_1 as $val)
            {
                echo "$val  <li><img src='images/$a[$count]/$val' alt=''  title='' />";
            }
            $_SESSION["count"]=$_SESSION["count"]+1;

            echo "count==$_SESSION[count] \n";
            ?>


        </ul>

        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="jQuery Image Slider">jQuery Image Slider</a></div>
    </div>
</div>
<br><br><hr>

<!-- Insert to your webpage where you want to display the slider -->
<div id="amazingslider-wrapper-3" style="display:block;position:relative;max-width:800px;margin:0px auto 56px;">
    <div id="amazingslider-3" style="display:block;position:relative;margin:0 auto;">
        <ul class="amazingslider-slides" style="display:none;">
            <?php
            $count=$_SESSION["count"];

            $image_1 = array_diff( scandir("images/$a[$count]",SCANDIR_SORT_NONE), array(".", "..") );

            foreach($image_1 as $val)
            {
                echo "$val  <li><img src='images/$a[$count]/$val' alt=''  title='' />";
            }
           // $_SESSION["count"]=$_SESSION["count"]+1;

            echo "count==$_SESSION[count] \n";
            ?>
        </ul>

        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive Slider jQuery">Responsive Slider jQuery</a></div>
    </div>
</div>

<?php
echo "count==$_SESSION[count] \n";
?>
?>
<br>
<br>
<center>
    <form action=""method="post">
    <ul class="actions">
        <?php

        if($_SESSION['count']<$total_proj )
        {
          echo " <li><input type=\"submit\" value=\"NEXT\" name=\"next\"></li>";
        }

        if($_SESSION['count']>5 )
        {
            echo " <li><input type=\"submit\" value=\"BACK\" name=\"back\"></li>";
        }
        ?>



    </ul>
    </form>
</center>

<!-- Footer -->
<div style="background-color: black; height: 250px; color: white"><br><br>	<center><p>#467, 8th A Criss, JR Greenpark Lakefront,

    Anekal Road,

    Bangalore- 562106</p>
    <br>
    <p>Tel: +91 9986 097 448</p>

    <p>Email: doodleinteriors@gmail.com</p></div>
</center>





</body>
</html>