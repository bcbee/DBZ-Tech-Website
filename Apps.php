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

<h1 class="pagetitle">Apps Made Simple</h1>

<div id="portfolio" class="flexcard">
    <?php
        portfolio::$view = "Apps";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>