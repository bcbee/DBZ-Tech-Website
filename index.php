<?php $title = "Home"; include('classes.php'); ?>
<!doctype html>
<!-- This site was written and developed by Brendan Boyle of DBZ Technology -->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/CSS/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/CSS/styles.css" />
        <script async src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script async src="/CSS/bootstrap/js/bootstrap.min.js"></script>
        <script async src="/JS/scripts.js"></script>
        <script async src="/JS/index.js"></script>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="msvalidate.01" content="59E1BC42B9D918F982BBB8F8BF6E4F6F" />
        <title>DBZ Technology | Home</title>
        <?php include('pingdom.php'); ?>
        <!--
        To collect end-user usage analytics about your application,
        insert the following script into each page you want to track.
        Place this code immediately before the closing </head> tag,
        and before any other scripts. Note that it may take up to 15
        minutes to process and display information here after
        instrumenting and opening your web page.
        -->
        <script type="text/javascript">
            window.appInsights=window.appInsights||function(ai){
                function f(t){ai[t]=function(){var i=arguments;ai.queue.push(function(){ai[t].apply(ai,i)})}}
                var t=document,r="script",u=t.createElement(r),i;for(u.src=ai.url||"//az416426.vo.msecnd.net/scripts/a/ai.0.js",t.getElementsByTagName(r)[0].parentNode.appendChild(u),ai.cookie=t.cookie,ai.queue=[],i=["Event","Exception","Metric","PageView","Trace"];i.length;)f("track"+i.pop());
                return ai;
            }({
                iKey:"8d9c0114-1521-4d44-a19d-44e9df4897b3"
            });

            appInsights.trackPageView();
        </script>
    </head>
    <body onload="load();">
        <?php include('analyticstracking.php'); ?>
        <div class="header" style="display: none;">
            <a href="/" class="logo contentlogo">
                <h1>DBZ</h1>
            </a>
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
                        <p>Design is at the core of what we do at DBZ Technology. We focus heavily on user experience and interaction to make sure your organization's new website is easy to understand and use, both from a user and administrator standpoint. We strive to make your organization known and we strongly and thoroughly incorporate your brand into everything we create. Don't have a brand? No problem! DBZ Technology is more than happy to work with your organization to develop strong branding and design elements for future products. Once we create a brand, we make sure you get the vector files, colors, and logos so that you can develop your brand later with no hassle.</p>
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
                        <p>DBZ Technology also specializes in end-to-end product solutions. Whether your computer needs a quick tune up or you need a web application designed to handle massive amounts of data, DBZ Technology is always there for support. We work with you one-on-one to ensure that our solution fits your needs perfectly. Let's say that you need a new IT infrastructure with minimal cost. No Problem! DBZ Technology can analyze your current situation, make a plan, build new computers for almost 50% off retail, make the switch in under 3 days, and transfer all of your information to the new system.</p>
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
            <a href="/Innovation" class="btn btn-success viewbutton mainviewbutton centerviewbutton"><h1 class="viewtitle"><span class="glyphicon glyphicon-certificate roundbuttonicon"></span>Always Innovating</h1></a>
            <br />
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
    </body>
</html>
