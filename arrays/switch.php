<?php
switch (date('l')) {
	case 'Monday':
		echo 'Wash on Monday';
		break;
	case 'Tuesday':
		echo 'Rest on Tuesday';
		break;
	case 'Wednesday':
		echo 'Bake on Wednesday';
		break;
	case 'Thursday':
		echo 'Eat on Thursday';
		break;
	default:
		echo 'I do not know the day';
		break;
}

?>