<?php
error_reporting(0);
/*
Stupid game goes here

*/


//load WP auth stuff
 
require_once 'wp-load.php';
// Before every page load
if ( ! is_user_logged_in() ) {
    // Not logged in at all... redirect to WP Login Page
    auth_redirect();
    exit(); // Exit to be safe
}/* elseif ( ! in_array( 'administrator', wp_get_current_user()->roles ) ) {
    wp_logout(); // Destroy their login session
    wp_die('You must be an administrator'); // Die with a nice error page
}*/
$wpuser = wp_get_current_user();

?>
<html>
<head>
	<link rel="stylesheet" href="gamestyle.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="game.js"></script>
</head>
<?php
echo '<body>';
echo '<h1>OKTOBERFEST The Game</h1>';
echo 'Welcome... ' . $wpuser->user_login . '<br />';




?>

<a href="game2.php">Play!</a> | <a href="gamescoreboard.php">Scoreboard</a>
<br /><br />