<?php

	$db->query("select lower(shortname) as shortname, name from country");
	foreach($db->result as $key => $value) {
		echo $value['shortname'];
	}
?>