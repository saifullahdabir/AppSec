
<?php

 /*
        CREATE TABLE users (id int NOT NULL AUTO_INCREMENT, name VARCHAR(255), pass VARCHAR(255), PRIMARY KEY(id)) ;
        CREATE TABLE locks (id int NOT NULL AUTO_INCREMENT, name VARCHAR(255), PRIMARY KEY(id)) ;
        CREATE TABLE notes (id int NOT NULL AUTO_INCREMENT, name VARCHAR(255), title VARCHAR(255), note VARCHAR(255), PRIMARY KEY(id)) ;
    */
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

/* sqlmap.py -u "http://localhost:8080/sqlpwn.php?id=1&pass=m" -p id -a */


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sqlpwn');
 
/* Attempt to connect to MySQL database */
$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 //echo "jhi";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}







	// refered from https://websec.wordpress.com/2010/03/19/exploiting-hard-filtered-sql-injections/
	// DB connection

$id = $_GET['id'];
	
	// below are filters
	
if(preg_match('/\s/', $id)) 
    exit('attack'); // no whitespaces
if(preg_match('/[\'"]/', $id)) 
    exit('attack'); // no quotes
if(preg_match('/[\/\\\\]/', $id)) 
    exit('attack'); // no slashes
if(preg_match('/(and|or|null|not)/i', $id)) 
    exit('attack'); // no sqli boolean keywords
if(preg_match('/(union|select|from|where)/i', $id)) 
    exit('attack'); // no sqli select keywords
if(preg_match('/(group|order|having|limit)/i', $id)) 
    exit('attack'); //  no sqli select keywords
if(preg_match('/(into|file|case)/i', $id)) 
    exit('attack'); // no sqli operators
if(preg_match('/(--|#|\/\*)/', $id)) 
    exit('attack'); // no sqli comments
if(preg_match('/(=|&|\|)/', $id)) 
    exit('attack'); // no boolean operators
	
	
	
	//echo $id;
$pass = $link->real_escape_string($_GET['pass']);
	//echo $pass;
$sql = "SELECT id,name,pass FROM users WHERE id = $id AND pass = '$pass' ";
if ($result = $link->query($sql)) {
	//$rowCount = mysqli_num_rows($result);
	if ($result->num_rows > 0) {
						// output data of each row
		echo '<table>';
		echo '<tr>';
		echo '  <td>' . "id" . '</td>';
		echo '  <td>' . "name" . '</td>';
		echo '  <td>' . "pass" . '</td>';
		echo '  </tr> ';           
		while($row = $result->fetch_assoc())  {
			echo '<tr>';
			echo '  <td>' . $row["id"] . '</td>';
			echo '  <td>' . $row["name"] . '</td>';
			echo '  <td>' . $row["pass"] . '</td>';
			echo '  </tr> ';                
		}
		echo'</table>';
	}
}
$link->close();

?>
