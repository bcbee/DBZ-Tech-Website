<?php
include('classes.php');
$title = "Portfolio";
$back = "/".$_GET['back'];
#$back = "/";
include('header.php');
?>

<div id="portfolio" class="cardholder">
    <?php
        $view = $_GET['view'];
        if ($view == "All") {
            $cards = Array('Splat', 'MPAror', 'CreateServer', 'CreateBrock', 'CreateGrandpa', 'CreateOldServer', 'Erickson');
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
        array_push($cards, 'Ad');
        cards::loadCards($cards);
    ?>
</div>

<?php
include('footer.php');
?>