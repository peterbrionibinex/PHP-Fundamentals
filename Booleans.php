<?php

/* Booleans  */

$normalBool = true;
$anotherBool = false;

var_dump($normalBool);
var_dump($anotherBool);

$hasValue = 1234;
var_dump((bool)$hasValue);
$hasValue = "";
var_dump((bool)$hasValue);
$hasValue = 0;
var_dump((bool)$hasValue);

/* These other values will evalutate to false;

- An empty array
- An object with no values or functions
*/
