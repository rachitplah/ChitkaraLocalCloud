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
	<title>Search Results</title>
    <link rel="icon" href="Icons/cloud1.png">
<script type="text/javascript">var a=0;</script>
</head>
<body>
<a href="\ChitkaraLocalCloud\home.php"><img src="\ChitkaraLocalCloud\Icons\cloud22.png" height="90" width="263" alt="ChitkaraLocalCloud"></a>
<div style="position: absolute;top: 0px; right: 0px;"><b><?php echo $_SESSION["User"];?></b><form action="" method="POST" style="position: absolute;right:0px;"><input type="submit" name="logout" value="Logout" style="border-radius: 10px"></form></div>
<br>
<div align="center">
<tr><td><a href="\ChitkaraLocalCloud\home.php" target="_blank"><img src="\ChitkaraLocalCloud\Icons\cloud1.png" height="94px" width="110px" alt="ChitkaraLocalCloud"></a></td></tr>
<table style="border-left-color: blue;border-style: solid;border-right:none;border-top:none;border-bottom: none;  border-collapse: collapse;  " width="1200">
<tr style="background:Aqua;"><th>Name</th><th>Size</th><th>Last Modified</th></tr>
<?php
if(isset($_POST["search"]))
{
$value=$_POST["radioUp"];
$fsearch=strtolower($_POST["searchin"]);
$err=1;
switch ($value) {
    case 'Software':
    $a=0;
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Software\soft_*$fsearch*.*") as $filename) {
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
    $err=0;
}
break;
case 'Videos':
$a=0;
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Videos\mov_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Videos\mov_", "", $filename2);
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
    $err=0;
}
break;
case 'Images':
$a=0;
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Images\img_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Images\img_", "", $filename2);
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
    $a++;    $err=0;
}
break;
case 'Documents':
$a=0;
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Documents\doc_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Documents\doc_", "", $filename2);
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
    $a++;    $err=0;
}
break;
case 'Audio':
$a=0;
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Audio\aud_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Audio\aud_", "", $filename2);
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
    $a++;    $err=0;
}
break;
case 'Misc':
$a=0;
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Misc\misc_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Misc\misc_", "", $filename2);
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
    $a++;    $err=0;
}
break;
    default:
$a=0;
echo "<script>a=0;</script>";
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Software\soft_*$fsearch*.*") as $filename) {
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
    $a++;    $err=0;
}
/*$a=0;
echo "<script>a=0;</script>";*/
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Videos\mov_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Videos\mov_", "", $filename2);
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
    $a++;    $err=0;
}
/*$a=0;
echo "<script>a=0;</script>";*/
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Images\img_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Images\img_", "", $filename2);
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
    $a++;    $err=0;
}
/*$a=0;
echo "<script>a=0;</script>";*/
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Documents\doc_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Documents\doc_", "", $filename2);
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
    $a++;    $err=0;
}
/*$a=0;
echo "<script>a=0;</script>";*/
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Audio\aud_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Audio\aud_", "", $filename2);
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
    $a++;    $err=0;
}
/*$a=0;
echo "<script>a=0;</script>";*/
foreach (glob("F:\Server\htdocs\ChitkaraLocalCloud\Files\Misc\misc_*$fsearch*.*") as $filename) {
    $size=FileSizeConvert(filesize($filename));
    $filename2=$filename;$filename3=$filename;
    $filename2= str_replace("F:\Server\htdocs\ChitkaraLocalCloud\Files\Misc\misc_", "", $filename2);
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
    $err=0;
}
break;
}
if($err==1)
    echo "<h2>Sorry! No result found</h2>";
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