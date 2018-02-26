<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
include "connect_db.php";
header('Content-Type: charset=utf-8');

$sql = "select title, date from news_listup order by id desc limit 10 ;";
$result = $conn->query($sql);

if ($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
        echo "[". $row["date"] ."]". $row["title"] ."</br></br>";
    }

} else {
    echo "0 result - no record found";
}

$conn->close();
?>
</body>
</html>