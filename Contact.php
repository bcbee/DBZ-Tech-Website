<?php
if(mail('user@mydomain.com','test subject','test message')){
      echo('ok');
    }
else{
      echo('not ok');
    }
?>