<?php
if (isset($_POST['name'])) {
    
    require_once('recaptchalib.php');
    $resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
    if (!$resp->is_valid) {
        // What happens when the CAPTCHA was entered incorrectly
        die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." ."(reCAPTCHA said: " . $resp->error . ")");
    } else {
        // Your code here to handle a successful verification
        $name = $_POST['name'];
        $email = $_POST['from'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
    
        #echo $name.$email.$message.$subject;
        
        //create array of data to be posted
        $post_data['to'] = 'brendancboyle@me.com';
        $post_data['sub'] = 'DBZ Website Contact';
        $post_data['sk'] = $dbzmailsk;
        $post_data['msg'] = $subject." (".$name.", ".$email."): ".$message;
         
        //traverse array and prepare data for posting (key1=value1)
        foreach ( $post_data as $key => $value) {
            $post_items[] = $key . '=' . $value;
        }
         
        //create the final string to be posted using implode()
        $post_string = implode ('&', $post_items);
         
        //create cURL connection
        $curl_connection = 
          curl_init('http://dbzmailserver.appspot.com');
         
        //set options
        curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl_connection, CURLOPT_USERAGENT, 
          "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
        curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
         
        //set data to be posted
        curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
         
        //perform our request
        $result = curl_exec($curl_connection);
         
        //show information regarding the request
        #print_r(curl_getinfo($curl_connection));
        #echo curl_errno($curl_connection) . '-' . 
                        curl_error($curl_connection);
         
        //close the connection
        curl_close($curl_connection);
        echo "Message Sent!";
    }
}

?>