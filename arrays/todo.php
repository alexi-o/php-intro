<?php
$contacts[] = array('name' => 'Alena Holligan',
                    'email' => 'alena.holligan@teamtreehouse.com');
$contacts[] = array('name' => 'Dave McFarland',
                    'email' => 'dave.mcfarland@teamtreehouse.com');
$contacts[] = array('name' => 'Treasure Porth',
                    'email' => 'treasure.porth@teamtreehouse.com');
$contacts[] = array('name' => 'Andrew Chalkley',
                    'email' => 'andrew.chalkley@teamtreehouse.com');

echo "<ul>\n";
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo "<li>$contacts[0]['name']</li>\n";
echo "<li>$contacts[1]['name']</li>\n";
echo "<li>$contacts[2]['name']</li>\n";
echo "<li>$contacts[3]['name']</li>\n";
echo "</ul>\n";


?>