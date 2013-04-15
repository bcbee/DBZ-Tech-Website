<?php
include('classes.php');
$title = "Apps";
$back = "/".$_GET['back'];
#$back = "/";
include('header.php');
?>

<div id="portfolio" class="cardholder">
    <?php
        portfolio::$view = "Apps";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>