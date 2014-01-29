<?php
include('classes.php');
$title = "Consulting";
$back = "/#view3";
include('header.php');
?>

<div id="contact">
    <form method="post" role="form" id="contactform" action="/Contact">
        <div class="btn-group">
          <button type="button" class="btn btn-success">Request a Quote</button>
          <button type="button" class="btn btn-success">Ask a Qeustion</button>
          <button type="button" class="btn btn-success">Other</button>
        </div>
        <br />
        <br />
        <div class="input-group"><span class="input-group-addon">Name</span><input type="text" name="name" class="form-control" required/></div>
        <br />
        <div class="input-group"><span class="input-group-addon">Email</span><input type="text" name="from" class="form-control" required/></div>
        <h2>Message:</h2>
        <textarea class="form-control" name="message" rows="6" required></textarea>
        <br />
        <input class="form-control btn btn-success" type="submit" style="width: 200px" />
    </form>
</div>

<?php
include('footer.php');
?>