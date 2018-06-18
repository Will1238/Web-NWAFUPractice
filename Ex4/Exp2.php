<?php
    $con = @mysql_connect("localhost","root","");
    if(!$con){
        die('Could not connect:'.mysql_error());
    }
    mysql_select_db("mydb",$con);

    $result = mysql_query("SELECT * FROM test");

    echo "<table border='1'>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>url</th>
    <th>intro</th>
    </tr>";
    while($row = mysql_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['url']."</td>";
        echo "<td>".$row['intro']."</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysql_close($con);
?>