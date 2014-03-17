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

<h1 class="viewtitle">DBZ Portfolio</h1>

<div id="portfolio" class="flexcard">
    <?php
        if (isset($_GET['view'])) {
            portfolio::$view = $_GET['view'];
        } else {
            portfolio::$view = "All";
        }
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>