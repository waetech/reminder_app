<?php require '../includes/header.php'?>
<?php

use Twilio\Rest\Client;
?>


<?php
    
$client = new Client($config['account_sid'],$config['auth_token']);

$_SESSION['code'] = $code = uniqid();

$con->query("INSERT INTO verifications(code) VALUES('$code')");
       
$client->messages->create($config['phone_number'], 17164205266, $code);
                 
       echo "<h3 class='text-center bg-success'>Your code has been sent</h3>";
           
    
?>






<?php require '../includes/footer.php'?>