<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>九九乘法表</title>
</head>
<body>
<h1>九九乘法表</h1>
 <?php
        for($i=1;$i<=9 ;$i++){
                for ($j=1; $j <= $i ; $j++) { 
                       echo $j."*".$i."=".$i*$j." ";
                }
                echo "<br/>";                
        }

?>          
</body>
</html>