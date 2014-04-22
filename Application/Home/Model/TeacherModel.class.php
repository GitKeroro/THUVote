<?php
namespace Home\Model;
use Think\Model;
class TeacherModel extends Model{
	// 定义自动验证
	protected $_validate    =   array(
			array('teacher_id','require','教师编号必须'),
			array('teacher_name','require','教师姓名必须'),
			array('teacher_department','require','教师系别必须'),
			array('introduction','require','必须要有教师简介'),
	);
	// 定义自动完成
	protected $_auto    =   array(
			array('create_time','time',1,'function'),
	);
}