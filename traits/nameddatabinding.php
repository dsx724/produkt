<?php
namespace Traits;

trait NamedDataBinding {
	public function __set($name,$value){
		//if (DEBUG) echo 'Setting '.$name.': '.$value.PHP_EOL;
		$name = str_replace(strtolower(__CLASS__).'_','',$name);
		$this->$name = $value;
	}
	public static function get($id){
		return \Library\PDOHandle::get(array('oltp','warehouse.lnmxops.net','oltp','XWEnyMmSqR7DatKh'));
		$class = strtolower(__CLASS__);
		
		
		$handle = new PDO('mysql:dbname=produkt;host=lessconfused.com','produkt','4Bfh3s3Kv5h5WwbQ');
		$handle->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$stmt = $handle->prepare('SELECT * FROM '.$class.'s WHERE '.$class.'_id=:id');
		$stmt->execute(array('id'=>$id));
		return $stmt->fetchObject(__CLASS__);
	}
}

?>