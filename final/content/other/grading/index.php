<?php
$title = 'The extra stuff!';
include '/home/MAIN/cam8940/Sites/iste240/final/assets/php/header.php';
?>
<div class="content_row content-padding">
    <div class="content_column">
        <h1 class="center">Anything extra done is listed here</h1>
        <ul>
            <li>Responsive Design
                <ul>
                    <li>Responsive design was taken into account to make this site look great when viewed on mobile.
                    </li>
                    <li>The flexboxes are much better able to be used to make a "flowing" layout for the site</li>
                </ul>
            <li>The navigation is dynamic. PHP is used to dynamically generate the navigation, using folder
                names
                as the text for the always shown portion. The title of each page is parsed to put into the
                indivudal link
                to each page.
            </li>
            <li>
                The form on the feedback page is validated using JavaScript. The form will not submit unless
                all fields are filled out. There is also focusing of the first part that is invalid.
            </li>
        </ul>
    </div>
</div>
<?php include $root . 'assets/php/footer.php'; ?>