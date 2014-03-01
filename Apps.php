<?php
include('classes.php');
$title = "Apps";
if (isset($_GET['back'])) {
    $back = "/".$_GET['back'];
} else {
    $back = "/";
}
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