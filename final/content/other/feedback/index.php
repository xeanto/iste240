<?php
$title = "Feedback form";
$cssSource = '../../assets/css/globalv2.css';
include '../../assets/php/header.php';

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
<form action="" method="post" class="flex-row">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" />
    <br />
    <label for="email">Email:</label>
    <textarea name="email" id="email"></textarea>
    <br />
    <label for="comment">Comment:</label>
    <textarea name="comment" id="comment"></textarea>
    <br />
    <input type="submit" value="Submit" />
</form>
<?php
include('../../assets/php/footer.php');
?>