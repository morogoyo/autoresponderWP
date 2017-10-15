<?php
/*
Plugin Name: Content input changes (form maker)
Plugin URI:
Description: Input content on short codes (in mass)
Author: Rene Torres
Author URI: http://jmmdistributor.com
Version: 1.0.0



*/



//These are the short codes needed to make changes on pages

// [headline]

//[productimage]

//[calltoaction]

//[info1]

//[info2]

//[info3]

//[info4]

//[emailform]

function morogoyo_headline(){
	
 $test = "<h1>Do You Want to Know the Truth of How to Lose Weight?</h1>";
  return $test;
}

add_shortcode("headline","morogoyo_headline");


function  morogoyo_product_display(){

	$image = "<img src='http://jmmdistributor.com/wp-content/images/ecover-weight400x601.jpg'>";
	return $image;
}

add_shortcode( "productimage", "morogoyo_product_display" );



function morogoyo_call_to_action(){
	
 $test= "<h1>Get your free copy by filling out the form below </h1>";

  return $test;
}

add_shortcode("calltoaction","morogoyo_call_to_action");





function morogoyo_email_form(){
 	
 $form  = '<form class="wpforms-field-name-first wpforms-field-required" method ="post" action="/wp-content/plugins/formMaker/save.php">';
 $form .= 'Full name:<br>';
 $form .= '<input type="text" name="fullname"><br>';
 $form .= 'Email:<br>';
 $form .= '<input type="text" name="email"><br>';
 $form .= '<input type="submit"/>';
 $form .= '</form>';
 return $form;
}

add_shortcode("emailform","morogoyo_email_form");



function morogoyo_extra_info_1(){
	
 	$info1;
  return $info1;
}

add_shortcode("info1","morogoyo_extra_info_1");


function morogoyo_extra_info_2(){
	
 	$info2;
  return $info2;
}

add_shortcode("info2","morogoyo_extra_info_2");


function morogoyo_extra_info_3(){
	
 	$info3 ;
  return $info3;
}

add_shortcode("info3","morogoyo_extra_info_3");


function morogoyo_extra_info_4(){
	
 	$info4 ;
  return $info4;
}

add_shortcode("info4","morogoyo_extra_info_4");

