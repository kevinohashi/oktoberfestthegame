<?php
require_once('gameheader.php');


//load game results
//strtotime totally prevents injection by sanitizing everything
$start = urldecode($_GET['start']);
$end   = urldecode($_GET['end']);
if(strpos($start,'(')>0){
	$start = substr($start, 0, strpos($start, '('));
}
$start = strtotime($start);
if(strpos($end,'(')>0){
	$end = substr($end, 0, strpos($end, '('));
}
$end = strtotime($end);

$score = $end - $start;

//get user current high score
$select = "SELECT score FROM gamescore WHERE user='".$wpuser->user_login."'";
//echo $select;
$result = $wpdb->get_var($select);
if($result==null){
	//insert result if null
	$data = array('user' => $wpuser->user_login, 'score' => $score);
    $wpdb->insert('gamescore', $data);
    echo 'NEW HIGH ';
}elseif($result>$score){
    $data = array('score' => $score);
    $where =  array('user' => $wpuser->user_login);
    $wpdb->update('gamescore', $data, $where);	
}

echo 'SCORE:'. $score . "<br />";

//echo var_dump($result);
//insert score into DB if better
require_once('gamescoreboard.php');
?>


<br /> <br />

<?php


require_once('gamefooter.php');
?>