<?php
$title = 'The Three Rivers';
include '/home/MAIN/cam8940/Sites/iste240/final/assets/php/header.php';
?>
<div class="column content-padding">
    <h1 class="center">
        <?php echo $title ?>
    </h1>
    <div class="row">
        <div class="column flex-two ">
            <h3>The Allegheny River</h3>
            <p>
                The Allegheny River is a significant waterway that spans 325 miles and passes through both New York and
                Pennsylvania. The river is known for its beauty and recreational opportunities, but it also has a long
                history of industrial use that has resulted in significant pollution. Due to the heavy industry that
                used to
                be present in Pittsburgh, the river is not safe for human consumption or recreation in some areas.<br>
                Despite its history of pollution, the Allegheny River remains an important part of the local ecosystem.
                It
                is home to a diverse array of fish, including bass, trout, and walleye. In addition to fishing, the
                river
                also offers opportunities for boating, kayaking, and other water-based activities.
            </p>
        </div>
        <div class="column" id="alleghenyImage">
            <img src="assets/media/allegheny.jpg" alt="Allegheny River" class="flex-image">
        </div>
    </div>
    <hr class="content-divide">
    <h3 id="monongahela">The Monongahela River</h3>
    <div class="row-reverse">
        <div class="column flex-two">
            <p>
                The Monongahela River is another major waterway in the Pittsburgh area. It originates in West
                Virginia
                and
                flows into the Ohio River at "the point," where it meets the Allegheny River. The Monongahela River
                has
                a
                long history of industrial use, but it has also been the focus of efforts to clean up and revitalize
                the
                surrounding area.
                <br>
                In recent years, the Monongahela River has become a popular destination for outdoor enthusiasts. The
                river
                offers excellent opportunities for fishing, boating, and other water-based activities. In addition
                to
                its
                recreational value, the river also plays an important role in the local economy. It is used for
                transportation and shipping, and it is home to a variety of industrial facilities.
            </p>
        </div>
        <div class="column">
            <img src="assets/media/monongahela.jpg" alt="Monongahela River" class="flex-image">
        </div>
    </div>

    <hr class="content-divide">
    <div class="row">
        <div class="column flex-two">
            <h3>
                The Ohio River
            </h3>
            <p>
                The Ohio River is the largest tributary to the Mississippi River, and it plays a crucial role in the
                history
                and development of the United States. The river starts in Pittsburgh and flows for 981 miles before
                eventually reaching the Mississippi River. The Ohio River played an essential role in the
                exploration
                and
                settlement of the American West.
                <br>
                In addition to its historical significance, the Ohio River also has important economic and
                ecological
                value.
                It supports a diverse range of fish and wildlife, and it is used for transportation and shipping.
                The
                river
                is also a popular destination for recreation, with opportunities for boating, fishing, and other
                activities.
                Overall, the Allegheny, Monongahela, and Ohio Rivers are essential components of the local ecosystem
                and
                regional economy. While their industrial past has left a lasting impact, efforts to clean up and
                revitalize
                the rivers have helped to restore their ecological and recreational value. Whether you are a history
                buff,
                outdoor enthusiast, or simply appreciate the beauty of nature, the rivers of the Pittsburgh area
                offer
                something for everyone.
            </p>
        </div>
        <div class="column">
            <img src="assets/media/ohio.jpg" alt="Ohio River" class="flex-image">
        </div>
    </div>
</div>
<?php
include $root . 'assets/php/footer.php';
?>