<?php
// Connect to the database
include('../../../../dbCon.php');
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the comment from the form
  $comment = $_POST["comment"];
  $name = $_POST["name"];
  // Prepare the SQL statement to insert the comment into the `comments` table
  $sql = "INSERT INTO comments(message, name) VALUES ('$comment','$name')";

  // Execute the SQL statement
  if ($mysqli->query($sql) === TRUE) {
    echo "<p class='green'>Comment saved successfully</p>";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ex. 9: Comments</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <form action="EX09.php" method="post" class="flex-row">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" />
    <br />
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment" cols="30" rows="1"></textarea>
    <br />
    <input type="submit" value="Submit" />
  </form>
  <hr>
  <div class="comments">
    <?php
    include('../../../../dbCon.php');
    $sql = "SELECT * FROM comments";
    $results = $mysqli->query($sql)->fetch_all();
    foreach ($results as $result) {
      echo "<div class='comment padding'>";
      echo "<p><span class='green'>" . $result[1] . "</span>: " . $result[2] . " @ " . $result[3] . "</p>";
      echo "</div>";
    }
    $mysqli->close();
    ?>
  </div>
</body>

</html>