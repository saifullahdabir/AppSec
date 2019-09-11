<?php 
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'xss');
 
/* Attempt to connect to MySQL database */
$link2 = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 //echo "jhi";
// Check connection
if($link2 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$sql = "SELECT flag FROM users WHERE username = $username AND password = '$password' ";
if ($result = $link2->query($sql)) {
	if ($result->num_rows > 0) {
						// output data of each row
		echo '<table>';
		echo '<tr>';
		echo '  <td>' . "The Flag is " . '</td>';
		echo '  </tr> ';           
		while($row = $result->fetch_assoc())  {
			echo '<tr>';
			echo '  <td>' . $row["flag"] . '</td>';
			echo '  </tr> ';                
		}
		echo'</table>';
	}
}
/* else{
	echo "Error: secret could not be saved";
} */
$link1->close();

?>

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
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div style = "margin:100px" align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;" ><b>Login</b></div>
				
            <div style = "margin:30px" align = "center">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" value class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
			   <?php 
			   
				$user = "";
				if (isset($_REQUEST["username"])) {
					$user = $_REQUEST['username'];    
				} else {    
					$user = "";
				}
			    echo "Welcome Master ". $user. " to this flag hunt!!"; 
			  			  		   
				?>
			   </div>
					
            </div>
				
         </div>
			<br><br><br><?php echo "Login to get the flag!!"; ?>
      </div>























































































































<!-- 

Cyber security is a high priority of companies, small and big, as cyber attacks have been on the rise in recent years.
In response to these attacks, security professionals and college students have been through rigorous training as how hackers are able to get into the companies and how to defend against them.
One way of cyber security training is through a cyber security capture the flag (CTF) event.
A cyber security .-.. ...-- - -- ...-- -.-.-- -. CTF is a competition between security professionals and/or students learning about cyber security.
This competition is used as a learning tool for everyone that is interested in cyber security and it can help sharpen the tools they have learned during their training.The very first cyber security CTF developed and hosted was in 1996 at DEFCON in Las Vegas, Nevada. DEFCON is the largest cyber security conference in the United States and it was officially started in 1993 by Jeff Moss. DEFCON had become a platform for a skills competition and as the Internet grew, both DEFCON and the CTF competitions did as well. CTF competitions have become global as they did not have any borders and can be done via the Internet. International teams were competing for different types of prizes and bragging rights. There are two formats of the cyber security CTF: attack-defend and Jeopardy-style.


-->
   </body>
</html>
