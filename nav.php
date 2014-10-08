<div class="header titleheader" style="<?php if($index){echo('top: -48px;');} ?>">
    <a href="#" class="glyphicon glyphicon-th mobilenav navmenu" onClick="toggleLinkMenu();"></a>
    <a href="/" class="logo contentlogo">
        <h1>DBZ</h1>
    </a>
    <?php include('navbuttons.php'); ?>
</div>
<div class="header linkheader" style="top: -48px;">
    <a href="#" class="glyphicon glyphicon-remove mobilenav navmenu" style="margin-top: 6px;" onClick="toggleLinkMenu();"></a>

    <ul class="menulinkscroller">
        <?php mobilenav::options($title); ?>
    </ul>

    <?php include('navbuttons.php'); ?>
</div>
