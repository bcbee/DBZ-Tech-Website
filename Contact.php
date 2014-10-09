<?php
include('classes.php');
include('contactconfig.php');
$title = "Contact";
$back = "/";
include('header.php');
?>

<div id="contact">
    <h1 class="pagetitle">Contact DBZ Technology</h1>

    <p class="btn btn-success supportbutton" onclick="Core.hideId('supportform'); Core.hideId('genericform'); Core.showId('supportform');"><span class="glyphicon glyphicon-thumbs-up"></span> Support</p>
    <br /><br />
    <p class="btn btn-success supportbutton" onclick="Core.hideId('supportform'); Core.hideId('genericform'); Core.showId('genericform'); document.getElementById('genericformsubject').value = 'Request a Quote';  document.getElementById('genericformheader').innerHTML = 'Request a Quote';"><span class="glyphicon glyphicon-usd"></span> Request a Quote</p>
    <br /><br />
    <p class="btn btn-success supportbutton" onclick="Core.hideId('supportform'); Core.hideId('genericform'); Core.showId('genericform'); document.getElementById('genericformsubject').value = 'Ask a Question';  document.getElementById('genericformheader').innerHTML = 'Ask a Question';"><span class="glyphicon glyphicon-question-sign"></span> Ask a Question</p>
    <br /><br />
    <p class="btn btn-success supportbutton" onclick="Core.hideId('supportform'); Core.hideId('genericform'); Core.showId('genericform'); document.getElementById('genericformsubject').value = 'Other';  document.getElementById('genericformheader').innerHTML = 'Other';"><span class="glyphicon glyphicon-info-sign"></span> Other</p>

    <br />
    <br />

    <form method="post" role="form" class="contactform" id="supportform" action="/Contact">
        <script type="text/javascript" src="https://s3.amazonaws.com/assets.freshdesk.com/widget/freshwidget.js"></script>
        <style type="text/css" media="screen, projection">
            @import url(https://s3.amazonaws.com/assets.freshdesk.com/widget/freshwidget.css);
        </style>
        <iframe class="freshwidget-embedded-form" id="freshwidget-embedded-form" src="https://dbztechnology.freshdesk.com/widgets/feedback_widget/new?&widgetType=embedded&formTitle=DBZ+Technology+Support&submitThanks=We+are+incredibly+sorry+for+the+inconvenience%2C+an+agent+will+contact+you+within+two+business+days.&screenshot=no&searchArea=no" scrolling="no" height="475px" width="100%" frameborder="0" style="background: white; border-radius: 5px;" >
        </iframe>
    </form>

    <form method="post" role="form" class="contactform" id="genericform" action="/Contact">
        <input type="hidden" name="subject" id="genericformsubject" value="Generic" />
        <h1 id="genericformheader"></h1>
        <div class="input-group"><span class="input-group-addon">Name</span><input type="text" name="name" class="form-control" required/></div>
        <br />
        <div class="input-group"><span class="input-group-addon">Email</span><input type="email" name="from" class="form-control" required/></div>
        <h2>Message:</h2>
        <textarea class="form-control" name="message" rows="6" required></textarea>
        <br />
        <?php
          require_once('recaptchalib.php');// you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
        <br />
        <input class="form-control btn btn-success" type="submit" style="width: 200px; margin-bottom: 50px;" />
    </form>
</div>

<?php
include('contactprocess.php');
?>

<?php
include('footer.php');
?>
