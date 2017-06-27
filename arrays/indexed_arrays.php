<?php
$learn = array('Conditionals','Arrays','Loops');
$learn[] = 'Build something awesome';
array_push($learn, 'Functions', 'Forms','Objects');
ksort($learn);
echo $learn[0];
// echo $learn[1];
// echo $learn;
?>
