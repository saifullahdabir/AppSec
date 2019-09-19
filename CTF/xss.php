<?php
/* 	1. Get value from xss.php and send it back in output.
	2. Store the value in SQL
	3. Send it to admin.
	4. admin page will fetch the values and the script will be executed.
	5. admin page Refresh every 3 minutes and DB table clear all data every 15 minutes. time should come from the db*/


 /*
        CREATE TABLE xss (id int NOT NULL AUTO_INCREMENT, secret VARCHAR(255), PRIMARY KEY(id)) ;
    */
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'xss');
 
/* Attempt to connect to MySQL database */
$link1 = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 //echo "jhi";
// Check connection
if($link1 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

setcookie("SECRETCOOKIE", "Can you see the admin's secrets?", time() + (86400 * 30), "/"); // 1 day

$secret = $_REQUEST['secret'];
$secret=str_replace("iframe","isNull",$secret);
$secret=str_replace("alert","isNull",$secret);
$secret=str_replace("marquee","isNull",$secret);
$secret=str_replace("window.open","isNull",$secret);
$secret=str_replace("prompt","isNull",$secret);
$secret=str_replace("confirm","isNull",$secret);
$secret1 = $link1->real_escape_string($_REQUEST['secret']);
//echo "<script>alert(".$secret1.");</script>";
//echo $secret;
//echo $secret1;
$sql= "INSERT INTO xss (secret) VALUES (?)";
$stmt = $link1->prepare($sql);
//$stmt->bindParam(':secret', $secret);
$stmt->bind_param('s', $secret);
if ($result = $stmt->execute()) {
echo "Your secret has been saved<br><br>";
}
/* else{
	echo "Error: secret could not be saved";
} */
$link1->close();

echo "This is your secret: ".$secret;
echo "<br><br>The admin keeps his eyes on every user's secret. The admin has been recently diagnosed with an Obsessive Compulsive Disorder which makes him refresh his page every 60 seconds. Try stealing his cookies to piss him off even more. haha!!";

?>
<!-- <form method="post" action="">
<input type="text" name="value">
<input type="submit">
</form> 

<a href="https://xyz.com/xss-admin.php" >asdsa</a>



-->
