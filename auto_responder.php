
<?php

/**
* 
*/
class AutoResponder {
	
	function __construct(argument)
	{
		# code...
	}
}
//testing purposes wamp server 
include_once($_SERVER['DOCUMENT_ROOT'].'/jmmdistributor/wp-config.php' );
//real credentials
// include_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php' );
global $wpdb;

 // function select(){
 $result = $wpdb->get_results( "SELECT * FROM loosefat_emails");//returns an array
 $date = date("Y-m-d H:i:s");//current date time for comparison
 
 if ($result){ 	
 	foreach ($result as $results) {//looping thru results
	 	$time = $wpdb->get_var( "SELECT DATEDIFF('$results->date','$date')");//getting comparison from database

	 	// Need to implement timing intervals here or compare to database
	 	if ($time < 1){
	 	echo $results->email;
	 	echo "</br>";
	 	}
 	
 
 


}
}



?>