<!DOCTYPE HTML>
<html>
<head></head>
<body>
    <style>
table, th, td {
  border: 1px solid black;
  
}
table {
    width : 100%;
    
}

    </style>
    
<h2>
    Kategorie
</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Jahrgang</th>
            <th>Beschreibung</th>
            <th>Land</th>
            <th>Region</th>
            <th>Winzer</th>
            <th>Preis</th>
        </tr>
    </thead>
    <tbody>
</body>
</html>





<?php
    require_once "connection.php";

    $sql = "SELECT id, name, jahrgang, beschreibung, land, region, winzer, preis FROM Wine ORDER BY name" ;


    $sth = $con->prepare($sql);
    $sth-> execute();


    $result = $sth->fetchAll(PDO::FETCH_ASSOC);


    foreach($result as $row){
        echo"<tr>";
        echo"<td>". $row["name"] . "</td>";
        echo"<td>". $row["jahrgang"] . "</td>";
        echo"<td>". $row["beschreibung"] . "</td>";
        echo"<td>". $row["land"] . "</td>";
        echo"<td>". $row["region"] . "</td>";
        echo"<td>". $row["winzer"] . "</td>";
        echo"<td>". $row["preis"] . "</td>";

    }
    $con = null;

    ?>

</tbody>
</table>

