<?php
class MeetAction extends Action {
	public function preCheckIn($pre_type){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		header("Content-Type:text/html; charset=utf-8");
		if(session('name') == null){
			$this->success('请先登录', '../Home/login');
		}
		else{
			$UserProfile = M('UserProfile');
			$condition['user_name'] = session('name');
			$rs = $UserProfile->where($condition)->select();
			
			if($rs){				
				$this->assign('profile',$rs[0]);
				$this->assign('pre_type',$pre_type);
			}
			else{
				$this->assign('profile',null);
			}
			$this->display();
			$this->display('../menu');
		}
		
	}
	
	public function checkIn($pre_type){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		$this->assign('pre_type',$pre_type);
		
		$this->display();
		$this->display('../menu');
		
	}
	
	public function updateCheckIn($pre_type, $choose_type = 0){
		header("Content-Type:text/html; charset=utf-8");
		$Meeting = M('Meeting');
		$data['type'] = 0;
	
		if($pre_type == 1){
			$UserProfile = M('UserProfile');
			$condition['user_name'] = session('name');
			$rs = $UserProfile->where($condition)->select();
			
			if($rs){
				if($rs[0]['profile_sex'] == '男生'){
					$data['type'] = 1;
				}
				else if($rs[0]['profile_sex'] == '女生'){
					$data['type'] = 2;
				}
				else{
					$data['type'] = 3;
				}
			}
			else{
				$this->error('读取资料失败！');
			}
		}
		
		$data['user_name'] = session('name');
		$data['attach0'] = $this->_param('attach0');
		$data['attach1'] = $this->_param('attach1');
		$data['attach2'] = $this->_param('attach2');
		$data['attach3'] = $this->_param('attach3');
		$data['attach4'] = $this->_param('attach4');
		$data['attach5'] = $this->_param('attach5');
		
		$condition['user_name'] = session('name');
		
		if($Meeting->add($data)){
			$this->success('数据保存成功！');
		}
		else if($Meeting->where($condition)->data($data)->save()){
			$this->success('数据保存成功！');
		}
		else{
			print_r($data);
			//$this->error('数据保存失败！');
		}
		
	}
}