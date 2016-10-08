<?php
require_once('gameheader.php');

//render scoreboard
$scoreboard = $wpdb->get_results( 'SELECT * FROM gamescore order by score asc', OBJECT );
//echo var_dump($scoreboard);
echo "<h2>Scoreboard</h2>";
echo "<table><th>User</th><th>Score</th>";
foreach($scoreboard as $k => $v){
	if($v->user == $wpuser->user_login){
		echo "<tr><td><strong>".$v->user."</strong></td><td>".$v->score."</td></tr>";
	}else{
		echo "<tr><td>".$v->user."</td><td>".$v->score."</td></tr>";
	}
}
echo "</table>";




?>