<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
include "connect_db.php";
echo "<br>";

$sql = "SELECT id, title, date FROM news_listup";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["id"]. " : " . $row["title"]. " - [" . $row["date"]. "]<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>