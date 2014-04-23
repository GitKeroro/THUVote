<?php
namespace Admin\Controller;
use Think\Controller;
class TeacherController extends Controller{ 
    
    //获取编号为teacher_id的老师的个人信息
    public function teacherInfo($teacher_id='')
    {
    	$Teacher = D('Teacher');
    	$condition['teacher_id'] = $teacher_id;
    	$this->teacherInfo = $Teacher->where($condition)->select(); 
    	
    	$this->display();
    }
       
}




