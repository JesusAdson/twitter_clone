<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_cbfe855288e3785;charset=utf8",
				"b3178c598f1128",
				"788a3376" 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>