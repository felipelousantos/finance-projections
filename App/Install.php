<?php

namespace FinanceProjections;

use \PDO;

class Install {

    private PDO $db;

    public function __construct() {

		$this->db = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USERNAME, PASSWORD);
		$this->createTableTransactions();
    }

    public function createTableTransactions() {
		//try {
			$this->db->query('CREATE TABLE test2(abc int)');
		//} catch (PDOException $Exception) {
		//	error_log($Exception->getMessage());
		//}
    }
}

require_once 'config.php';
