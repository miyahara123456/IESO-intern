<form action="mission_2-2.php" method="post">
  名前：<br />
  <input type="text" name="name" size="30" value="" /><br />
  コメント：<br />
  <textarea name="comment" cols="30" rows="5"></textarea><br />
  <br />
  <input type="submit" value="登録する" />
</form>

<?php

$name = $_POST['name'];//名前の受け取り
$comment = $_POST['comment'];//コメントの受け取り

$filename = "kadai2-2.txt";
//echo $filename


file_exists('kadai2-2.txt');
//ファイル存在を確認(同じファイルが存在しているかどうか

touch('kadai2-2.txt');
//ファイルを作成


$fp = fopen($filename,"a");
//ファイルを開く
$num = fgets($fp);
//ファイルの内容を読み込む
//fpは読み込んだ内容の最後に移動
fseek($fp,0);
//fpをファイルの先頭に戻す
fwrite($fp,$num + 1);
//$num + 1してファイルへの書き込み
$num = 10;
echo $num;

$str = $num ."<>" .$name . "<>" .$comment . "<>" . date("Y-m-d H:i:s");
//$strに投稿番号、名前、コメント、日付を代入

fclose($fp);
//ファイルを閉じる

if($name && $comment){
//$name,$comment共にtrueであればtrue

$fp = fopen($filename,"a");
//ファイルを開く
fwrite($fp,$str."\n");
//改行して$fp,$strをファイルに書き込む
fclose($fp);
//ファイルを閉じる
print"書き込み完了しました";
}

?>