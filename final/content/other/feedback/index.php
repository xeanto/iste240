<?php
$title = "Feedback form";
include '/home/MAIN/cam8940/Sites/iste240/final/assets/php/header.php';
echo '<script src="' . $webroot . 'assets/js/validate.js"></script>';
// Connect to the database
include('/home/MAIN/cam8940/dbCon.php');
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the comment from the form
    $comment = $_POST["comment"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    // Prepare the SQL statement to insert the comment into the `comments` table
    // $sql = "INSERT INTO comments(message, name) VALUES ('$comment','$name')";
    $sql = $mysqli->prepare("INSERT INTO final_feedback(message, name, email) VALUES (?,?, ?)");
    $sql->bind_param("sss", $comment, $name, $email);
    // Execute the SQL statement
    if ($sql->execute() === TRUE) {
        echo "<p class='green'>Comment saved successfully</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}
?>
<form onsubmit="return validateForm()" action="" method="post" class="flex-row" id="comment-form">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" />
    <error id="name-error" class="noError"></error>
    <br />
    <label for="email">Email:</label>
    <input name="email" id="email"></input>
    <error id="email-error" class="noError"></error>
    <br />
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment"></textarea>
    <error id="comment-error" class="noError"></error>
    <br />
    <input type="submit" value="Submit" />
</form>
<hr class="content-divide">
<?php
// Prepare the SQL statement to retrieve all comments from the `comments` table
$sql = "SELECT * FROM final_feedback";
// Execute the SQL statement
$result = $mysqli->query($sql);
// Loop through the result set
echo "<div class='commentContainer'>";
while ($row = $result->fetch_assoc()) {
    echo "<div class='comment'>";
    echo "<p> <span class='name'>" . $row["name"] . "</span>  <span class='time'> | @" . $row["time"] . " | </span> " . $row["message"] . "</p>";
    echo "</div>";
}
echo "</div>";
// Close the database connection
$mysqli->close();
include $root . 'assets/php/footer.php';
?>