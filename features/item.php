<?php
namespace Features;

class Item {
	use \Traits\NamedDataBinding;
	private $id;
	private $name;
	private $code;
	private $quantity;
	private $msrp;
	private $price;
	private $cost;
	private $mtime;
	private $ctime;
}

?>