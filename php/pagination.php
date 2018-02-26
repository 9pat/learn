<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
include "connect_db.php";
echo "<br>";

// define how many result you want per page
$result_per_page = 5;

// find out the number of result stored in database
$sql = "SELECT * FROM news_listup";
$result = $conn->query($sql);
$number_of_results = $result->num_rows;

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$result_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])){
	$page = 1;
} else {
	$page = $_GET['page'];
}

// determine the sql LIMIT starting number for the result on the display page
$this_page_first_result = ($page-1)*$result_per_page;

// retrieve selected results from database and display them
// number of result each page upto LIMIT [start point, number of record after that] 
$sql = "SELECT * FROM news_listup LIMIT " . $this_page_first_result . "," . $result_per_page;
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
        echo $row["id"]. " : " . $row["title"]. " - [" . $row["date"]. "]<br>";
    }

// display the links to the page
for($page=1; $page<=$number_of_pages; $page++){
	echo '<a href="?page=' . $page . '">' . $page . '</a> ';
}

$conn->close();
?>

</body>
</html>