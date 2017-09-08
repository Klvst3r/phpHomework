<?php

//Code that will allow us to make the validations of the fields from the form by the post method
/**
 * Function used to validate and clean a field
 * @param input $campo It has to be type field POST
 * @return string
 */

function validate_field($field){

	$field = trim($field);

	$field = stripcslashes($field);

	$field = htmlspecialchars($field);


	return $field;

}