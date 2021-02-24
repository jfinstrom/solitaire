<?php
namespace FreePBX\modules;
use BMO;

class Solitaire implements BMO {
	public function __construct($freepbx = null) {

	}
	public function install() {}
	public function uninstall() {}
	public function backup() {}
	public function restore($backup) {}
	public function doConfigPageInit($page) {}
	public function getActionBar($request) {
        return array();
	}
	public function ajaxRequest($req, &$setting) {
        return false;
	}
	public function ajaxHandler(){
        return false;
	}
	public function getRightNav($request) {
		$html = '';
		return $html;
	}
	
}
