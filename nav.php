<div class="header titleheader" style="<?php if($index){echo('top: -68px;');} ?>">
    <a href="javascript:toggleLinkMenu();" class="glyphicon glyphicon-th mobilenav navmenu"></a>
    <a href="/" class="logo contentlogo">
        <h1>DBZ</h1>
    </a>
    <?php include('navbuttons.php'); ?>
</div>
<div class="header linkheader" style="top: -68px; display: none;">
    <a href="javascript:toggleLinkMenu();" class="glyphicon glyphicon-remove mobilenav navmenu" style="margin-top: 6px;"></a>

    <ul class="menulinkscroller">
        <?php mobilenav::options($title); ?>
    </ul>

    <?php include('navbuttons.php'); ?>
</div>
