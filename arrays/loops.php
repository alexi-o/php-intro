<?php
$currentYear = date('Y');
$year = $currentYear - 100;

// while($year <= $currentYear) {
// 	echo $year . "<br />\n";
// 	$year++;
// }
// do {
// 	echo $year . "<br />\n";
// } while (++$year <= $currentYear);

$learn = array('Conditionals','Arrays','Loops');
$learn[] = 'Build something awesome';
array_push($learn, 'Functions', 'Forms','Objects');

for ($i = 0; $i < count($learn); $i++){
	if(isset())
	echo $learn[$i] . "\n";
}

?>