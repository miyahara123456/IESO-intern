<form action="mission_1-5.php" method="post">

<input type="text" name="textbox" value=""/>
<input type="submit" value="‘—M"/>

</form>

<?php
$textbox = $_POST['textbox'];

$filename = 'kadai5.txt';
//echo $filename;

$fp = fopen($filename,'w');

fwrite($fp,$textbox."\n");

fclose($fp);
print "‘‚«‚±‚ÝŠ®—¹‚µ‚Ü‚µ‚½";

?>

