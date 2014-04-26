<!doctype html>
<!-- This site was written and developed by Brendan Boyle of DBZ Technology -->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/CSS/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/CSS/styles.css" />
        <link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 1100px)' href='/CSS/tablet.css' />
        <link rel='stylesheet' media='screen and (max-width: 700px)' href='/CSS/phone.css' />
        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script src="/CSS/bootstrap/js/bootstrap.min.js"></script>
        <script src="/JS/scripts.js"></script>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title><?php echo 'DBZ Technology | '.$title; ?></title>
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