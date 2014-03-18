<?php
include('classes.php');
$title = "Portfolio";
if (isset($_GET['back'])) {
    $back = "/".$_GET['back'];
} else {
    $back = "/";
}
include('header.php');
?>

<h1 class="pagetitle">DBZ Portfolio</h1>

<div id="portfolio" class="flexcard">
    <?php
        portfolio::$view = "All";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>