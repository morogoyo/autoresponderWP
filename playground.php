<?php

 function testFunction(){
	return "the function passed in to the variable";
}

$test = testFunction();
//echo $test;




function test2($v){
	 return $v;
}


echo test2(testFunction());






















?>