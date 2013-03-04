<?php
include('classes.php');
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css" />
        <script src="scripts.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </head>
    <body>
        <div class="view" id="view1">
            <div style="position: relative; top: 10%;">
                <div class="logo">
                    <h1>DBZ</h1>
                    <h2>Technology</h2>
                </div>
                <img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />
            </div>
        </div>
        <div class="view" id="view2">
            <div class="panel">
                <div class="panelrect">
                    <div class="panelpadding">
                        <h1>Compelling Design</h1>
                        <h2>Simple. Flexible. Elegant.</h2>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner.svg" class="panelcorner" alt="Corner" />
            </div>
            <div class="ribbon"></div>
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
        <div class="view" id="view3">
            <div class="panel panelleft" style="">
                <div class="panelrect">
                    <div class="panelpadding">
                        <h1>Consulting</h1>
                        <h2>Affortible Consulting for Computing Solutions</h2>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner2.svg" class="panelcorner panelcornerleft" alt="Corner" />
            </div>
            <div class="ribbon"><div class="block" style="height: 550px; margin-top: 250px;"></div></div>
            <div class="ribbon" style="left: 0px;"><div class="block" style="height: 50px;"></div></div>
            <div class="ribbon horizontal" style=""><div class="block" style="width: 283px;"><img src="Resources/Images/FoldDown.svg" alt="Fold Down" style="margin-left: 83px" /></div><div class="block" style="width: 283px; float: right; margin-top: -200px;"><img src="Resources/Images/FoldLeft.svg" alt="Fold Left" style="margin-right: 83px" /></div></div>
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
        <div class="view" id="view4">
            <div class="ribbon" style="left: 0px;"><div class="block" style="height: 550px; margin-top: 250px; background: white;"></div></div>
            <div class="ribbon horizontal" style=""><div class="block" style="width: 283px; background: white;"><img src="Resources/Images/FoldRight.svg" alt="Fold Right" style="margin-left: 83px" /></div></div>
            <div class="buttonholder">
                <div class="button smallbutton"></div>
                <div class="button smallbutton"></div>
                <div class="button smallbutton"></div>
                <div class="button bigbutton"><p>@Contact</p></div>
            </div>
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
    </body>
</html>