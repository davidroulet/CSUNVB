<?php
/**
 * File: testExample
 * Author: X.Carrel
 * Date: Feb 2020
 **/

require "../drugModel.php";

$drugs = getDrugItems();
var_dump ($drugs);
echo "Il y a ".count($drugs)." fiches";

?>