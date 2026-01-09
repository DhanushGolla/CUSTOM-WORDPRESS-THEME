<?php

date_default_timezone_set('Asia/Kolkata');
$hour = date("H");

if ($hour < 12) {
    $greeting = "Good Morning! Welcome to My Custom WordPress Theme";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon! Welcome to My Custom WordPress Theme";
} else {
    $greeting = "Good Evening! Welcome to My Custom WordPress Theme";
}


file_put_contents("greeting.txt", $greeting);

if (function_exists('get_header')) {
    
    get_header();
    get_footer();
}


?>
