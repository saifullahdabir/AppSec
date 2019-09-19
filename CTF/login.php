<?php 

if (isset($_POST['username'])) {
	$username = $_POST['username'];
}
else {
	$username = "default";
	
}

if (isset($_POST['password'])) {
	$password = $_POST['password'];
}
else {
	$password = "default";
}
?>

<div style = "color:#ffff66;" >
<?php
//echo "uname and password are ". $username." : ".$password;
if (($username == "S3RG3@NT") && ($password == "L3TM3!N")) {
	$flag = "gsc3:{1qazxdft6_sergeant}";
	echo "The flag is : ".$flag;
}
else {
	echo "Invalid credentials";
}

?>
<div>

<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
	  <style>
    { margin: 0; padding: 0; }

    html { 
        background: url('Bunker.png') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
	</style>
      
   </head>
   <!--s<body bgcolor = "#FFFFFF" background="Bunker.png">-->
   <body>
	<audio src="accesscode.wav" autoplay="autoplay" ></audio>
      <div style = "margin:100px" align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;" ><b>Login</b></div>
				
            <div style = "margin:30px; color:#ffff66" align = "center">
               
               <form action = "" method = "post">
                  <label style = "color:#FFFFFF;" >UserName  :</label><input type = "text" name = "username" value class = "box"/><br /><br />
                  <label style = "color:#FFFFFF;" >Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:15px; color:#ffff66; margin-top:10px">
			   <?php 
			   
				$user = "";
				if (isset($_REQUEST["username"])) {
					$user = $_REQUEST['username'];    
				} else {    
					$user = "";
				}
			    echo "Welcome Sergeant ". $user. ". Please say the passphrase to be able to enter the bunker !!"; 
			  			  		   
				?>
			   </div>
					
            </div>
				
         </div>
			<br><br><br><div style = "color:#ffff66;" ><?php echo "Be Pateint and Listen Closely. Only then you shall hear our secrets whispered into your ears !!"; ?></div>
      </div>





   </body>
</html>
