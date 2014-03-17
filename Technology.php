<?php
include('classes.php');
$title = "Technology";
$back = "/#view3";
include('header.php');
?>


<h1 class="pagetitle">Technology Experts</h1>

<div id="design" class="flexcard">
    <?php
        portfolio::$view = "Technology";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>