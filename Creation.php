<?php
include('classes.php');
$title = "Computer Creation";
$back = "/".$_GET['back'];
#$back = "/";
include('header.php');
?>

<div id="portfolio" class="cardholder">
    <?php
        portfolio::$view = "Creation";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>