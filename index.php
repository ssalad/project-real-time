<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Lab 2 - Office Hour Booking Form</title>
	<link href="../index.css" type="text/css" />
	<link rel="stylesheet" href="Lab2.css" type="text/css" />
</head>

<body>

<div id="left"></div>
<div id="right"></div>
<div id="top"></div>
<div id="bottom"></div>



<div id="mainbody">


<div id="navbar">
<a href="http://helios.ite.gmu.edu/~ssalad2/207/">Home Page</a><br />
<?php
   $ss = cal_to_ss(CAL_GREGORIAN,date("m"),date("d"),date("Y"));
   echo "Todays Day : ";
   echo(ssdayofweek($ss,1));
	
	include("../menu.inc");
?>
</div>

<div id="header-outline">

<div id="header2">
<div id="boldfont2">

Sahal Salad<br />

<a href="mailto:ssalad2@masonlive.gmu.edu">ssalad2@masonlive.gmu.edu</a><br /> 

<?php

	date_default_timezone_set('EST');
	
	echo "Last modified: " . date ("G:i M d, Y e", getlastmod());
?>

</div>
</div>

<div id="header1">
<div id="boldfont1"> 
<?php
	include("../header1.inc");
?>

</div>
</div>
</div>

<div id="footer">

<div id="textbox">
<?php
	include("../footer.inc");
?>

</div>

</div>

<div id="details">
<center>
<h1>Office Hours Setup Form</h1>
<form method="post" action="calendar.php">
<table>
<tr><td width="50">Day:</td>
<td>Monday </td>
<td>Tuesday </td>
<td>Wednesday </td>
<td>Thursday </td>
<td>Friday </td></tr>
<tr><td>Time:</td>


<td width="100" height="300">
<select name="Monday" size ="12" multiple>
	<option value="7:00am">7:00am</option>
	<option value="7:30am">7:30am</option>
	<option value="8:00am">8:00am</option>
	<option value="8:30am">8:30am</option>
	<option value="9:00am">9:00am</option>
	<option value="9:30am">9:30am</option>
	<option value="10:00am">10:00am</option>
	<option value="10:30am">10:30am</option>
	<option value="11:00am">11:00am</option>
	<option value="11:30am">11:30am</option>
	<option value="12:00pm">12:00pm</option>
	<option value="12:30pm">12:30pm</option>
	<option value="1:00pm">1:00pm</option>
	<option value="1:30pm">1:30pm</option>
	<option value="2:00pm">2:00pm</option>
	<option value="2:30pm">2:30pm</option>
	<option value="3:00pm">3:00pm</option>
	<option value="3:30pm">3:30pm</option>
	<option value="4:00pm">4:00pm</option>
	<option value="4:30pm">4:30pm</option>
	<option value="5:00pm">5:00pm</option>
	<option value="5:30pm">5:30pm</option>
	<option value="6:00pm">6:00pm</option>
	<option value="6:30pm">6:30pm</option>
	<option value="7:00pm">7:00pm</option>
	<option value="7:30pm">7:30pm</option>
	<option value="8:00pm">8:00pm</option>
	<option value="8:30pm">8:30pm</option>
	<option value="9:00pm">9:00pm</option>
	<option value="9:30pm">9:30pm</option>
</select><br /></td>


<td width="100" height="300">
<select name="Tuesday" size ="12" multiple>
	<option value="7:00am">7:00am</option>
	<option value="7:30am">7:30am</option>
	<option value="8:00am">8:00am</option>
	<option value="8:30am">8:30am</option>
	<option value="9:00am">9:00am</option>
	<option value="9:30am">9:30am</option>
	<option value="10:00am">10:00am</option>
	<option value="10:30am">10:30am</option>
	<option value="11:00am">11:00am</option>
	<option value="11:30am">11:30am</option>
	<option value="12:00pm">12:00pm</option>
	<option value="12:30pm">12:30pm</option>
	<option value="1:00pm">1:00pm</option>
	<option value="1:30pm">1:30pm</option>
	<option value="2:00pm">2:00pm</option>
	<option value="2:30pm">2:30pm</option>
	<option value="3:00pm">3:00pm</option>
	<option value="3:30pm">3:30pm</option>
	<option value="4:00pm">4:00pm</option>
	<option value="4:30pm">4:30pm</option>
	<option value="5:00pm">5:00pm</option>
	<option value="5:30pm">5:30pm</option>
	<option value="6:00pm">6:00pm</option>
	<option value="6:30pm">6:30pm</option>
	<option value="7:00pm">7:00pm</option>
	<option value="7:30pm">7:30pm</option>
	<option value="8:00pm">8:00pm</option>
	<option value="8:30pm">8:30pm</option>
	<option value="9:00pm">9:00pm</option>
	<option value="9:30pm">9:30pm</option>
</select><br /></td>


