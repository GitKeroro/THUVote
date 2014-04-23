<?php
namespace Admin\Controller;
use Think\Controller;
class VoteController extends Controller{
	//学生投票
	public function insert()
	{
		$Vote = D('Vote');
		//将投票信息写入think_vote表
		if($Vote->create())
		{
			$result = $Vote->add();
			if($result)
			{
				$this->success('投票成功');
			}
			else
			{
				$this->error('写入错误！');
			}
		}
		else
		{
			$this->error($Vote->getError());
		}
	}

    //学生修改投票信息
    public function edit($student_no = '')
    {
    	$Vote = D('Vote');
    	$condition['student_no'] = $student_no;
    	$this->data = $Vote->where($condition)->select();
  
    	$this->display();
    	
    }
    
    public function update()
    {
    	$Vote = D('Vote');
    	//将投票信息写入think_vote表
    	if($Vote->create())
    	{
    		$result = $Vote->save();
    		if($result)
    		{
    			$this->success('操作成功');
    		}
    		else
    		{
    			$this->error('写入错误！');
    		}
    	}
    	else
    	{
    		$this->error($Vote->getError());
    	}
    	
    }
    
    //学生删除投票信息
    public function delete($student_no = '')
    {
    	$Vote = D('Vote');
    	$condition['student_no'] = $student_no;
    	$Vote->where($condition)->delete();
    }
    
    //统计编号为teacher_id的老师的得票总数
    public function teacherTotalScore($teacher_id)
    {
    	$Vote = D('Vote');
    	$condition['teacher_id'] = $teacher_id;
    	$this->$Score = $Vote->where($condition)->count();
    	
    	$this->display();
   	
    }
    
    //获取编号为teacher_id 的老师的系内得票数
    public function teacherInnerScore($teacher_id = '',$teacher_department='')
    {
    	$Vote = D('Vote');
    	$condition['teacher_id']=$teacher_id;
    	$condition['teacher_department'] = $teacher_department;
    	$this->InnerScore = $Vote->where($condition)->count();
    	
    	$this->display();
    }
    
    //获取所有老师的得票总数
    public function TotalScore()
    {
    	$Vote = D('Vote');
    	$this->$TotalScore = $Vote->count();
    	
    	$this->display();
    }
    //查看学号为student_no的学生投票信息
    public function GetMyVoteInfo($student_no='')
    {
    	$Vote = D('Vote');
    	$condition['student_no'] = $student_no;
    	$this->$Info = $Vote->where($condition)->select();
    	
    	$this->display();
    }
    //获取得票数最多的10位老师
    public function GetTopTeacherInfo()
    {
    	$Vote = D('Vote');
    	$sql = 'SELECT `teacher_id`,COUNT(`teacher_id`) AS Score FROM `think_vote` GROUP BY `teacher_id` ORDER BY Score DESC LIMIT 10';
    	$this->$Rank = $Vote->query($sql);
    	
    	$this->display();
    }
    //根据student_no获取到目前为止总共的投票人数
    public function GetVoterNumber()
    {
    	$Vote = D('Vote');
    	$this->$VoterNumber = $Vote->count('DISTINCT student_no');
    	
    	$this->display();
    	
    }
    //根据student_no查询该学生已经投了几票
    public function GetAlreadyVotes($student_no = '')
    {
    	$Vote = D('Vote');
    	$condition['student_no'] = $student_no;
    	$this->$AlreadyVotesNumber = $Vote->where($condition)->count();
    	
    	$this->display();
    	
    }
    
}



