<?php

require_once "config/config.php";

$input = file_get_contents('php://input');

$decode = json_decode($input, true);



$fullname =  trim($decode['fullName']);
if (!preg_match_all("/^[a-zA-Z]+/", $fullname)) {
  exit;
}
$fullname = htmlspecialchars($fullname);

$email = trim($decode['email']);
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
if (!preg_match($pattern, $email)) {
  exit;
}
$email = htmlspecialchars($email);


$body = trim($decode['messageBody']);
$body = htmlspecialchars($body);

$trackingId = $decode['trackingId'];


/***************************************************************************************************************** */
$sql = "INSERT INTO nexicontact (fname,email, message,trackingid) VALUES (:fullname, :email, :body,:trackingId)";

if ($stmt = $pdo->prepare($sql)) {
  // Bind variables to the prepared statement as parameters
  $stmt->bindParam(":fullname", $param_fullname, PDO::PARAM_STR);
  $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
  $stmt->bindParam(":body", $param_body, PDO::PARAM_STR);
  $stmt->bindParam(":trackingId", $param_trackingId, PDO::PARAM_STR);
  // Set parameters
  //$param_email = $email;
  $param_fullname = $fullname;
  $param_email = $email;
  $param_body = $body;
  $param_trackingId = $trackingId;

  $res = $stmt->execute();
  $df = $pdo->lastInsertId();
  $stmt = $pdo->prepare("SELECT trackingid FROM nexicontact WHERE nexicontactid = '$df' ");
  $stmt->execute();
  //$stmt->execute([$df]);
  $user[] = $stmt->fetch();
  echo json_encode($user);
  // Attempt to execute the prepared statement
  if ($res) {
    // Redirect to product page
    // header("location:../");
  } else {
    echo "Something went wrong. Please try again later.";
  }

  // Close statement


  unset($stmt);
}


// Close connection
unset($pdo);


/*************************************************************************************************************** *
$to = 'egwuaka@icloud.com';
$subject = "You have a new Message";

$message = '<html><body>';
$message .= '<h1 style= "color:#f40;">Hi, You have a New message</h1>';
$message .= '<p style= "color:#f40;">' . $fullname . $body . $trackingId  . '</p>';
$message  .= '</body></html>';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859' . "\r\n";
$headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
$sendmail = mail($to, $subject, $message, $headers);
if ($sendmail) {
  // header("location:../");
}
 */
