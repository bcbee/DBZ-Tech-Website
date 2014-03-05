<?php
include('classes.php');
?>
<!doctype html>
<!-- This site was written and developed by Brendan Boyle of DBZ Technology -->
<html>
    <head>
        <link rel="stylesheet" href="/CSS/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/CSS/styles.css" />
        <link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 1100px)' href='/CSS/tablet.css' />
        <link rel='stylesheet' media='screen and (max-width: 700px)' href='/CSS/phone.css' />
        <?php #color::set('blue'); ?>
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script src="/CSS/bootstrap/js/bootstrap.min.js"></script>
        <script src="/JS/scripts.js"></script>
        <script src="/JS/index.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>DBZ Technology | Home</title>
    </head>
    <body onload="load();">
        <?php include('analyticstracking.php'); ?>
        <div class="header" style="display: none;">
            <div class="logo contentlogo">
                <h1>DBZ</h1>
            </div>
            <?php include('navbuttons.php'); ?>
        </div>
        <div class="view" id="view1">
            <!-- DBZ Technology -->
            <div class="indexlogo">
                <div class="logo">
                    <h1>DBZ</h1>
                    <h2>Technology</h2>
                </div>
                <div class="indexbuttons">
                    <a href="/Design" class="roundbutton"><span class="glyphicon glyphicon-pencil roundbuttonicon"></span><br />Design</a>
                    <a href="/Technology" class="roundbutton"><span class="glyphicon glyphicon-flash roundbuttonicon"></span><br />Technology</a>
                    <a href="/Innovation" class="roundbutton"><span class="glyphicon glyphicon-certificate roundbuttonicon"></span><br />Innovation</a>
                    <a href="/Apps" class="roundbutton"><span class="glyphicon glyphicon-phone roundbuttonicon"></span><br />Apps</a>
                    <a href="/Portfolio" class="roundbutton"><span class="glyphicon glyphicon-user roundbuttonicon"></span><br />Portfolio</a>
                    <a href="/Contact" class="roundbutton"><span class="glyphicon glyphicon-send roundbuttonicon"></span><br />Contact</a>
                </div>
                <a href="#view2"><img src="Resources/Images/arrow.svg" alt="Continue" class="arrow downarrow" id="arrow1" /></a>
            </div>
        </div>
        <div class="view" id="view2">
            <!-- Design -->
            <div class="dbzpanel">
                <div class="panelrect" id="panel1">
                    <div class="panelpadding">
                        <h1>Compelling Design</h1>
                        <h2>Simple. Flexible. Elegant.</h2>
                        <p>Design is at the core of what we do at DBZ Technology. We focus heavily on user experience and interaction to make sure your organization's new website is easy to understand and use both on a user and administrator standpoint. Once you purchase a DBZ Technology designed website we update it for free. We strive to make your organization known and we strongly and thoroughly incorporate your brand in everything we create. Don't have a brand? No problem! DBZ Technology is more than happy to work with your organization to develop strong branding and design elements for future products. Once we create a brand we make sure you get the vector files, colors, and logos so that you can develop your brand later with no haste.</p>
                        <a href="/Design" class="btn btn-success viewbutton"><span class="glyphicon glyphicon-pencil roundbuttonicon"></span><br />Design</a>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner.svg" class="panelcorner" alt="Corner" />
            </div>
            <div class="ribbon"></div>
        </div>
        <div class="view" id="view3">
            <!-- Technology -->
            <div class="dbzpanel panelleft" style="">
                <div class="panelrect" id="panel2">
                    <div class="panelpadding">
                        <h1>Technology Experts</h1>
                        <h2>Website Development, Programming, and Computer consulting one click away</h2>
                        <p>DBZ Technology also specializes in end to end product solutions. Weather your computer needs a quick tune up or you need a web application designed to handle massive amounts of data, DBZ Technology is always there for support. We work with you one on one to ensure that our solution fits your needs perfectly. Let's say that you need a new IT infrastructure as cheaply as possible. No Problem! DBZ Technology can analyze your current situation, make a plan, build new computers for almost 50% off retail, make the switch in under 3 days, and transfer all of your information to the new system.</p>
                        <a href="/Technology" class="btn btn-success viewbutton"><span class="glyphicon glyphicon-flash roundbuttonicon"></span><br />Technology</a>
                    </div>
                </div>
                <img src="Resources/Images/PanelCorner2.svg" class="panelcorner panelcornerleft" alt="Corner" />
            </div>
            <div class="ribbon" style="height:50px;"></div>
            <div class="ribbon" style="left: 0px; margin-top: 250px; height: 350px;"></div>
            <div class="ribbon horizontal" style=""><div class="block" style="width: 283px;"><img src="Resources/Images/FoldDown.svg" alt="Fold Down" style="margin-left: 83px" /></div><div class="block" style="width: 283px; float: right; margin-top: -200px;"><img src="Resources/Images/FoldLeft.svg" alt="Fold Left" style="margin-right: 83px" /></div></div>
        </div>
        <div class="view" id="view4">
            <!-- Innovation -->
            <!--<a href="/Innovation" class="btn btn-success viewbutton"><span class="glyphicon glyphicon-certificate roundbuttonicon"></span><br />Innovation</a>-->
            <h1 class="viewtitle">Innovation</h1>
        </div>
        <div class="view" id="view5">
            <!-- Apps -->
            <a href="/Apps" class="btn btn-success viewbutton mainviewbutton"><h1 class="viewtitle"><span class="glyphicon glyphicon-phone roundbuttonicon"></span>Apps Made Simple</h1></a>
            <br />
            <img src="/Resources/Images/iPhone.png" class="apple iphone" alt="iPhone Website" />
            <img src="/Resources/Images/iPhone-Overwatch.png" class="apple iphone" alt="iPhone Website" />
            <img src="/Resources/Images/iPad.png" class="apple ipad" alt="iPad Website" />
            <img src="/Resources/Images/iPad-Overwatch.png" class="apple ipad" alt="iPad Website" />
        </div>
        <div class="view" id="view6">
            <!-- Portfolio -->
            <!--<a href="/Innovation" class="btn btn-success viewbutton"><span class="glyphicon glyphicon-certificate roundbuttonicon"></span><br />Innovation</a>-->
            <h1 class="viewtitle">Portfolio</h1>
        </div>
    </body>
</html>
