<?php
$title = 'The extra stuff!';
include '/home/MAIN/cam8940/Sites/iste240/final/assets/php/header.php';
?>
<div class="row content-padding">
    <div class="col">
        <h1 class="center">Anything extra done is listed here</h1>
        <h3>Responsive Design</h3>
        <p>
            Responsive design was taken into account to make this site look great when viewed on mobile. The flexboxes
            are much better able to be used to make a "flowing" layout for the site.
        </p>
        <hr class="content-divide">
        <h3>Dynamic Navigation</h3>
        <h4>PHP-generated component to increase modularity</h4>
        <p>The navigation is dynamic. PHP is used to dynamically generate the navigation, using folder
            names
            as the text for the always shown portion. The title of each page is parsed to put into the
            indivudal link
            to each page.</p>
        <hr class="content-divide">
        <h3>Feedback Form</h3>
        <h4>JavaScript form validation coupled with PHP parameter binding</h4>
        <p>The form on the feedback page is validated using JavaScript. The form will not submit unless
            all fields are filled out. There is also focusing of the first part that is invalid.
            The navigation has a background filter that blurs the text behind it. This is done using some fancy css.</p>
        <hr class="content-divide">
        <h3>Scroll Bar</h3>
        <h4>Javascript and DHTML component</h4>
        <p>
            The navigation has a scroll bar that shows how far down the page you are. This is done using javascript
            to listen on page scroll and edit the <span class="code quote">width</span> css property. The javascript
            accounts for the different between the client screen height and total page height.<br>
            The window property <span class="code quote">window.pageYOffset</span> is used to get the current
            scrolled-to px value,
            and the <span class="code quote">document.body.scrollHeight</span> is used to get the total height of
            the page. The viewport height (<span class="code quote">window.innerHeight</span>) is subtracted off of
            the document height to account for the difference between the maximum scroll value and the total page
            height, since the total page height (should) never equal the scrolled-to value.</p>
        <hr class="content-divide">
        <h3>Addressing the points lost on the first part of the project</h3>
        <h4>Fixed navigation</h4>
        <p>
            The navigation is much better and much more readable compared to the last style of navigation. There is no
            more white outline (that wasn't even supposed to be included in the final project, I just forgot to remove
            it).
        </p>
        <h4>Design Techniques</h4>
        <p>
            The design techniques have been improved, and the css file was refactored. The css file is now much more
            compressed, and has names that make more sense and follow a stanard. <br>
            There is now more information, which should also make the site more functional, and better organized.
        </p>
        <hr class="content-divide">
        <h3>Miscellaneous</h3>
        <h4>Code Design Requirements</h4>
        <p>
            Code should be indented properly, and should be commented readable, and understandable. CSS should have more
            relevant selectors, and should be organized/indented better.
        </p>
    </div>
</div>
<?php include $root . 'assets/php/footer.php'; ?>