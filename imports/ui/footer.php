<?php

// this line loads the library require('/path/to/twilio-php/Services/Twilio.php');

$account_sid = '<AccountSid>';
$auth_token = '<AuthToken>';
$client = new Services_Twilio($account_sid, $auth_token);

$client->account->messages->create(array(
  'To' => '<ToNumber>',
  'From' => '<FromNumber>',
  'Body' => 'Thanks for your order! On a scale of 1-10 would you recommend
             [company_name] to a friend? Reply with the number 1 to 10 to this message.',
));
?>
