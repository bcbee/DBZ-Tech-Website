<?php
include('classes.php');
$title = "Repair";
$back = "/".$_GET['back'];
#$back = "/";
include('header.php');
?>

<div id="portfolio" class="cardholder">
    <?php
        portfolio::$view = "Repair";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>