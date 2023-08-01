<?php

$blockname = basename(__FILE__, '.php');
$location = get_sub_field('location');

echo "<pre>";
print_r($location);
echo "</pre>";

?>