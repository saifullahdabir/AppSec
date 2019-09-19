<?php 

if (isset($_POST['user'])) {
	$user = $_POST['user'];
}
else {
	$user = "default";
	
}

if (isset($_POST['pass'])) {
	$pass = $_POST['pass'];
}
else {
	$pass = "default";
}
?>

<div style = "color:#ffff66;" >
<?php
//echo "uname and pass are ". $user." : ".$pass;
if (($user == "USERNAME") && ($pass == "PASSWORD")) {
	$flag = "write the flag in here";
	echo "The flag is : ".$flag;
}
else {
	echo "Invalid credentials";
}

?>
<div>

<CENTER>

<html>
<title>Box of Mazes </title>
<style>
body {
	background-image: url("dark.jpg");
        background-repeat:no-repeat;
       background-size:cover;
} 

</style>
<font face="Patua One">
    <center><br><br><br><br><br>
        <font face="Patua One" color="#00A015"><p style="font-size:30px; font-family:Courier New"> <font size=10 color="red">&#9766;</font> <b>BOX OF MAZES</b> </p></font>
    <form method="POST">
            <fieldset style="width:400px;border: 1.5px solid #008F11;border-radius: 5px;padding: 10px; color:white; font-family:Courier New">
                <label for="user">Username:</label> 
                <input type="Text" style="color:red; background-color:rgba(0,0,0, 0.5); font-family:Courier New" name="user" id="user" autocomplete="off"><br><br>
                <label for="user">Password:</label>
                <input type="Password" style="color:red; background-color:rgba(0,0,0, 0.5);" name="pass" id="pass" autocomplete="off"><br><br>
                <input type="submit" value="GET IN" class="button" name="submit" style="background-color:rgba(0.5,0.5,0.5, 0.5); color:red; font-family:Courier New; font-size:15px" >
            </fieldset><br><br>
        </form>


<button style="border:none;font-size:30px;font-family:'Courier New';border-radius:6px;" onclick="Hint()"><font size=10>&#9755;</font>  Hint</button>
<p id="hint"></p>
<script>
function Hint() {
    document.getElementById("hint").innerHTML ='Wizard like Mervin';
}
</script>


<script>
var _0xae5b=["\x76\x61\x6C\x75\x65","\x75\x73\x65\x72","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x70\x61\x73\x73","\x43\x79\x62\x65\x72\x2d\x54\x61\x6c\x65\x6e\x74","\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x43\x6F\x6E\x67\x72\x61\x74\x7A\x20\x0A\x0A","\x77\x72\x6F\x6E\x67\x20\x50\x61\x73\x73\x77\x6F\x72\x64"];function check(){var _0xeb80x2=document[_0xae5b[2]](_0xae5b[1])[_0xae5b[0]];var _0xeb80x3=document[_0xae5b[2]](_0xae5b[3])[_0xae5b[0]];if(_0xeb80x2==_0xae5b[4]&&_0xeb80x3==_0xae5b[4]){alert(_0xae5b[5]);} else {alert(_0xae5b[6]);}}
</script>



