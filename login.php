<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <link  rel="stylesheet" href="main1.css">
  <link rel="icon" href="logo2.jpg" type="image/jpg"/>
	<title>welcome to ticket booking</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
body{
	background-color:#b0e0e6;
}
</style>
</head>

<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $fstat=test_input($_POST["fbus"]);
	$pwd=test_input($_POST["tbus"]);
}

function test_input($data)
{
  $data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
 return $data;
}


require 'connect.php';

$sql ="SELECT * FROM LOGIN WHERE EMAIL='$fstat' and PASSWORD='$pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
   $fname=($row["FIRSTNAME"]);
   $DOB=$row["DOB"];
   $MAIL1=($row["EMAIL"]);
   $PHONE=$row["PHONENO"];
   $ADDR=($row["ADDRESS"]);
   
					
} else {
        
    die('<div class="box effect5">
<h1>BUS TICKET BOOKING</h1>
</div>
	<div id="topmenu">
    
		<div id="list"><a href="#" class="one"><i class="fa fa-home fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;HOME</a></div>
		<div id="list"><a href="http://localhost/exm/newreg.php" class="one"><i class="fa fa-registered fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;NEW&nbsp;REGISTRATION</a></div>
		<div id="list"><a href="http://localhost/exm/gall.html" class="one"><i class="fa fa-picture-o fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;GALLERY</a></div>
		<div id="list"><a href="http://localhost/exm/package.html" class="one"><i class="fa fa-suitcase fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;PACKAGE&nbsp;TOURS</a></div>
		<div id="list"><a href="http://localhost/exm/sample.html"class="one"><i class="fa fa-phone fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;HELP&nbsp;LINE</a></div>
  
</div>


<marquee  behavior="alternate" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()" style="color:#FF0110; padding-top:20px; font-size:20px; font-family:Times New Roman; background-color: #b0e0e6;" id="bordering" ><marquee width="600"><b>Welcome to the our site you can check bus availability easily</b></marquee></marquee>
<h3 style="color:black; text-align:center;">INVALID USERNAME OR PASSWORD</h3>

<div class="mummy2" style="margin-left:60px;">
  <div class="f1">
<form action="http://localhost/exm/login.php"  method="POST">
  <fieldset id="fieldset1" style="color:black;">
		<legend id="legend1" style="color:black;"><b>LOGIN</b></legend><br/>
 <label for="n1">USER&nbsp;NAME<sup style="color:red;">*</sup>:<br/><br/><input type="email" id="n1" name="fbus" placeholder="  EMAIL ID" required="required" style="border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
<label for="n2">PASSWORD<sup style="color:red;">*</sup>:<br/><br/><input type="password" id="n2" name="tbus" placeholder="  PASSWORD" required="required" style="backgroung-color:red; border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>

<pre>  <input type="submit" value="LOGIN" size="20px">   <input type="reset" value="RESET" size="20px"></pre>
<pre>               <a href="http://localhost/exm/pwdupdate.php" style="color:black; font-size:20px; font-family:Questrial; text-decoration:none;">Forgot password<sup style="color:red;">*</sup></a></pre>
</fieldset>
</form>
</div>
<div class="f2"><img src="33.jpg" width="450px" style="box-shadow:20px 10px 10px;background-color:transparent; border-radius:5px;"></div>
<div class="f3"><img src="35.jpg" width="430px" style="box-shadow:20px 10px 10px;background-color:transparent; border-radius:5px; padding-top:5px;"></div>
</div>
<div id="popularlist" style=" background-color: #b0e0e6; margin-left:100px; height:300px;">
<div id="rlist" style="background-color:#02a388; color:white; height:270px;">

  <ul style="list-style:none;">
        <li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Hyderabad - &nbsp;Vijayawada</li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Hyderabad -&nbsp;Visakhapatnam </li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Tirupati&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Chennai  </li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Hyderabad - Tirupati</li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Bangalore - Tirupati</li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Hyderabad - Nellore </li>
  		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Hyderabad - Ongole </li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Vijayawada - Tirupati</li>
   </ul>
</div>
<div id="rlist" style="background-color:#02a388;color:white; height:270px;">
<ul style="list-style:none;">

		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Vijayawada - Hyderabad</li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Vijayawada - Bangalore</li>
		<li id="space"style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Vishakapatnam - Hyderabad</li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Vishakapatnam - Bangalore</li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Chennai - Tirupati</li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Bangalore - Vijayawada </li>	
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Tirupati - Hyderabad </li>
		<li id="space" style="font-family:/"gilroyregular/", /"Helvetica Neue/",/"Helvetica/", /"Arial/", /"Lucida Grande/",/"sansserif/";font-style: oblique;">&nbsp;&nbsp;Tirupati - Bangalore</li>
  </ul>
</div>
<div id="rlist1" style="height:270px;">
 <h3 style="text-align:center; border-bottom:1px solid black; color:#FC6503; padding-bottom:10px; padding-top:5px;">NEWS UPDATES</h3>
<marquee direction="up" id="space" style="padding-left:5px; height:200px;">
Welcome To Bus Ticket Booking<hr/>
Book ticket from Vijayawada- Banglore get 5%cash back promocode:<underline>VBANG9</underline><hr/>
Book ticket from Tirupati-Chennai get 1% cash back on next ticket booking promocode:TCHI9<hr/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THANK YOU </marquee><br/>
</div>
</div>
<br/>
<br/>
 <hr/>
<div id="bottom" style="padding-left:150px;">
  <div id="blist1">
   <h4 style="background-color:black;">Related&nbsp;links</h4><br/>
   <a href="http://www.apsrtconline.in/oprs-web/home/faq.do" target="_blank">FAQS</a><br/><br/>
	 <a href="http://www.tsrtconline.in/oprs-web/home/terms.do" target="_blank">Terms&amp;Conditions</a><br/><br/>
  <a href="http://www.apsrtconline.in/oprs-web/home/privacy.do" target="_blank">Privacy policy</a><br/><br/>
</div>
<div id="blists">
<a href="http:localhost/about.php" target="_blank" >About us</a><br/><br/>
<a href="http://localhost/welcome1.php" target="_blank" >Admin login</a><br/><br/>
<a href="http://localhost/mainpage1.php" target="_blank">User login</a><br/><br/>
</div>
<div id="blists">
Follow us:<br/><br/>
<a href="http://www.facebook.com/apsrtc" target="_blank"><i class="fa fa-facebook-square fa-fw" aria-hidden="true" style="font-size:36px; background-color:#0B73C4; border-radius:5px;"></i></a>
<a href="http://www.twittercom/apsrtc" target="_blank"><i class="fa fa-twitter-square  fa-fw" aria-hidden="true" style="font-size:36px; background-color:#0B73C4; border-radius:5px;"></i></a>
<a href="http://www.twittercom/apsrtc" target="_blank"><i class="fa fa-instagram   fa-fw" aria-hidden="true" style="font-size:36px; background-color:#BDB76B; border-radius:5px;"></i></a>
</div>
</div>
');
}

$conn->close();
?>

<div class="box effect5">
<h1>BUS TICKET BOOKING</h1>
</div> 
<?php
session_start();

$_SESSION["jafar"] = $fname;
$_SESSION["gmail"] = $MAIL1;
$_SESSION["cont"] = $PHONE;
$_SESSION["life"] = $DOB;
$_SESSION["det"] = $ADDR;
?>

<div id="topmenu">
 
		<div id="list"><a href="http://localhost/exm/profileup.php" class="one"><i class="fa fa-home fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbsp;PROFILE</a></div><br/>
		<div id="list"><a href="http://localhost/exm/welcome.html" class="one"><i class="fa fa-phone fa-fw" aria-hidden="true" style="display:inline;background-color:transparent; font-size:24px;"></i>&nbspLOGOUT</a></div>
  
</div>
<br/>

  <h2 style="color:#FC6503; font-size:20px;text-align:center;">                     <?php echo "WELCOME "."   "." <a href=\"http://localhost/proup.php\" style=\"color:#FC6503;\"><i>$fname</i></a>";?> </h2>
<div class="mummy2" style="margin-left:160px;">
  <div class="f1" style="margin-top:20px;">
	<form action="http://localhost/exm/history.php"  method="post" autocomplete="on" autofocus="on">
  		<fieldset id="fieldset1" style="color:black; width:250px; height:auto;">
			<legend id="legend1" style="color:#FC045E;"><b>AVAILABILITY</b></legend><br/>
 			<label for="n1">FROM STATION: <br/><br/><input type="text" id="n1" name="fbus" placeholder="  STARTING  STATION" required="required" style="backgroung-color:red; border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
			<label for="n2">TO STATION:<br/><br/><input type="text" id="n2" name="tbus" placeholder="  REACHING   STATION" required="required" style="backgroung-color:red; border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"><br/><br/>
			<label for="n3">DATE OF JOURNEY:<br/><br/><input type="date" id="n3" name="jdate" required="required" style="backgroung-color:red; border: 2px solid #6E6E6E; width:180px; border-radius:5px; height:15px;"> <br/> <br/>
			<pre>  <input type="submit" value="CHECK" size="20px">   <input type="reset" value="RESET" size="20px"></pre>
		</fieldset>
	</form>
  </div>
    <div class="f2" style="margin-left:100px;">
 <img src="25.jpg" width="600px" alt="no img" style="box-shadow:30px 20px 20px;background-color:transparent; border-radius:5px;">
</div>

</div>

</body>
</html>



