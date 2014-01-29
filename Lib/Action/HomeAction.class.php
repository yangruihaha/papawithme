<?php
class HomeAction extends Action {

    public function index(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		$this->display();
		#$this->display('../menu');
    }
	
	public function logout(){
		cookie('user_name', null);
		redirect('index', 0, '页面跳转中...');
	}
	
	public function login(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		$this->display();
	}
	
	
	public function register(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		$this->display();
		$this->display('../menu');
	}
	
	public function profile(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
	
		$UserProfile = M('UserProfile');
		$condition['user_name'] = cookie('user_name');
		$rs = $UserProfile->where($condition)->select();
		
		$UserAttribute = M('UserAttribute');
		$rs1 = $UserAttribute->where($condition)->select();
		
		if($rs and $rs1){
			$this->assign('profile',$rs[0]);
			$this->assign('attribute',$rs1[0]);
		}
		else{
			$this->assign('profile',null);
		}
		$this->display();
		$this->display('../menu');
	}
	
	public function editProfile(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
	
		cookie('ref_url', $this->_server('HTTP_REFERER'));
	
		$UserProfile = M('UserProfile');
		$condition['user_name'] = cookie('user_name');
		$rs = $UserProfile->where($condition)->select();
		
		if($rs){
			$this->assign('profile',$rs[0]);
		}
		else{
			$this->assign('profile',null);
		}
		$this->display();
		$this->display('../menu');
	}
	
	function create_folders($dir){  return is_dir($dir) or ($this->create_folders(dirname($dir)) and mkdir($dir, 0777));  }
	
	public function updateProfile(){
		header("Content-Type:text/html; charset=utf-8");
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/'.cookie('user_name').'/head/';// 设置附件上传目录
		if(!file_exists($upload->savePath)){
			echo '创建目录';
			$this->create_folders($upload->savePath);
		}
		
		if(!$upload->upload()) {// 上传错误提示错误信息
			//$this->error($upload->getErrorMsg());
			//$data['profile_head'] = 0;
		}else{// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
			$data['profile_head']  = $info[0]['savename']; // 保存上传的照片根据需要自行组装
		}
		// 保存表单数据 包括附件数据
		$UserProfile = M('UserProfile'); // 实例化User对象		
		$data['profile_name'] = $this->_param('profile_name');
		$data['profile_sex'] = $this->_param('profile_sex');
		$data['user_name']  = cookie('user_name');
		$data['profile_motto']  = $this->_param('profile_motto');
		$data['profile_skill']  = $this->_param('profile_skill');
		$data['profile_hobby']  = $this->_param('profile_hobby');
		$data['profile_now']  = $this->_param('profile_now');
		$data['profile_department']  = $this->_param('profile_department');
		$data['profile_birthday']  = $this->_param('profile_birthday');
		$data['profile_autobiography']  = $this->_param('profile_autobiography');
		
		$condition['user_name'] = cookie('user_name');
		
		if($UserProfile->add($data)){
			$UserAttribute = M('UserAttribute');
			$attribute_data['user_name'] = cookie('user_name');
			$UserAttribute->add($attribute_data);
		
			$this->success('数据保存成功！', cookie('ref_url'));
		}
		else if($UserProfile->where($condition)->data($data)->save()){
			$this->success('数据保存成功！', cookie('ref_url'));
		}
		else{
			$this->error('数据保存失败，或许你什么都没有改？', cookie('ref_url'));
		}
	}
	
	public function editAttribute(){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
	
		$UserAttribute = M('UserAttribute');
		$condition['user_name'] = cookie('user_name');
		$rs = $UserAttribute->where($condition)->select();
		
		if($rs){
			$this->assign('attribute',$rs[0]);
		}
		else{
			$this->assign('attribute',null);
		}
		
		$this->display();
		$this->display('../menu');
	}
	
	public function updateAttribute(){
		$UserAttribute = M('UserAttribute');
		$condition['user_name'] = cookie('user_name');
		
		if($UserAttribute->where($condition)->data($this->_post())->save()){
			$this->success('数据保存成功！', 'profile');
		}
		else{
			$this->error('数据保存失败，或许你什么都没有改？');
		}
	}
}