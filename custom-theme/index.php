<?php
// Include header
include 'header.php';

// PHP dynamic greeting
date_default_timezone_set('Asia/Kolkata');
$hour = date("H");

if ($hour < 12) {
    $greeting = "Good Morning! Welcome to My Custom WordPress Theme";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon! Welcome to My Custom WordPress Theme";
} else {
    $greeting = "Good Evening! Welcome to My Custom WordPress Theme";
}

// Display greeting in H1
echo "<h1 id='greeting'>$greeting</h1>";

// Include main content
include 'main-content.php';

// Include footer
include 'footer.php';
?>
