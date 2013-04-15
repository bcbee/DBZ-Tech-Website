<?php
include('classes.php');
$title = "Solutions";
$back = "/".$_GET['back'];
#$back = "/";
include('header.php');
?>

<div id="portfolio" class="cardholder">
    <?php
        portfolio::$view = "Solutions";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>