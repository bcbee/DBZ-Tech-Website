<?php
include('classes.php');
$title = "Profile";
#$back = "/".$_GET['back'];
$back = "/";
include('header.php');
?>

<div id="profile" style="background: white; width: 100%; height: 900px;">
    <?php
        $cards = Array('Bio','Qualifications','Portfolio','Twitter');
        cards::loadCards($cards);
    ?>
</div>

<?php
include('footer.php');
?>