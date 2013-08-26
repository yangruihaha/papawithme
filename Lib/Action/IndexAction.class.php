<?php
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
		$condition['user_email'] = $this->_param('user_email');
		$condition['user_psd'] = $this->_param('user_psd');
		$rs = $User->where($condition)->select();
		//print_r($rs);
		//print_r($this->_param('user_id'));
		if($rs){
			cookie('user_name', $rs[0]['user_name'], 24*3600);
			$this->ajaxReturn(0,"Login Success!",1);
		}
		else{
			$this->ajaxReturn(0,"Incorrect username or password.",0);
		}
	}
	
	public function register(){
		$User = M('User');
		$data['user_name'] = $this->_param('user_name');
		$data['user_email'] = $this->_param('user_email');
		$data['user_psd'] = $this->_param('user_psd');
		
		if($User->add($data)){
			cookie('user_name', $data['user_name']);
			$this->ajaxReturn(0,"Register Success!",1);
		}
		else{
			$this->ajaxReturn(0,"Register Failed!",0);
		}
	}
}