<?php
include('classes.php');
$title = "Innovation";
$back = "/#view4";
include('header.php');

$row1 = array("Erickson","MPAror");
$row2 = array("Qualifications","CreateServer","Portfolio");
$row3 = array("Splat","Twitter");
?>

<h1 class="pagetitle">Always Innovating</h1>

<div id="innovation" class="flexcard">
    <?php
        portfolio::$view = "Innovation";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>