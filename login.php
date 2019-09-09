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
			
      </div>

   </body>
</html>