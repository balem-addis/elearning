

<html>
<head>
<link style="text/css" href="11.css" rel="stylesheet">
<style type="text/css">

.style2 {font-size: 16px}
.one div center p {
	font-size: 18px;
	text-align: justify;
	font-style: italic;
}

</style>
</style>
<script type="text/javascript">
if (document.images) {     // Preloaded images
demo1 = new Image();
demo1.src="images/1.jpg"
demo2 = new Image();
demo2.src="images/2.jpg"
demo3 = new Image();
demo3.src="images/3.jpg"


demo4 = new Image();
demo4.src="images/4.jpg"
demo5 = new Image();
demo5.src="images/5.jpg" 
demo6 = new Image();
demo6.src="images/6.jpg"
demo7 = new Image();
demo7.src="images/7.png" 

}
function timeimgs(numb) {  // Reusable timer
thetimer = setTimeout("imgturn('" +numb+ "')", 2000);
}

function imgturn(numb) {   // Reusable image turner
if (document.images) {

if (numb == "7") {         // This will loop the image
document["demo"].src = eval("demo7.src");
timeimgs('1');
}

else {
document["demo"].src = eval("demo" + numb + ".src");

timeimgs(numb = ++numb);
}
}
}

</script>
</head>
<body  onLoad="timeimgs('1');"style="background-image:url(images/background.jpg)"

<table border="0" align="center" >
<tr><td>
<table align="center" border="0" width="1300"height="100" style="background-image:url(images/headerbg.png)">
<tr>
<td  border="0"align="center"></td>
tr>
<td  border="0"align="center"><img src="images/header.png" width="600" height="50"></td>


</tr></table>

<table border="0" width="1300"height="40" align="center" bgcolor=#778899 >
<tr>
<td align="center" valign="bottom" bgcolor= #778899>
<a href="index.php" class="a">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="about.php"class="a">About US</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=" contact.php"class="a">contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.youtube.com"class="a">Tutorials</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</td>

<td align="right" border="0" bgcolor= #778899><br>
<a href="login.php" class="a">Login</a></b></td></tr>
</table>
<br><br>
<table border="0"  width="1210"height="450" align="center" >
<tr ><td width="210" align="center" valign="center" ><font  color="white" ><b><br>
 DMCTE ELMS</b> </font><BR>
<img src="images/e-learning.jpg"  width="250" height="250"></td>
<td width="700" height="300" rowspan=4 align="center"valign="top" class="one"  bgcolor="ffffff"><div><p><center>
   <h3>&nbsp;</h3>
   <h3>&nbsp;</h3>
   <marquee  behavior="alternate">
   
   <image src="images/index2.png" height="100" width="300"></marquee>
   <p class="w"> 
 <center>
   <h3>&nbsp;</h3>
   <p class="w"> 
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<u>  YOU CAN CONTACT US BY THE FOLLOWING ADDRESS</u><BR><BR><BR><BR><BR>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;TEL1: 1012<BR><BR>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TEL2: 1014<BR><BR>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <BR><BR>
 
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;P.O.Box 2021
  
     Bahirdar, Ethiopia
   
   
   
   
   </p>
  
   </center>
  
   </center>

</div>
</p></td>
<td rowspan=3 width="300" >
<img src="" height="320" width="300" name="demo" >
</td></tr>


<tr>
<td   valign="top" rowspan=3><font  color="blue" >
  <center><b><h3>Related Links</h3></b></center></font>
<a href="http://www.dbu.edu.et"class="b" > &nbsp;&nbsp;&nbsp; <font size="5"  color="blue">* DMCTE website</font></a><br>
<a href="site.php"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue"> * Site map</font></a><br>
<a href="http://www.gmail.com"class="b">&nbsp;&nbsp;&nbsp;&nbsp; <font size="5"  color="blue">  * gmail</font></a></td>

</tr>
</table>
</td>
</tr><br>
<tr style="background-image:url(images/headerbg.png)" border="0" ><td align="center"   >Copyright © 2018 DMCTE ELMS. All rights reserved.</td>
</tr>

</table></body>
</html>
