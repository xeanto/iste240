<?php
include "/home/MAIN/cam8940/dbCon.php";
//You just need to display the data you would hypothetically submit here
//you don't need to actually have it insert into the DB!
//make sure to use the sanitize function before printing the user provided data!
echo "<script src='assets/scripts/script.js'></script>";
echo "<script>waitThenGo()</script>";
function sanitize($string, $len = 50)
{
    $string = trim($string);
    $string = htmlentities($string);
    $string = substr($string, 0, $len);

    return $string;
}
$row = [
    'name' => sanitize($_GET['name'], 20),
    'rating' => sanitize($_GET['rating'], 3),
    'comment' => sanitize($_GET['comment'], 500)
];

//print results below:
echo "The Following will be inserted into the database at a later time:<br/>";
echo "<p><strong>Name: </strong>" . $row['name'] . "<br>";
echo "<strong>Rating: </strong>" . $row['rating'] . "<br>";
echo "<strong>Comment: </strong>" . $row['comment'] . "</p>";

// prepare the insert statement
$sql = $mysqli->prepare("INSERT INTO 240reviews(name, rating, comment) VALUES (?,?,?)");
$sql->bind_param("sis", $row['name'], $row['rating'], $row['comment']);
if ($sql->execute() === TRUE) {
    echo "<p class='green'>Comment saved successfully</p>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>