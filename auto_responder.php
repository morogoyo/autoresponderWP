
<?php
echo date("Y-m-d H:i:s");
echo "</br>";

//testing purposes wamp server 
include_once($_SERVER['DOCUMENT_ROOT'].'/jmmdistributor/wp-config.php' );
//real credentials
// include_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php' );
global $wpdb;

 // function select(){
 $result = $wpdb->get_results( "SELECT * FROM loosefat_emails");
 $date = date("Y-m-d H:i:s");
 echo date("d")+6;
 echo 'this is a test of date + number</br>';
 if ($result){
 	
 foreach ($result as $results) {
 	$time = $wpdb->get_var( "SELECT DATEDIFF('$results->date','$date')");
 	var_dump($time);
 	
 		if ($time < 1){
 	echo $results->email;
 	echo "</br>";
 	}
 	
 
 // 	if ($results->date < $date){
 // 		echo "the date has been compared and it fucking worked";
 // 	echo "</br>";
 	
 // } else{
 // 	echo "it didnt work";
 // }



}
}
// }


function filter_date($result){
	if ($result){
		echo "this was excecuted";
	}
}
// select();
//filter_date($result_after);







?>