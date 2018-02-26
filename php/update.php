<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<form action="" method="post">

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<form action="" method="post">

<?php

include "connect_db.php";
header('Content-Type: charset=utf-8');

// show select data in form 
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "select * from news_listup where id =$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "id: " . $id . "</br>";
            echo "title: <input type='text' name='title' id='title' value='" .$row["title"] . "'></br>";
            echo "date: <input type='text' name='date' id='date' value='" . $row["date"] ."'></br>";
        }
    } 
} else {
    echo "no record found";
}

// update data 

if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $date=$_POST["date"];

    $sql = "UPDATE news_listup SET title = '$title' ,date ='$date' WHERE  id  =$id;";

    if($conn->query($sql) === true){
        echo "update successfully [ <a href='select.php'>back</a> ]";
    } else {
       echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }
}

$conn->close();
?>

<input type="submit" value="submit" name="submit">
</form>
</body>
</html>