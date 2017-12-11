<?php
	echo "<div class='container'>";
	echo header('Success',1);

	foreach ($post as $key => $value) {
		echo $key." - ".$value."<br>";
	}

	$attribute = array('class' => 'btn btn-primary');
	echo anchor('validation', 'Back', $attribute);