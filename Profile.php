<?php
include('classes.php');
$title = "Profile";
#$back = "/".$_GET['back'].".php";
$back = "/"
include('header.php');
?>

<div id="profile" style="background: white; width: 100%; height: 900px;">
    <div class="card" style="margin-left: -100px;">
        <h1>Bio</h1>
        <p>Coming Soon.</p>
    </div>
    <div class="card">
        <h1>Qualifications</h1>
        <h2>Languages:</h2>
        <p>PHP, HTML 5, CSS 3, JavaScript, MySQL, Java, C (#, ++, Objective)</p>
        <a class="button longbutton" href="/Resources/Files/Resume.pdf">Resum&#234;</a>
    </div>
    <div class="card">
        <h1>Portfolio</h1>
        <a class="button longbutton" href="#">All</a>
        <a class="button longbutton" href="#">Design</a>
        <a class="button longbutton" href="#">Computer Creation</a>
        <a class="button longbutton" href="#">Computer Repair</a>
        <a class="button longbutton" href="#">IT Solutions</a>
    </div>
    <div class="card">
        <h1>Twitter</h1>
        <a class="twitter-timeline" href="https://twitter.com/brendancboyle" data-widget-id="313073723370504192">Tweets by @brendancboyle</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
</div>

<?php
include('footer.php');
?>