<?php
//create a function for genrate random numbers
function genrate_rand_with_name($name){

	return $name." ".mt_rand(6, 15);

}

echo genrate_rand_with_name("Osama");


?>