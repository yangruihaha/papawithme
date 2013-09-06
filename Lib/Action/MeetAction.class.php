<?php
class MeetAction extends Action {
	public function preCheckIn($pre_type){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		header("Content-Type:text/html; charset=utf-8");
		if(cookie('user_name') == null){
			$this->success('请先登录', '../../../Home/login');
		}
		else{
			$UserProfile = M('UserProfile');
			$condition['user_name'] = cookie('user_name');
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
	
	public function checkIn($pre_type, $choose_type = 0){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
		
		$Meeting = M('Meeting');
		$condition['user_name'] = cookie('user_name');
		$type = 0;
		if($pre_type == 1){
			$UserProfile = M('UserProfile');
			$condition['user_name'] = cookie('user_name');
			$rs = $UserProfile->where($condition)->select();
			
			if($rs){
				if($rs[0]['profile_sex'] == '男生'){
					$type = 1;
				}
				else if($rs[0]['profile_sex'] == '女生'){
					$type = 2;
				}
				else{
					$type = 3;
				}
			}
			else{
				$this->error('读取资料失败！');
			}
		}
		else if($pre_type > 1 and $pre_type <=7){
			$type = $pre_type*2 + $choose_type;
		}
		$condition['type'] = $type;
		$this->assign('type',$type);
		
		$rs1 = $Meeting->where($condition)->select();
		
		if($rs1){
			$this->assign('meeting',$rs1[0]);
		}
		else{
			$this->assign('meeting',null);
		}
		
		$this->display();
		$this->display('../menu');
		
	}
	
	public function updateCheckIn($type){
		header("Content-Type:text/html; charset=utf-8");
		$Meeting = M('Meeting');
		$data['type'] = $type;
		$data['user_name'] = cookie('user_name');
		$data['attach0'] = $this->_param('attach0');
		$data['attach1'] = $this->_param('attach1');
		$data['attach2'] = $this->_param('attach2');
		$data['attach3'] = $this->_param('attach3');
		$data['attach4'] = $this->_param('attach4');
		$data['attach5'] = $this->_param('attach5');
		
		$condition['user_name'] = cookie('user_name');
		
		if($Meeting->add($data)){
			$this->success('数据保存成功！', '../../../Home');
		}
		else if($Meeting->where($condition)->data($data)->save()){
			$this->success('数据保存成功！', '../../../Home');
		}
		else{
			print_r($data);
			$this->error('数据保存失败，或许你什么都没有改？', '../../../Home');
		}
	}
	
	public function browse($type){
		$this->assign('appdir','http://localhost/papawithme');
		$this->assign('public','http://localhost/papawithme/' . 'Public');
	
		$Meeting = M('Meeting');
		$condition['type'] = $type;
		
		$rs = $Meeting->where($condition)->select();
		if($rs){
			$this->assign('users',$rs);
		}
		else{
			$this->assign('users',null);
		}
		
		$this->display();
		$this->display('../menu');
	}
}