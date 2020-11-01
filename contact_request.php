<?PHP 
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact'])  && isset($_POST['services'])  && isset($_POST['time'])  && isset($_POST['message'])) {
    if ($_POST['name'] != "" && $_POST['email'] !="" && $_POST['contact'] !="" && $_POST['services'] !="" && $_POST['time'] !="" && $_POST['message'] !="" ) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $services = $_POST['services'];
        $time = $_POST['time'];
        $message = $_POST['message'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/', $contact)) {
                function password_generate($chars) 
                {
                    $data = 'QWERTYUIOPASDFGHJKLZXCVBNM12345678901234567890123456789QWERTYUIOPASDFGHJKLZXCVBNM';
                    return substr(str_shuffle($data), 0, $chars);
                }
                $request_id = "V-Help".date("Y").password_generate(6);
                /* ---------- Email Sending  ---------- */
                $subject = 'Service Request';
                $from = $email;
                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                // Create email headers
                $headers .= 'From: '.$from."\r\n".
                            'Reply-To: '.$from."\r\n" .
                            'X-Mailer: PHP/' . phpversion();
                // Compose a simple HTML email message
                $body ='
                            Service Request for <b> '.$services.'</b>
                            <br/><br/>
                            Service Request Id <b> '.$request_id.';</b>
                            <br/><br/>
                                Customer Name :'.$name.'
                            <br/><br/>
                                Customer Email : '.$email.'
                            <br/><br/>
                                Customer Phone :  '.$contact.'
                            <br/><br/>
                                Contact Timings : '.$time .'
                            <br/><br/>
                                Requirements : '.$message.'
                            <br/><br/>
                ';
                //Service_Request_Mail($name,$email,$contact,$services,$time,$message,$request_id);
                if (mail('g.jayachandramohan@gmail.com',$subject,$body,$headers)) {
                    $subjec_2 = 'Request Confirmation';
                    $from_2 = 'vhelp.2serveu@gmail.com';
                    // To send HTML mail, the Content-type header must be set
                    $headers_2  = 'MIME-Version: 1.0' . "\r\n";
                    $headers_2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    // Create email headers
                    $headers_2 .= 'From: '.$from_2."\r\n".
                                'Reply-To: '.$from_2."\r\n" .
                                'X-Mailer: PHP/' . phpversion();
                    // Compose a simple HTML email message
                    $body_2 = '
                        Dear Customer,<br><br>
                            Thank You for contacting VHelp. Were working on your request with service  '.$services.', We will get back to you within 8 business hours. (Monday to Saturday 9am to 6pm).
                            <br/><br/>
                            <br/><br/>
                            Request Id : '.$request_id.'
                            <br/><br/>
                            You can also contact us on below numbers during the business hours.<br>
                            <br/><br/>
                            Mobile No : 8790546457
                            <br/>
                            Whatsapp  : 9110707105
                            <br/><br/>
                            Thank you so much.
                            <br/><br/>
                            Regards,
                            VHelp Team
                            <br/><br/>
                    ';//Response_Mail($services,$request_id);
                    mail($email,$subject_2,$body_2,$headers_2);
                    echo "Thank you. We will contact soon,Check your email";
                }else {
                    echo "Failed try again!";
                }
                /* -------- End Email Sending  -------- */
            }else{
                echo 'Invalid Number!';
            }
        } else {
            echo $email." is not a valid email address";
        }
    } else {
        echo "* All fields must be filed!";
    }
}
