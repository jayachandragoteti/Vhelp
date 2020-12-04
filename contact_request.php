<?PHP 
$connect = mysqli_connect("localhost","qp5uwu6wq87f","Girish@falcon5","Vhelp");
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
                $V_Help_email="vhelp.2serveu@gmail.com";
                $insert = mysqli_query($connect,"INSERT INTO `ServiceRequests`(`name`, `email`, `contact`, `services`, `time`, `message`, `request_id`) VALUES ('$name','$email','$contact','$services','$time','$message','$request_id')");
                if($insert){
                    /* ---------- Email Sending  ---------- */
                    $toEmail_2 = $email;
                    $emailSubject_2 = 'V-Help Service Request Confirmation';
                    $headers_2 = ['From' => $V_Help_email, 'Reply-To' => $V_Help_email, 'Content-type' => 'text/html; charset=iso-8859-1'];
                    $bodyParagraphs_2 = ["Dear Customer,<br />", "Thank You for contacting VHelp. Were working on your request with service  {$services}, We will get back to you within 8 business hours. (Monday to Saturday 9am to 6pm).<br /><br />", "Request Id : {$request_id}<br /><br />","You can also contact us on below numbers during the business hours.<br/>", "Mobile No : 8790546457<br/>", "Whatsapp  : 9110707105<br/><br />", "Thank you so much.<br/>Regards,<br/> VHelp Team"];
                    $body_2 = join(PHP_EOL, $bodyParagraphs_2);
                    mail($toEmail_2,$emailSubject_2, $body_2, $headers_2);
                    /* -------- End Email Sending  -------- */
                    echo "Thank you.Your request id is {$request_id}, We will contact soon,Check your email";
                }else{
                    echo $connect -> error.'Oops, something went wrong. Please try again later';
                }
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
