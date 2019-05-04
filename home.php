<?php
session_start();
if(isset($_POST["logout"]))
        {
          $_SESSION["User"]="out";
        }
/*if(!isset($_COOKIE["clcid"]))
{echo "hellodfvfdvvdfv";}
//$_SESSION["User"]="out";}
echo "Hello";
if($_COOKIE["clcid"]!=$_SESSION["User"])
{echo "gfbfbgf";}
//$_SESSION["User"]="out";}*/
if($_SESSION["User"]=="out") 
{
    header('Location: '.$uri.'/ChitkaraLocalCloud/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ChitkaraLocalCloud</title>
  <link rel="icon" href="Icons/cloud1.png">
<!--
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>-->
</head>
<body onload="f3()">
	<a href="\ChitkaraLocalCloud\home.php"><img src="\ChitkaraLocalCloud\Icons\cloudnew3.gif" height="90" width="263" alt="ChitkaraLocalCloud"></a>
  <div style="position: absolute;top: 0px; right: 0px;"><b><?php echo $_SESSION["User"];?></b><form action="" method="POST" style="position: absolute;right:0px;"><input type="submit" name="logout" value="Logout" style="border-radius: 10px"></form>
  </div>
 <b style="position: absolute;top: 40px; right: 0px;"><a id="upl" style="display: none;" href="/ChitkaraLocalCloud/allupload.php">All Uploads</a></b>
<center>
<form action="search.php" method="POST">
<input type="text" size="30" onkeyup="showResult(this.value)" name="searchin" required>
<input type="submit" name="search" value="Search">
<br>
<input type="radio" name="radioUp" value="Software">Software
<input type="radio" name="radioUp" value="Videos">Videos
<input type="radio" name="radioUp" value="Images">Images
<input type="radio" name="radioUp" value="Documents">Documents
<input type="radio" name="radioUp" value="Audio">Audio
<input type="radio" name="radioUp" value="Misc">Misc
<input type="radio" name="radioUp" value="" checked hidden>
<div id="livesearch" style="position: absolute;"></div>
</form>
<div>
<div style="height: 200px;width: 200px;display: inline-grid; font-size:120%; text-align:center;" onmouseover="f1(this)" onmouseout="f2(this)">
<a href="\ChitkaraLocalCloud\software.php" target="_blank"><img src="\ChitkaraLocalCloud\Icons\software.png" height="200px" width="200px" alt="Software" onmouseover="f1(this)" onmouseout="f2(this)"></a><b id="p1" style="display: none;">Software</b></div>
<div style="height: 200px;width: 200px;display: inline-grid; font-size:120%; text-align:center;" onmouseover="f1(this)" onmouseout="f2(this)">
<a href="\ChitkaraLocalCloud\videos.php" target="_blank"><img src="\ChitkaraLocalCloud\Icons\videos.png" height="200px" width="200px" onmouseover="f1(this)" onmouseout="f2(this)"></a>
<b id="p2" style="display: none;">Videos</b></div>
<div style="height: 200px;width: 200px;display: inline-grid; font-size:120%; text-align:center;" onmouseover="f1(this)" onmouseout="f2(this)">
<a href="\ChitkaraLocalCloud\photos.php" target="_blank"><img src="\ChitkaraLocalCloud\Icons\images.png" height="200px" width="200px" onmouseover="f1(this)" onmouseout="f2(this)"><br></a><b id="p3" style="display: none;">Images</b></div><br>
<div style="height: 200px;width: 200px; display: inline-grid ;  font-size:120%; text-align:center;" onmouseover="f1(this)" onmouseout="f2(this)">
<a href="\ChitkaraLocalCloud\documents.php" target="_blank"><img src="\ChitkaraLocalCloud\Icons\documents.png" height="200px" width="200px" onmouseover="f1(this)" onmouseout="f2(this)"></a><b id="p4" style="display: none;">Documents</b></div>
<div style="height: 200px;width: 200px; font-size:120%;display: inline-grid; text-align:center;" onmouseover="f1(this)" onmouseout="f2(this)">
<a href="\ChitkaraLocalCloud\music.php" target="_blank"><img src="\ChitkaraLocalCloud\Icons\audio.png" height="200px" width="200px" onmouseover="f1(this)" onmouseout="f2(this)"></a>
<b id="p5" style="display: none;">Audio</b></div>
<div style="height: 200px;width: 200px; font-size:120%;display: inline-grid; text-align:center;" onmouseover="f1(this)" onmouseout="f2(this)">
<a href="\ChitkaraLocalCloud\misc.php" target="_blank"><img src="\ChitkaraLocalCloud\Icons\misc.png" height="200px" width="200px" onmouseover="f1(this)" onmouseout="f2(this)"></a>
<b id="p6" style="display: none;">Misc</b></div>
</div><br>
<div>
<form action="upload2.php" method="POST" enctype="multipart/form-data" target="up">
  <input type="radio" name="radioUp" value="Software">Software
  <input type="radio" name="radioUp" value="Videos">Videos
  <input type="radio" name="radioUp" value="Images">Images
  <input type="radio" name="radioUp" value="Documents">Documents
  <input type="radio" name="radioUp" value="Audio">Audio
  <input type="radio" name="radioUp" value="Misc">Misc
  <input type="radio" name="radioUp" value="" checked hidden><br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" name="submit" value="Upload">
</form>
<iframe src="" name="up" frameborder="0" height="50" width="600"></iframe>
</div>
</center>
<script type="text/javascript">
    function f1(x){
        x.style.height="230px";
        x.style.width="230px";
        document.getElementById("p1").style.display="block";
        document.getElementById("p2").style.display="block";
        document.getElementById("p3").style.display="block";
        document.getElementById("p4").style.display="block";
        document.getElementById("p5").style.display="block";
        document.getElementById("p6").style.display="block";
   }
    function f2(x){
        x.style.height="200px";
        x.style.width="200px";
        document.getElementById("p1").style.display="none";
        document.getElementById("p2").style.display="none";
        document.getElementById("p3").style.display="none";
        document.getElementById("p4").style.display="none";
        document.getElementById("p5").style.display="none";
        document.getElementById("p6").style.display="none";
    }
    function f3()
    {
    var a="";
    var a=<?php echo $_SESSION["User"];?>;

//In the next line replace 16109***** with the id number of the admin
 
    if (a=="16109*****")
      {document.getElementById("upl").style.display="block";}
    }
</script>
</body>
</html>