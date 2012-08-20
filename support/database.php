<?php
namespace Support;

class Database {
	public static function get($db,$host=null,$user=null,$pass=null){
		if (is_array($db) && is_null($host) && is_null($user) && is_null($pass)){
			$host = isset($db['host']) ? $db['host'] : $db[1];
			$user = isset($db['user']) ? $db['user'] : $db[2];
			$pass = isset($db['pass']) ? $db['pass'] : $db[3];
			$db = isset($db['db']) ? $db['db'] : $db[0];
		}
		//check to make sure all parameters are present
		$handle = new \PDO('mysql:dbname='.$db.';host='.$host,$user,$pass,array(PDO::ATTR_PERSISTENT => true));
		$handle->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
		return $handle;
	}
}

?>