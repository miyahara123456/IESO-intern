<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
<title>文字化けを直したい。</title>

<form action="mission_1-6.php" method="post">

<input type="text" name="textbox" value=""/>
<input type="submit" value="送信"/>

</form>
</head>
</html>


<?php
$textbox = $_POST['textbox'];

$filename = 'kadai5.txt';
//echo $filename;

$fp = fopen($filename,'a');

fwrite($fp,$textbox."\n");

fclose($fp);
print "書きこみ完了しました";

?>
