<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
					$this->display();
    }
	
	public function login(){
		$User = M('User'); 
		$rs = $User->select();
		print_r($rs);
	}
}