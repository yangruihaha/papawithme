<?php
class HomeAction extends Action {

    public function index(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		$this->display();
		$this->display('menu');
    }
	
	public function logout(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		session('name', null);
		redirect('index', 0, '页面跳转中...');
	}
	
	public function login(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		$this->display();
		$this->display('menu');
	}
	
	
	public function register(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		$this->display();
		$this->display('menu');
	}
}