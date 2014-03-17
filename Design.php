<?php
include('classes.php');
$title = "Design";
$back = "/#view2";
include('header.php');
?>

<h1 class="viewtitle">Compelling Design</h1>

<div id="design" class="flexcard">
    <?php
        portfolio::$view = "Design";
        portfolio::display();
    ?>
</div>

<?php
include('footer.php');
?>