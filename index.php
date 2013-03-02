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
                        <p>This is text</p>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner.svg" class="panelcorner" alt="Corner" />
            </div>
            <div class="ribbon"></div>
            <!--<img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />-->
        </div>
        <div class="view" id="view3">
            <div class="ribbon"></div>
            <img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />
        </div>
        <div class="view" id="view4">
            <div class="ribbon"></div>
            <img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" />
        </div>
    </body>
</html>