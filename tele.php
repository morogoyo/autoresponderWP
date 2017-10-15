<?php


// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "health";
// global = $conn;
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
//  if ($conn->connect_error) {
// 		    die("Connection failed: " . $conn->connect_error);
// 		} 

global $is_chrome;
var_dump($is_chrome);
function database(){


var_dump($wp);

$print = $wpdb->dbname ;
var_dump($prin);
//echo DB_USER;

$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
echo "<p>User count is {$user_count}</p>";


}
database();

?>