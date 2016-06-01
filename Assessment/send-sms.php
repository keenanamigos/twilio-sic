<?php
//error_reporting(0);

// This line loads the library
require('./twilio-php-master/Services/Twilio.php');

$sid = "ACe71929620c819c5cd04edca81eaa04d7";
$token = "ecd6a2e773cba8824dbfbb4480eeece4";
$textMessage = $_POST['message'];
$phoneNumber = $_POST['p_num'];

$client = new Services_Twilio($sid, $token);
$message = $client->account->messages->sendMessage(
  '+12243024554', // From a valid Twilio number
  "$phoneNumber", // Text this number 
  "$textMessage" // Message to be sent
);

print "{$message->sid}<br />'$textMessage' has been successfully sent to $phoneNumber\n";
// echo '<span class="label-' . $variable .'">' . $variable . '</span>';

?>