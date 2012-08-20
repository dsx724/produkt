<?php
namespace Features;

class Asset {
	use \Traits\NamedDataBinding;
	private $id;
	private $hash;
	private $type_id;
	private $asset_name;
	private $asset_description;
	private $asset_ctime;
}

?>