<form action="mission_1-5.php" method="post">

<input type="text" name="textbox" value=""/>
<input type="submit" value="送信"/>

</form>

<?php
$textbox = $_POST['textbox'];

$filename = 'kadai5.txt';
//echo $filename;

$fp = fopen($filename,'w');

fwrite($fp,$textbox."\n");

fclose($fp);
print "書きこみ完了しました";

?>

