<?php

$dsn='mysql:host=localhost;dbname=ms';
$user='ms';
$pass='111';

try{

$con = new PDO($dsn,$user,$pass);

$con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//echo "<h1>Connected Al hamed lil Alah</h1>";
}

catch(PDOExeption $e)
{
  echo "faild".$e->getmessage();
}

// inerting into table order in database

?>




<!DOCTYPE html>
<!--
Template Name: Bronea
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Order Online</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="height:400px; background-image:url('../images/demo/backgrounds/MIGLIOR.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_right">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../index.html">Miglior Sapore</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.html">Home</a></li>
<!--
          <li class="active"><a class="drop" href="#">Pages</a>
            <ul>
              <li><a href="gallery.html">Menu</a></li>
              <li class="active"><a href="full-width.html">Full Width</a></li>
              <li><a href="sidebar-left.html">Sidebar Left</a></li>
              <li><a href="sidebar-right.html">Sidebar Right</a></li>
              <li><a href="basic-grid.html">Basic Grid</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Location</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
-->
        </ul>
      </nav>
      <!-- ################################################################################################ -->

        
    </header>


  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <section id="breadcrumb" class="hoc clear">      
      <!-- ################################################################################################ -->
      <h6 class="heading"><br><br></h6>

    </section>
  </div>
  <!-- ################################################################################################ -->

</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 

      <!-- ################################################################################################ -->
      
      <div id="comments">
        
        <h2>Sarch for order by Customer Name :</h2>
<!--
        <div class="one_third" style="position: relative;">
            <label for="op1" >Customer Name</label>
            <input type="radio" name="op" id="op1"  value="Customer Name" style="position: absolute; left:-13px; top:4px;">
            <label for="op2" >Customer Number</label>
             <input type="radio" name="op" id="op2"  value="Customer Number"  style="position: absolute;left:-13px; top:31px;">
             <label for="op3" >Order id</label>
            <input type="radio" name="op" id="op3"  value="Order id" style="position: absolute; left:-13px; top:59px;">
          </div>
-->    
          <div class="one_third first">
           <!-- <label for="Sarch">Sarch <span>*</span></label>-->
            <input type="sarch" name="sarch" id="sarch" value="" placeholder="Sarch" size="22" onkeyup="showorder(this.value) " required style="border-color: red">
          </div>

          <div id="result">
            
          </div>
          <!--
          <div class="one_third">
            <label for="email">EMail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
           -->
      

        
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="heading">Posuere lectus enim quis leo</h6>
      <p class="btmspace-30">Suspendisse potenti ut tempus consequat accumsan donec.</p>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Id interdum nisl in</h6>
      <ul class="nospace linklist">
        <li><a href="#">Fermentum massa eget</a></li>
        <li><a href="#">Ipsum ut euismod arcu</a></li>
        <li><a href="#">In volutpat mattis nam</a></li>
        <li><a href="#">Diam leo placerat</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">At nulla ultrices</h6>
      <ul class="nospace linklist">
        <li><a href="#">Id diam in ultrices</a></li>
        <li><a href="#">Molestie neque nulla</a></li>
        <li><a href="#">Massa molestie efficitur</a></li>
        <li><a href="#">Eu tristique magna</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script >
  function showorder(str)
  {
    if(str === "")
      {document.getElementById("result").innerHTML="";
      return;
      }

    else{
           var xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function()
           {
               if(xmlhttp.readyState == 4 && xmlhttp.status==200)
               {
                document.getElementById("result").innerHTML=xmlhttp.responseText;
               }

           };

           xmlhttp.open("GET","sarch.php?s="+str,true);
           xmlhttp.send();

    }

  }

</script>>
</body>
</html>