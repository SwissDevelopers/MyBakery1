<?php 
include ("./header.inc.php");


 ?>


<style>
	body {
    background-color: #996633;
	font-family: 'lucida grande', tahoma, verdana, arian, sans-serif;
}
	#containerr{
	text-align:left;
	width:700px;
	margin:0 auto;
	padding:1px;
	color:000000 ;
	}
	#container{
	width:1080px;
	margin:0 auto;
	padding:2px;
	color:000000 ;
	font-size:25px;
	font-family: 'lucida grande', tahoma, verdana, arian, sans-serif;
	}
	#navigation{
	height:80px;
	border:3px solid ;
	margin-top:5px;
	
	}
	#heding{
	
	font-size:50px;
	}
	ul#navmenu{
	list-style-type:none;
	font-size:20px;
	}
	ul#navmenu li{
	width:160px;
	text-align:center;
	float:left;
	margin-right:3x;
	}
	ul#navmenu a{
	text-decoration:none;
	display:block;
	width: 180;
	height:25px;
	background-color:#fff;
	border:1px solid #ccc;
	border-radius:5px;
	}
	#banner(
	height:295px;
	background-image:url(C:\xampp\htdocs\xamppnow.jpg);
	background-size:cover;
	)
</style>
<title>orderformpage</title>
	</head>
<body style="background-color:"996633;>
<div id="container">
<div>
 <img src="http://rbakery.ca/images/downtown-logo.png">  

</div>
<div id="navigation">
<ul id="navmenu">
<li><a href="home.html">Home</a></li>
<li><a href="order.html">Order</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="menu.html">Menu</a></li>
<li><a href="contact.html">Contact</a></li>

</ul>
<divid="banner"></div>
</div>
<?php

session_start();


	$conn = mysqli_connect("localhost","root","","order")
	  or die("Unable to connect");
	

	if (isset($_POST['submitted'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$usrtel = $_POST['usrtel'];
	$email = $_POST['email'];
	$dateorder = $_POST['dateorder'];
	$cake = $_POST['cake'];
	$KG = $_POST['KG'];
	$Information = $_POST['Information'];

	//Insert query
	$query =mysqli_query($conn,"INSERT INTO `orders`(`first_name`,`last_name`,`telephoneNo`,`email`,`date_order`,`cake_type`,`cake_size`,`cake_info`) VALUES ('$firstname','$lastname','$usrtel','$email','$dateorder','$cake','$KG','$Information')");
	
	}
	

    mysqli_close($conn);
?>
<form method="POST" action="orderpage.php">
	<input type="hidden" name="submitted" value="true" />
<fieldset>
<h1><u><u>Personal Details</u></u></h1>



First name:<br>
<input type="text" name="firstname" value="">
<br>
Last name:<br>
<input type="text" name="lastname" value="">
<br><br>




<h3><u>Telephone Number</u></h3>
<p> <strong>Input a number that they will use to contact you. </strong> This section is very important please use a number that you are reachable:</p>


  Telephone:
  <input type="tel" name="usrtel">
 


<p><b>Note:</b> start with you country code. example +254*********</p>

<h3><u>Email address</u></h3>
<p> <strong>input your email</strong> please an email that is working </p>


  E-mail:
  <input type="email" name="email">


<p>
<b>Note:</b>write a valid email</p>

<h3><u>Date order taken</u></h3>
<p>The <strong>date you submit this form</strong> </p>
<p>Depending on browser support:<br>A date picker can pop-up when you enter the input field.<p>


  Date:
  <input type="date" name="dateorder">
  

<h3><u>Item</u></h3>
<p> <strong>Select your type of cake</strong> </p>


	
<input type="checkbox" name="cake" value="black">Black Forest
<br>
<input type="checkbox" name="cake" value="white">White Forest
<br>
<input type="checkbox" name="cake" value="vanilla">Vanilla
<br>
<input type="checkbox" name="cake" value="straw">Strawberry
<br>
<input type="checkbox" name="cake" value="Orange">Orange
<br>
<input type="checkbox" name="cake" value="lemon">Lemon
<br>
<input type="checkbox" name="cake" value="passion">Passion
<br>
<input type="checkbox" name="cake" value="swirl">Chocolate Swirl
<br>
<input type="checkbox" name="cake" value="passionfprest">Passion Forest
<br>
<input type="checkbox" name="cake" value="blueberry">Blueberry Forest
<br>
<input type="checkbox" name="cake" value="coconut">Orange Coconut
<br>
<input type="checkbox" name="cake" value="plain">Plain Chocolate
<br>
<input type="checkbox" name="cake" value="oreo">Chocolate Oreo
<br>
<input type="checkbox" name="cake" value="choco">Chocolate Orange
<br>
<input type="checkbox" name="cake" value="mint">Chocolate Mint
<br>
<input type="checkbox" name="cake" value="lemchoc">Lemon Chocolate
<br>
<input type="checkbox" name="cake" value="mocha">Chocolate Mocha Oreo
<br>
<input type="checkbox" name="cake" value="fudge">Fudge Cake
<br>
<input type="checkbox" name="cake" value="whitechoco">White Chocolate
<br>
<input type="checkbox" name="cake" value="red">Red Valvet
<br>
<input type="checkbox" name="cake" value="nut">Orange Coconut
<br><br>

 
<h3><u>size</u></h3>
<p> <strong>Size of the cake in kg</strong> </p>


  <input type="radio" name="KG" value="1 KG" checked> 1 KG<br>
  <input type="radio" name="KG" value="1.5 KG" checked> 1.5 KG<br>
  <input type="radio" name="KG" value="2 KG" checked> 2 KG<br>
  <input type="radio" name="KG" value="2.5 KG" checked> 2.5 KG<br>
  <input type="radio" name="KG" value="3 KG" checked> 3 KG<br>
  <input type="radio" name="KG" value="4 KG" checked> 4 KG<br>
  <input type="radio" name="KG" value="5 KG" checked> 5 KG<br>
 

<h3><u>Additional information</u></h3>
<p><strong>Write down any additional information you need in the cake</strong> </p>


Information:<br>
<input type="text" name="Information">

<br><br>

<input type="submit" name="reg" value="Submit" />
</fieldset>
</form> 
<table>
		
			<tr >
				<th  id="containerr">Contact</th>
				<th text align = "center"> Find Us On </th>
			</tr>	
			<tr >
				<th  id="containerr"> Bake Me a Wish!</th>
				<th> </th>
			</tr>	
			<tr >
				<th  id="containerr"> P.O.BOX 28313-21000</th>
				<th> <a href="https://www.facebook.com/bakery/html/"> Facebook</a> </th>
			</tr>
			<tr >
				<th  id="containerr">SIGMA HOUSE, ROOM NO 239</th>
				<th> <a href="https://www.twitter.com/bakery/html/"> Twitter</a></th>
			</tr>
			<tr >
				<th  id="containerr"> RIVER ROAD </th>
				<th> <a href="https://www.youtube.com/bakery/html/"> YouTube</a> </th>
			</tr>	
			<tr >
				<th  id="containerr"> NAIROBI</th>
				<th> <a href="https://www.instagram.com/bakery/html/"> Instagram</a> </th>
			</tr>		
			<tr >
				<th  id="containerr"> 0723111911</th>
				<th> </th>
			</tr>	
			<tr >
				<th  id="containerr"> 8am to 6pm</th>
				<th> </th>
			</tr>	
</table>			

