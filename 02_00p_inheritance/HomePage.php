<?php 

class HomePage extends Page {
	
	public $banner;
	public $sidebar;
	

	public function __construct($h, $t, $b, $s, $c, $f){
		parent::__construct($h, $t, $c, $f);
		$this->banner = $b;
		$this->sidebar = $s;
		
	}

	// public function render_body(){
	// 	$str = parent::render_body();
	// 	$str .= '<p>'.$this->banner.'</p>';
	// 	$str .= '<p>'.$this->sidebar.'</p>';	

	// 	return $str;

	// }
}