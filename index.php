<?php require '../includes/header.php'?>
<?php
require __DIR__.'/../vendor/autoload.php';
use Twilio\Rest\Client;

?>




<?php
    
if(isset($_POST['submit'])){
    
   if(isset($_POST['number']) && isset($_POST['message'])){
       
       $client = new Client($config['account_sid'],$config['auth_token']);
       
       $client->messages->create($_POST['number'],
                                 array(
                                 'from'=>$config['twilio_number'], 
                                 'body'=>$_POST['message'])
                                 );
       
       echo "<h3 class='text-center bg-success'>Message sent</h3>";
       
   }
}


?>


<div class="col-sm-6 col-sm-offset-3">
    
    <form role="form" method="post">
        <div class="form-group">
            <label for="email">Phone Number</label>
            <input name="number" type="tel" class="form-control" id="number" required placeholder="Enter number">
        </div>
        <div class="form-group">
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>
        
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Send Message">
    </form>

</div>






<?php require '../includes/footer.php'?>