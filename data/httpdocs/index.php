<?php

define('DB_DATABASE', 'sample');
define('DB_USERNAME', 'cakephp');
define('DB_PASSWORD', 'password');
// hostはdocker-compose.ymlで指定したコンテナ名
define('PDO_DSN', 'mysql:host=mysql;dbname=' . DB_DATABASE);

try {
	// connect
	$db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// select
	$stmt = $db->query("select * from sample_table");
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($data as $d) {
		var_dump($d);
	}
	echo $stmt->rowCount() . " records found.";

	// disconnect
	$db = null;

} catch (PDOException $e) {
	echo $e->getMessage();
	exit;
}