<td width="100" height="300">
<select name="Wednesday" size ="12" multiple>
	<option value="7:00am">7:00am</option>
	<option value="7:30am">7:30am</option>
	<option value="8:00am">8:00am</option>
	<option value="8:30am">8:30am</option>
	<option value="9:00am">9:00am</option>
	<option value="9:30am">9:30am</option>
	<option value="10:00am">10:00am</option>
	<option value="10:30am">10:30am</option>
	<option value="11:00am">11:00am</option>
	<option value="11:30am">11:30am</option>
	<option value="12:00pm">12:00pm</option>
	<option value="12:30pm">12:30pm</option>
	<option value="1:00pm">1:00pm</option>
	<option value="1:30pm">1:30pm</option>
	<option value="2:00pm">2:00pm</option>
	<option value="2:30pm">2:30pm</option>
	<option value="3:00pm">3:00pm</option>
	<option value="3:30pm">3:30pm</option>
	<option value="4:00pm">4:00pm</option>
	<option value="4:30pm">4:30pm</option>
	<option value="5:00pm">5:00pm</option>
	<option value="5:30pm">5:30pm</option>
	<option value="6:00pm">6:00pm</option>
	<option value="6:30pm">6:30pm</option>
	<option value="7:00pm">7:00pm</option>
	<option value="7:30pm">7:30pm</option>
	<option value="8:00pm">8:00pm</option>
	<option value="8:30pm">8:30pm</option>
	<option value="9:00pm">9:00pm</option>
	<option value="9:30pm">9:30pm</option>
</select><br /></td>


<td width="100" height="300">
<select name="Thursday" size ="12" multiple>
	<option value="7:00am">7:00am</option>
	<option value="7:30am">7:30am</option>
	<option value="8:00am">8:00am</option>
	<option value="8:30am">8:30am</option>
	<option value="9:00am">9:00am</option>
	<option value="9:30am">9:30am</option>
	<option value="10:00am">10:00am</option>
	<option value="10:30am">10:30am</option>
	<option value="11:00am">11:00am</option>
	<option value="11:30am">11:30am</option>
	<option value="12:00pm">12:00pm</option>
	<option value="12:30pm">12:30pm</option>
	<option value="1:00pm">1:00pm</option>
	<option value="1:30pm">1:30pm</option>
	<option value="2:00pm">2:00pm</option>
	<option value="2:30pm">2:30pm</option>
	<option value="3:00pm">3:00pm</option>
	<option value="3:30pm">3:30pm</option>
	<option value="4:00pm">4:00pm</option>
	<option value="4:30pm">4:30pm</option>
	<option value="5:00pm">5:00pm</option>
	<option value="5:30pm">5:30pm</option>
	<option value="6:00pm">6:00pm</option>
	<option value="6:30pm">6:30pm</option>
	<option value="7:00pm">7:00pm</option>
	<option value="7:30pm">7:30pm</option>
	<option value="8:00pm">8:00pm</option>
	<option value="8:30pm">8:30pm</option>
	<option value="9:00pm">9:00pm</option>
	<option value="9:30pm">9:30pm</option>
</select><br /></td>


<td width="100" height="300">
<select name="Friday" size ="12" multiple>
	<option value="7:00am">7:00am</option>
	<option value="7:30am">7:30am</option>
	<option value="8:00am">8:00am</option>
	<option value="8:30am">8:30am</option>
	<option value="9:00am">9:00am</option>
	<option value="9:30am">9:30am</option>
	<option value="10:00am">10:00am</option>
	<option value="10:30am">10:30am</option>
	<option value="11:00am">11:00am</option>
	<option value="11:30am">11:30am</option>
	<option value="12:00pm">12:00pm</option>
	<option value="12:30pm">12:30pm</option>
	<option value="1:00pm">1:00pm</option>
	<option value="1:30pm">1:30pm</option>
	<option value="2:00pm">2:00pm</option>
	<option value="2:30pm">2:30pm</option>
	<option value="3:00pm">3:00pm</option>
	<option value="3:30pm">3:30pm</option>
	<option value="4:00pm">4:00pm</option>
	<option value="4:30pm">4:30pm</option>
	<option value="5:00pm">5:00pm</option>
	<option value="5:30pm">5:30pm</option>
	<option value="6:00pm">6:00pm</option>
	<option value="6:30pm">6:30pm</option>
	<option value="7:00pm">7:00pm</option>
	<option value="7:30pm">7:30pm</option>
	<option value="8:00pm">8:00pm</option>
	<option value="8:30pm">8:30pm</option>
	<option value="9:00pm">9:00pm</option>
	<option value="9:30pm">9:30pm</option>
</select><br /></td>
</tr>
</table>
<input type="reset" value="Clear" />
<input type="submit" value="Submit" /> 
<input type="hidden" value="user" /> 
</form>
</center>

</div>
		
</div>
</div> <!--End of Main Body Div Tag-->

</body>

</html>