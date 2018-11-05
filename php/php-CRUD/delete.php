<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<table>
    <tr>
        <th>id</th>
        <th>date</th>
        <th>title</th>
    </tr>

<?php
include "connect_db.php";
header('Content-Type: charset=utf-8');

// delete 

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "delete from news_listup where id =$id";
    $conn->query($sql);
    echo "delete succesful";
} else {
    echo "nothing selected to be delete";
}


// select data - create table 

$sql = "select id, title, date from news_listup order by id desc limit 10 ;";
$result = $conn->query($sql);

if ($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "<tr><td><a href=update.php?id=" . $row["id"] . ">[edit]</a> | <a href=delete.php?id=" .$row["id"] . ">" .$row["id"] . "</a></td><td>[". $row["date"] ."] </td><td> ". $row["title"] ."</td></tr>";
    }

} else {
    echo "0 result - no record found";
}

$conn->close();
?>
</table>
</body>
</html>