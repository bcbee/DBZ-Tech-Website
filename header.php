<!doctype html>
<!-- This site was written and developed by Brendan Boyle of DBZ Technology -->
<!-- This site is being served through Microsoft Azure -->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/CSS/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/CSS/styles.css" />
        <script async src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script async src="/CSS/bootstrap/js/bootstrap.min.js"></script>
        <script async src="/JS/scripts.js"></script>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title><?php echo 'DBZ Technology | '.$title; ?></title>
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
        <div class="header">
            <!--<a href="<?php echo $back; ?>" class="back"><img src="/Resources/Images/Back.svg" alt="Back" class="back" /></a>-->
            <a href="/" class="logo contentlogo">
                <h1>DBZ</h1>
            </a>
            <?php include('navbuttons.php'); ?>
        </div>
        <div class="content">
