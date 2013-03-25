<?php
include('classes.php');
$title = "Portfolio";
$back = "/".$_GET['back'];
#$back = "/";
include('header.php');
?>

<div id="portfolio" style="background: white; width: 100%; height: 900px;">
    <?php
        $view = $_GET['view'];
        if ($view == "All") {
            $cards = Array('Twitter');
        } elseif ($view == "Design") {
            $cards = Array('Splat', 'MPAror');
        } elseif ($view == "Creation") {
            $cards = Array('CreateServer', 'CreateBrock', 'CreateGrandpa', 'CreateOldServer');
        } elseif ($view == "Repair") {
            $cards = Array('ComingSoon');
        } elseif ($view == "Solutions") {
            $cards = Array('Erickson');
        } elseif ($view == "Apps") {
            $cards = Array('ComingSoon');
        } else {
            $cards = Array('ComingSoon');
        }
        cards::loadCards($cards);
    ?>
</div>

<?php
include('footer.php');
?>