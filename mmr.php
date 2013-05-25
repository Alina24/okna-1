<?php
$val_a=$_REQUEST['val_a'];
echo "val_a=$val_a <br>";
$val_b=$_REQUEST['val_b'];
echo "val_b=$val_b <br>";
$val_c=$_REQUEST['val_c'];
echo "val_c=$val_c <br>";
$WTypeSum=$_REQUEST['WTypeSum'];
echo "WTypeSum=$WTypeSum <br>";
$fp=fopen("res.txt","a");
fputs($fp,"$val_a\t$val_b\$val_c\t$WTypeSum\t");
fclose($fp);

?>
