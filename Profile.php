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

<div id="profile" class="cardholder">
    <?php
        $cards = Array('Bio','Qualifications','Portfolio','Twitter');
        cards::loadCards($cards);
    ?>
</div>

<?php
include('footer.php');
?>