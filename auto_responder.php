
<?php

/**
* 
*/


include_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php' );
	require '../../../vendor/autoload.php';

//testing purposes wamp server 
//include_once($_SERVER['DOCUMENT_ROOT'].'/jmmdistributor/wp-config.php' );

global $wpdb;

 // function select(){
 $result = $wpdb->get_results( "SELECT * FROM loosefat_emails");//returns an array
 $date = date("Y-m-d H:i:s");//current date time for comparison
 
 if ($result){ 	
 	foreach ($result as $results) {//looping thru results
	 	$time = $wpdb->get_var( "SELECT DATEDIFF('$date','$results->date')");//getting comparison from database
	 	var_dump($time);
	 	// Need to implement timing intervals here or compare to database
	 	if ($time == 5 ){
	 		$day = 5;
		 	echo " day 5";
		 	echo "</br>";
	 	}elseif ($time == 4 ) {
		 	$day = 4;
		 	echo "day 4";
		 	echo "</br>";
	 	}elseif ($time == 3 ) {
		 	$day = 3;
		 	echo "day 3";
		 	echo "</br>";
	 	}elseif ($time == 2 ) {
		 	$day = 2;
		 	echo "day 2";
		 	echo "</br>";
	 	}elseif ($time == 1 ) {
		 	$day = 1;
		 	echo "day 1";
		 	echo "</br>";
	 	}else {
	 		$day = 5;
	 		echo "campaign is done";
	 	}
 	
 }
}



$email_table = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."email_templates where days = {$day} ");//returns an array
		
		echo $email_table->email_subject;
		foreach ($email_table as $var) {
			echo "</br>";
			//echo $var->id;
			echo "</br>";
			echo $var->email_subject;
			echo $var->email;

		}

?>