<?php
            session_unset();
            session_start();
            if(isset($_POST["s1"]))
            {
            setcookie("clcid",$_POST["t1"], time() + (86400 * 30), "/");
            $login = fopen("config.py", "w") or die ("Unable to login err1");
            $text = "DATACOUP_USERNAME =\"".$_POST["t1"]."\"\n";
            $text1 = $_POST["t1"]; 
            fwrite($login, $text);
            $text = "DATACOUP_PASSWORD =\"".$_POST["p1"]."\"";
            fwrite($login, $text);
            fclose($login);
            $message = exec("F:\\server\\htdocs\\ChitkaraLocalCloud\\hello.py 2>&1");
            if($message=="ChitkaraLocalCloud")
            {print_r("Login Successful");header('Location: '.$uri.'/ChitkaraLocalCloud/home.php');
             $_SESSION["User"] = $text1;
             setcookie("clcid",$_POST["t1"], time() + (3600 * 30), "/");
            }
            else if($message=="User Identification Portal")
            {print_r("Login failed. Wrong Credentials");}
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="icon" href="Icons/cloud1.png">
</head>
<body>
<center>
<div style="position: relative; top: 100px;">
<img src="Icons/cloud2.png" height="99" width="290">
<form action="login.php" method="POST">
<table height="300px" width="350px" style="background: red;border-style:solid;border-color: Crimson;border-width: 10px; border-radius:10px;">
    <tr><td colspan="2" height="50" align="center" style="font-family: Arial Black, Gadget, sans-serif; font-size: 35px;">LOGIN HERE</td></tr>
	<tr>
        <tr><td colspan="2" height="20"></td></tr>
		<td style="font-family: Arial Black, Gadget, sans-serif; font-size: 20px;">User</td>
		<td align="center"><input type="text" id="t1" name="t1" required style="border-radius:10px; width: 200px; height: 30px"></td>
	</tr>
	<tr>
		<td style="font-family: Arial Black, Gadget, sans-serif; font-size: 20px;">Password</td>
		<td align="center"><input type="password" id="p1" name="p1" required style="border-radius:10px; width: 200px; height: 30px"></td>
	</tr>
	<tr>
		<td></td>
		<td align="center"><input type="submit" name="s1" value="Login" style="background:white;font-family: Arial Black, Gadget, sans-serif; border-radius:10px; width:100px; "></td>
	</tr>
<tr>
<td colspan="2" height="50">
</td>
</tr>
</table>
</form>
</div>
</center>
<!--<iframe src="https://192.168.100.1:6082/php/uid.php?vsys=1&rule=2&url=http://chitkara.cloud/ChitkaraLocalCloud/home.php" name="frame">bfg</iframe>-->
<script>
/*var win1;var user;var win2;
$(document).ready(function(){$("#btd").click()});
document.getElementById('btd').click();
function f1(){
//win=window.open("https://192.168.100.1:6082/php/uid.php?vsys=1&rule=2&url=http://chitkara.cloud/ChitkaraLocalCloud/home.php","newWin","menubar=yes");
user=window.document.getElementById("t1").value;
var pass=window.document.getElementById("p1").value;
win1=window.open("https://192.168.100.1:6082/php/uid.php?vsys=1&rule=2&url=http://chitkara.cloud/ChitkaraLocalCloud/home.php","newWin2","menubar=yes");
//document.write(user);
//win1.document.write(user);
//usd=win1.document.forms["login_form"]["user"].value;
//win2=window.open("http://chitkara.cloud/ChitkaraLocalCloud/home.php");
//win2=window.alert(""+user);
//document.write(usd);
//document.write("dcdc"+user);

//win1.document.getElementById("user").value;

//win.document.getElementById("passwd").value=pass;
}
function f2(){

//win.document.write("<p>This window's name is:</p>");
//uid.document.getElementById("user").value=45454;
//var a=window.document;
//win2=window.open("http://chitkara.cloud/ChitkaraLocalCloud/login2.php");
window.document.write("dcdc"+user);
}*/
</script>
</body>
</html>