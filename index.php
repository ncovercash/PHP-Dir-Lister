<?php
require_once('nicklist.php');
require_once('hidelist.php');
$dir = './';
$files2 = scandir($dir);
echo 'There are ' . count($files2) . ' files and folders in this Directory.<br>They are as follows:';
foreach ($files2 as &$value) {
	if (!isset($hide[$value])) {
		echo '<br><a href="' . $value . '">' . $value . '</a>';
		if (isset($nicks[$value])){
			echo ' - ' . $nicks[$value];
		}
	}
}
