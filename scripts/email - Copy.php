<?php

$name = trim($_POST['full_name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$website = trim($_POST['website']);
$_message = trim($_POST['message']);
if ($name == "") {
    $msg['err'] = "\n Full name can not be empty!";
    $msg['field'] = "full_name";
    $msg['code'] = FALSE;
} else if ($email == "") {
    $msg['err'] = "\n Email can not be empty!";
    $msg['field'] = "Email";
    $msg['field'] = "email";
    $msg['code'] = FALSE;
} else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $msg['err'] = "\n Please put a valid email address!";
    $msg['field'] = "email";
    $msg['code'] = FALSE;
} else if ($phone == "") {
    $msg['err'] = "\n Phone number can not be empty!";
    $msg['field'] = "phone";
    $msg['code'] = FALSE;

} else if ($website == "") {
    $msg['err'] = "\n Website can not be empty!";
    $msg['field'] = "website";
    $msg['code'] = FALSE;
} else if ($_message == "") {
    $msg['err'] = "\n Message can not be empty!";
    $msg['field'] = "message";
    $msg['code'] = FALSE;
} else {
    $to = 'Usama@softworld.com.pk';
    $subject = 'Contact Query';
    $message = '<html><head></head><body>';
    $message .= '<p>Name: ' . $name . '</p>';
    $message .= '<p>Email: ' . $email . '</p>';
    $message .= '<p>Phone: ' . $phone . '</p>';
    $message .= '<p>Website: ' . $website . '</p>';
    $message .= '<p>Message: ' . $_message . '</p>';
    $message .= '</body></html>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:  Digital Marketo <saqib@softworld.com.pk>' . "\r\n";
    mail($to, $subject, $message, $headers, '-f hamza@softworld.com.pk');

    $msg['success'] = "\n Email has been sent successfully";
    $msg['code'] = TRUE;
}
echo json_encode($msg);
