<?php
class HomeAction extends Action {
    public function index(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		$this->display();
    }
	
	public function logout(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		session('id', 0);
		redirect('index', 0, '页面跳转中...');
	}
}