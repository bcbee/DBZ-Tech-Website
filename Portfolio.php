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
        $viewfull = true;
        if ($view == "All") {
            $cards = Array('Splat', 'MPAror', 'Erickson');
            $viewfull = false;
        } elseif ($view == "Design") {
            $cards = Array('Splat', 'MPAror');
        } elseif ($view == "Creation") {
            $cards = Array('CreateOldServer', 'CreateServer', 'CreateBrock', 'CreateGrandpa');
        } elseif ($view == "Repair") {
            $cards = Array('ComingSoon');
        } elseif ($view == "Solutions") {
            $cards = Array('Erickson');
        } elseif ($view == "Apps") {
            $cards = Array('ComingSoon');
        } else {
            $cards = Array('ComingSoon');
        }
        array_push($cards, 'You', 'Ad');
        if ($viewfull) {
            echo '<div style="width: 100%; height: 50px; margin-top: 15px;"><a class="button longbutton centerbutton" href="/Portfolio?view=All">View Full Portfolio</a></div>';
        }
        cards::loadCards($cards);
    ?>
</div>

<?php
include('footer.php');
?>