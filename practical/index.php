<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate my final!</title>
    <base href="/~cam8940/iste240/practical/">
    <!-- Link to your external CSS here -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/scripts/script.js"></script>
</head>

<body>
    <!-- make sure to create a container/wrapper for overall site. -->
    <site-content class="column" id="content">
        <h1>Rate my final!</h1>
        <nav>
            <a href="">Home</a>
            <a href="#">About</a>
            <a href="#">Cat Reviews</a>
        </nav>
        <div class="rate-fluffy">
            <img src="assets/images/tagline-img.png" alt="Rate Fluffy!">
            <p>Rate my<br> final practical!</p>
        </div>
        <h2>Recent Ratings:</h2>
        <?php
        include "/home/MAIN/cam8940/dbCon.php";
        $sql = "SELECT * FROM 240reviews";
        $result = $mysqli->query($sql);
        echo "<div class='comments'>";
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>Name: </strong>" . $row['name'] . "<br>";
            echo "<strong>Rating: </strong>" . $row['rating'] . "<br>";
            echo "<strong>Comment: </strong>" . $row['comment'] . "</p>";
        }
        echo "</div>";
        ?>
        <hr class="content-divide" id="divider">
        <h3>
            Leave A Review
        </h3>
        <form class="flex-form" onsubmit="return validate();" id="ratingForm" action="process.php">
            <div>
                <label for="name">Name: </label>
                <input id="name" type="text" name="name">
            </div>
            <div>
                <label for="rating">Rating</label>
                <input id="rating" type="range" name="rating">
            </div>
            <label for="comment">Comment:</label>
            <textArea id="comment" name="comment" col="70" row="10" class="commentInput"></textArea>
            <input type="submit" class="btn">
        </form>
        <button type="button" class="btn" onclick="darkMode()" id="darkButton">Dark Mode Toggle</button>
        <?php
        include "assets/inc/footer.php";
        ?>
    </site-content>
</body>

</html>