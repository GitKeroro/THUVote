<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller{
	//学生留言
	public function LeaveMessage()
	{
		$Message = D('Message');
		//将留言信息写入think_message
		if($Message->create())
		{
			$result = $Message->add();
			if($result)
			{
				$this->success('留言成功');
			}
			else
			{
				$this->error('写入错误！');
			}
		}
		else
		{
			$this->error($Message->getError());
		}
	} 
    //学生删除留言
    public function delete($student_no='')
    {
    	$Message = D('Message');
    	$condition['student_no'] = $student_no;
    	$Message->where($condition)->delete();
    }
  
    //获取总的留言数
    public function TotalMessage()
    {
    	$Message = D('Message');
    	$this->$TotalMessage = $Message->count();
    	
    	$this->display();
    }
    
    //获取编号为teacher_id的老师的留言
    public function teacherMessage($teacher_id='')
    {
    	$Message = D('Message');
    	$condition['teacher_id'] = $teacher_id;
    	$this->teacherMessage = $Message->where($condition)->select(); 
    	
    	$this->display();
    }
       
}




