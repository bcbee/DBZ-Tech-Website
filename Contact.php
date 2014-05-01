<?php
include('classes.php');
include('contactconfig.php');
$title = "Contact";
$back = "/";
include('header.php');
?>

<div id="contact">
    <h1 class="pagetitle">Contact DBZ Technology</h1>
    <form method="post" role="form" id="contactform" action="/Contact">
        <select class="form-control" name="subject" required>
          <option>Request a Quote</option>
          <option>Ask a Question</option>
          <option>Other</option>
        </select>
        <br />
        <br />
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