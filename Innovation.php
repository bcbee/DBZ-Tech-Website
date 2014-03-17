<?php
include('classes.php');
$title = "Innovation";
$back = "/#view4";
include('header.php');

$row1 = array("Erickson","MPAror");
$row2 = array("Qualifications","CreateServer","Portfolio");
$row3 = array("Splat","Twitter");
?>

<h1 class="viewtitle">Always Innovating</h1>

<div class="flexcard">
    <div class="cardrow">
        <?php cards::loadCards($row1); ?>
    </div>
    <div class="cardrow">
        <?php cards::loadCards($row2); ?>
    </div>
    <div class="cardrow">
        <?php cards::loadCards($row3); ?>
    </div>
</div>

<?php
include('footer.php');
?>