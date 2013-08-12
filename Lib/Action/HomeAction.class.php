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
	
	public function profile(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
	
		$UserProfile = M('UserProfile');
		$condition['user_name'] = session('name');
		$rs = $UserProfile->where($condition)->select();
		
		if($rs){
			$this->assign('profile',$rs[0]);
		}
		else{
			$this->assign('profile',null);
		}
		$this->display();
		$this->display('menu');
	}
	
	public function editProfile(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
	
		$UserProfile = M('UserProfile');
		$condition['user_name'] = session('name');
		$rs = $UserProfile->where($condition)->select();
		
		if($rs){
			$this->assign('profile',$rs[0]);
		}
		else{
			$this->assign('profile',null);
		}
		$this->display();
		$this->display('menu');
	}
	
	public function updateProfile(){
		header("Content-Type:text/html; charset=utf-8");
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/'.session('name').'/head/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
			//$this->error($upload->getErrorMsg());
			$data['profile_head'] = 0;
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
			$data['profile_head']  = $info[0]['savename']; // 保存上传的照片根据需要自行组装
		}
		// 保存表单数据 包括附件数据
		$UserProfile = M('UserProfile'); // 实例化User对象		
		$data['profile_name'] = $this->_param('profile_name');
		$data['profile_sex'] = $this->_param('profile_sex');
		$data['user_name']  = session('name');
		$data['profile_motto']  = $this->_param('profile_motto');
		$data['profile_skill']  = $this->_param('profile_skill');
		$data['profile_hobby']  = $this->_param('profile_hobby');
		$data['profile_now']  = $this->_param('profile_now');
		$data['profile_department']  = $this->_param('profile_department');
		$data['profile_birthday']  = $this->_param('profile_birthday');
		$data['profile_autobiography']  = $this->_param('profile_autobiography');
		
		$condition['user_name'] = session('name');
		
		if($UserProfile->add($data)){
			$this->success('数据保存成功！', 'profile');
		}
		else if($UserProfile->where($condition)->data($data)->save()){
			$this->success('数据保存成功！', 'profile');
		}
		else{
			$this->error('数据保存失败！');
		}
	}
}