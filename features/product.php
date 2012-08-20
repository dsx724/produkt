<?php
namespace Features;

class Product {
	use \Traits\NamedDataBinding;
	private $id;
	private $name;
	private $description;
	private $active;
	private $mtime;
	private $ctime;
}

?>