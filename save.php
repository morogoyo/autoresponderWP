<?php

	ini_set('memory_limit', '1024M'); 
	include_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php' );
	require '../../../vendor/autoload.php';
	
	
	
	$name =$_POST['fullname'];
	$email =$_POST['email'];
	$date =date('y/m/d');

	global $wpdb;

  		//var_dump($name);
  		//var_dump($email);

		
	$wpdb-> insert('loosefat_emails',
						array(
							'name'  => $name,
							'email' => $email,
							'date'  => $date));

use SparkPost\SparkPost;
use GuzzleHttp\Client;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

$httpClient = new GuzzleAdapter(new Client());
$sparky = new SparkPost($httpClient, ['key'=>'f28b1b613717a0e3b4d9abd06b3bd1995f87e62b',"debug" => true]);
$promise = $sparky->transmissions->post([
    'content' => ['template_id' => '100-weight-loss-tips' //],//[

        ],
    'substitution_data' => ['name' => "$name"],
    'recipients' => [
        [
            'address' => [
                'name' => "$name",
                'email' => "$email",
                
            ],
        ],
    ],
]);
try {
    $response = $promise->wait();
    //echo $response->getStatusCode()."\n";
    // print_r($response->getBody())."\n";
} catch (\Exception $e) {
   //echo $e->getCode()."\n";
   //echo $e->getMessage()."\n";
}
// 		//echo "</br>script is finished"
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Thank you For your subscription</title>

 </head>
 <body>
 
 </body>
 </html>
<div class="jumbotron text-xs-center text-lg-center text-md-center text-xl-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for further instructions on how to download your FREE ebook.</p><p>Make sure to search for 100 weight loss tips</p><p>Don't forget to white-list us do you can receive more tips and trick to loosing weight </p>
  <hr>
  <!-- <p>
    Having trouble? <a href="">Contact us</a>
  </p> -->
  
</div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
 	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
  </html>