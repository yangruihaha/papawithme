<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	
    public function index(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		$this->display();
    }
	
	public function intro(){
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		$this->display();
	}
	
	public function login(){
		$User = M('User'); 
		$rs = $User->select();
		//print_r($rs);
		print_r($this->_param('user_id'));
	}
}