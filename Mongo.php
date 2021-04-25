<?php 

	$mongo = new MongoClient();

	echo "Connection success";

	$db = $mongo->Movie;

	echo "Database ".$db;

?>