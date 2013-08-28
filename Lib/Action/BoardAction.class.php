<?php
class BoardAction extends Action {
	
    public function index(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		$this->display();
    }

}