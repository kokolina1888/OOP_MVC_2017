<?php 

class Page {
	public $header;
	public $title;
	public $content;
	public $footer;

	public function __construct($h, $t, $c, $f){
		$this->header = $h;
		$this->title = $t;
		$this->content = $c;
		$this->footer = $f;
	}

	// public function render_body(){
	// 	$str = '<p>'.$this->header.'</p>';
	// 	$str .= '<h1>'.$this->title.'</h1>';
	// 	$str .= '<p>'.$this->content.'</p>';
	// 	$str .= '<p>'.$this->footer.'</p>';

	// 	return $str;


	//}

	public function render_header(){
		return $this->header;
	}

	public function render_title(){
		return $this->title;
	}
}