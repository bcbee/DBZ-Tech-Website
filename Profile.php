<?php
include('classes.php');
$title = "Profile";
if (isset($_GET['back'])) {
    $back = "/".$_GET['back'];
} else {
    $back = "/";
}
include('header.php');
?>

<h1 class="pagetitle">Profile</h1>

<div id="profile" class="flexcard">
    <?php
        portfolio::$view = "Profile";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>