<?php 
session_start();
if (isset($_POST['submit'])){
	if(!empty($_SESSION['user_info'])) {
		$qty1=$_POST['qty1'];
		$qty2=$_POST['qty2'];
		$qty3=$_POST['qty3'];
		$qty4=$_POST['qty4'];
		$qty5=$_POST['qty5'];
		$qty6=$_POST['qty6'];
		$qty7=$_POST['qty7'];
		$qty8=$_POST['qty8'];
		$qty9=$_POST['qty9'];
		$user_info=$_SESSION['user_info'];
		$sum=30*$qty1+60*$qty2+30*$qty3+180*$qty4+350*$qty5+200*$qty6+300*$qty7+250*$qty8+270*$qty9;
		$msg="Order placed successfully. Please make a payment of Rs ".$sum." by cash on successful delivery";
		
$sql="INSERT INTO 'order'(username,email,qty1,qty2,qty3,qty4,qty5,qty6,qty7,qty8,qty9)VALUES('$uname','$email','$qty1','$qty2','$qty3','$qty4','$qty5','$qty6','$qty7','$qty8','$qty9');";
	include_once('connection.php');	
if(mysql_query($conn, $sql))
		{  
			echo '<script type="text/javascript"> alert("'.$msg.'")</script>';
		}
		else
		{  
			echo "<script type='text/javascript'>alert('Could not place order');</script>";
		} 
	}
	
}
?>
<html>
<head>
<title>Order</title>
<style type="text/css">
@import url(css/order.css);

</style>
<script type="text/javascript">
	function subtractQty(qty){
		if(qty.value - 1 < 0)
			return;
	else
	qty.value--;
	}
	function chk()
	{
		var qty1=document.getElementById("qty1");
		var qty2=document.getElementById("qty2");
		var qty3=document.getElementById("qty3");
		var qty4=document.getElementById("qty4");
		var qty5=document.getElementById("qty5");
		var qty6=document.getElementById("qty6");
		var qty7=document.getElementById("qty7");
		var qty8=document.getElementById("qty8");
		var qty9=document.getElementById("qty9");
		if((qty1.value=='' && qty2.value=='' && qty3.value=='' && qty4.value=='' &&qty5.value=='' && qty6.value=='' && qty7.value=='' && qty8.value=='' &&qty9.value=='')||(qty1.value=='0' && qty2.value=='0' && qty3.value=='0' && qty4.value=='0' && qty5.value=='0' && qty6.value=='0' && qty7.value=='0' && qty8.value=='0' && qty9.value=='0' ))
		{
			alert("Please select atleast 1 item");
			return false;
		}
		return true;	
	}
</script>
</head>
<section class="header">

<a href="home.php" class="logo">Mega Canteen</a>

<nav class="navbar">
   <a href="home.php">home</a>
   <a href="about.php">about</a>
   <a href="foodlist.php">Order</a>
   <a href="contact.php">Contact Us</a>
   <a href="logout.php">Log Out</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
<form action="" name="orderform" method="get">
<table cellspacing="5" cellpadding="3" align="center">
<caption><font size="5"><U>ORDER HERE !!</U></font></caption>
<tr><td>
<img src="images/khir.jpg" width="300" height="200" border="5"><br/>
<font size="4">Khir</font>
&nbsp;&nbsp;<input type='text' name='qty1' id='qty1' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty1").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty1);' value='-'/>
<font size="4">Rs. 40</font>
</td>
<td>
<img src="images/samosa.jpg" width="300" height="200" border="2"><br/>
<font size="4">Samosa</font>
&nbsp;&nbsp;<input type='text' name='qty2' id='qty2' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty2").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty2);' value='-'/>
<font size="4">Rs. 50</font>
</td>
<td>
<img src="images/paratha.jpg" width="300" height="200" border="2"><br/>
<font size="4">Paratha</font>
&nbsp;&nbsp;<input type='text' name='qty3' id='qty3' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty3").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty3);' value='-'/>
<font size="4">Rs. 70</font>
</td>

</tr>
<tr>

<td>
<img src="images/thukpa.jpeg" width="300" height="200" border="2" ><br/>
<font size="4">Thukpa</font>
&nbsp;&nbsp;<input type='text' name='qty4' id='qty4' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty4").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty4);' value='-'/>
<font size="4">Rs. 80</font>
</td><td>
<img src="images/momo.jpg" width="300" height="200" border="2"><br/>
<font size="4">Momo</font>
&nbsp;&nbsp;<input type='text' name='qty5' id='qty5' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty5").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty5);' value='-'/>
			<font size="4">Rs.90</font>
</td>
<td>
<img src="images/burger.jpg" width="300" height="200" border="2"><br/>
<font size="4">Burher</font>
&nbsp;&nbsp;<input type='text' name='qty6' id='qty6' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty6").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty6);' value='-'/>
<font size="4">Rs. 150</font>
</td>
</tr>
<tr>
<td>
<img src="images/friedrice.jpg" width="300" height="200" border="2"><br/>
<font size="4">Fried Rice</font>
&nbsp;&nbsp;<input type='text' name='qty7' id='qty7' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty7").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty7);' value='-'/>
<font size="4">Rs. 100</font>
</td><td>
<img src="images/pizza.jpg" width="300" height="200" border="2"><br/>
<font size="4">Pizza</font>
&nbsp;&nbsp;<input type='text' name='qty8' id='qty8' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty8").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty8);' value='-'/>
<font size="4">Rs. 200</font>
</td>
<td>
<img src="images/sel.jpg" width="300" height="200" border="2"><br/>
<font size="4">Sel</font>
&nbsp;&nbsp;<input type='text' name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty9").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty9);' value='-'/>
<font size="4">Rs. 30</font>
</td>
<tr><td>
<img src="images/tea.jpg" width="300" height="200" border="2"><br/>
<font size="4">Tea</font>
&nbsp;&nbsp;<input type='text' name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty9").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty9);' value='-'/>
<font size="4">Rs. 20</font>
</td>
<td>
<img src="images/colddrinks.jpg" width="300" height="200" border="2"><br/>
<font size="4">Cold Drinks</font>
&nbsp;&nbsp;<input type='text' name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty9").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty9);' value='-'/>
<font size="4">Rs. 50</font>
</td>
<td>
<img src="images/coffee.jpg" width="300" height="200" border="2"><br/>
<font size="4">Coffee</font>
&nbsp;&nbsp;<input type='text' name='qty9' id='qty9' size="1" maxlength="2" class="qty" style="width: 25px;"/>
			<input type='button' name='add' onclick='javascript: document.getElementById("qty9").value++;' value='+'/>
			<input type='button' name='subtract' onclick='javascript: subtractQty(qty9);' value='-'/>
<font size="4">Rs. 50</font>
</td>


</tr>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr><td colspan="10">
	<input type="submit" name="submit" value="Order now!!!"  class="button" onclick="return chk()"></input></td></tr>
</table></form>
<section class="footer">

   <div class="box-container" >

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="order.php"> <i class="fas fa-angle-right"></i> Order</a>
         <a href="contactus.php"> <i class="fas fa-angle-right"></i> Contact Us</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 9843645412 </a>
         <a href="#"> <i class="fas fa-phone"></i> 9867518938 </a>
         <a href="#"> <i class="fas fa-envelope"></i>megacanteen@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Babarmahal, Kathmandu </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit">  <span>Mega Canteen </span> | all rights reserved! 2022 </div>

</section>
</body>
</html>