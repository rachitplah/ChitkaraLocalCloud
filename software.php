<?php
session_start();
if(isset($_POST["logout"]))
        {
          $_SESSION["User"]="out";
        }
/*if(!(isset($_cookie["clcid"])))
        {$_SESSION["User"]="out";}
if($_cookie["clcid"]!=$_SESSION["User"])
        {$_SESSION["User"]="out";}*/
if($_SESSION["User"]=="out") 
{
    header('Location: '.$uri.'/ChitkaraLocalCloud/login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Software</title>
	<link rel="icon" href="Icons/cloud1.png">
</head>
<body>
<script type="text/javascript">var a=0;</script>
<a href="\ChitkaraLocalCloud\home.php"><img src="\ChitkaraLocalCloud\Icons\cloud22.png" height="90" width="263" alt="ChitkaraLocalCloud"></a>
<div style="position: absolute;top: 0px; right: 0px;"><b><?php echo $_SESSION["User"];?></b><form action="" method="POST" style="position: absolute;right:0px;"><input type="submit" name="logout" value="Logout" style="border-radius: 10px"></form></div>
<br>
<div align="center">
<tr><td><a href="\ChitkaraLocalCloud\software.php" target="_blank"><img src="\ChitkaraLocalCloud\Icons\software.png" height="80px" width="80px" alt="Software"></a></td></tr>
<table style="border-left-color: blue;border-style: solid;border-right:none;border-top:none;border-bottom: none;  border-collapse: collapse;  " width="1200">
<tr style="background:Aqua;"><th>Name</th><th>Size</th><th>Last Modified</th></tr>
<?php
$a=0;
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Software\soft_*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Software\soft_", "", $filename2);
    $filename3= str_replace("F:\Server\htdocs", "", $filename3); 
    $filename4= str_replace(" ", "%20", $filename3);
    echo "<tr id=\"row$a\"><script>a++;if((a%2)==0)
	{document.getElementById(\"row$a\").style.background=\"Aqua\";
	document.getElementById(\"row$a\").onmouseover=function se(){document.getElementById(\"row$a\").style.background=\"White\";};
	document.getElementById(\"row$a\").onmouseout=function se2(){document.getElementById(\"row$a\").style.background=\"Aqua\";};
}
    else
	{document.getElementById(\"row$a\").style.background=\"SkyBlue\";
	document.getElementById(\"row$a\").onmouseover=function se(){document.getElementById(\"row$a\").style.background=\"White\";};
	document.getElementById(\"row$a\").onmouseout=function se3(){document.getElementById(\"row$a\").style.background=\"SkyBlue\";};
}
    </script><td>";?>
    <a href=<?php echo "$filename4";?> target="_blank"><?php echo "$filename2";?></a><?php
    echo "</td><td style=\"text-align: center;\"> $size </td><td style=\"text-align: center;\">". date("d F Y H:i:s.",filemtime($filename))."</td></tr>";
    $a++;
}
function FileSizeConvert($bytes)
{   $result=0;
    $bytes = floatval($bytes);
        $arBytes = array(
            0 => array(
                "UNIT" => "TB",
                "VALUE" => pow(1024, 4)
            ),
            1 => array(
                "UNIT" => "GB",
                "VALUE" => pow(1024, 3)
            ),
            2 => array(
                "UNIT" => "MB",
                "VALUE" => pow(1024, 2)
            ),
            3 => array(
                "UNIT" => "KB",
                "VALUE" => 1024
            ),
            4 => array(
                "UNIT" => "B",
                "VALUE" => 1
            ),
        );

    foreach($arBytes as $arItem)
    {
        if($bytes >= $arItem["VALUE"])
        {
            $result = $bytes / $arItem["VALUE"];
            $result = strval(round($result, 2))." ".$arItem["UNIT"];
            break;
        }
        else
        {
            $result = strval(round($result, 2))." ".$arItem["UNIT"];
        }
    }
    return $result;
}
?>
</table>
</div>
</body>
</html>