<title> Заказ </title>
</head>
<body>
<H1> Заказ вікон </H1>
<table border=2>
<tr> <td>Val_a</td> <td>Val_b</td> <td>Val_c</td> <td>WTypeSum</td> </tr>
<?php
$fp=fopen("res.txt","r");
if ($fp)

   {
       while(!feof($fp))

    {
       $stroka=fscanf($fp,"%s\t %s\t %d\t %d\n");
       list($Val_a,$Val_b,$Val_c,$WTypeSum)=$stroka;
        //$Val_b=fscanf($fp,"%s\t");
        //$Val_c=fscanf($fp,"%d\t");
        //$WTypeSum=fscanf($fp,"%d\n");
echo "<TR><td>$Val_a</td> <td>$Val_b</td> <td>$Val_c</td> <td>$WTypeSum</td> </TR>";
}
fclose($fp);

}
?>
</body>
</html>
