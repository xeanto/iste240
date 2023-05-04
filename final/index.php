<?php
$title = 'Home';
$imgSource = 'assets/media/pgh.webp';
$cssSource = 'assets/css/globalv2.css';
include 'assets/php/header.php';
?>
<div class='column content-padding'>
    <div class='row'>
        <h1 class='center'>
            <?php echo $title ?>
        </h1>
    </div>

    <div class='row'>

        <div class='column flex-two'>
            <p>
                With rolling hills, amazing views, and nice people, it's the best city in PA! Contrary to some peoples'
                belief that Philadelphia takes the cake, Pittsburgh doesn't have a heroin problem. We have an
                amazing city skyline at night, and specific viewing locations set aside. We also have something
                called the incline, which is a powered rail system that climbs up the side of a mountain.</p>
            </p>
        </div>
        <div class='column'>
            <img src='<?php echo $imgSource ?>' alt='Pittsburgh, Pennsylvania' id='pghPicture' />
        </div>
    </div>

    <div class='row'>
        <div class='column'>
            <h2 class='center'>Things to do in Pittsburgh</h2>
        </div>
    </div>
    <div class='row'>
        <div class='column' id="theMap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194367.17622759112!2d-80.1205845350813!3d40.43128391260673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834f16f48068503%3A0x8df915a15aa21b34!2sPittsburgh%2C%20PA!5e0!3m2!1sen!2sus!4v1682376747166!5m2!1sen!2sus"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" title="The Map"></iframe>
        </div>

        <div class='column'>
            <p> We are among the top cities in a lot of categories. Aluminum production, glass products, and
                petroleum
                products are among the most notable. We are also only behind New York City and Chicago on corporate
                headquarters employment. We also have CMU, the University of Pittsburgh, and Duquesne Unviersity.
                Pittsburgh also has two newspaper outlets: The Pittsburgh Post Gazette, and The Tribune Review. The
                Pittsburgh Post Gazette was founded in 1786, and the newspaper has been running ever since. The
                Tribune
                Review was founded in 1889, and has ceased print publication since December 1st, 2016. </p>
            <p>Pittsburgh is located at the convergence point between two rivers (the Allegheny and the
                Monongohela), where they unite to form the Ohio river. These rivers have shaped the city, and given
                rise to Pittsburghs many bridges. While many say that Pittsburgh has the most bridges of any city in
                the world, it doesn't even have the most bridges in the state of Pennsylvania</p>

        </div>


    </div>

</div>
<?php
include 'assets/php/footer.php';
?>