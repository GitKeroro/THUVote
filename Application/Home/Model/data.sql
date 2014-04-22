 
 /* 下面这三张表是我们THUVote中最终用到的表
  * think_message记录同学给老师的留言
  * think_vote记录着每位同学的投票信息
  * think_teacher 记录着候选老师的基本信息*/
 

/*table message
 * id 第几条留言信息
 * student_no 留言学生的学号
 * student_name 留言学生的姓名
 * teacher_id 该老师的编号
 * teacher_name 老师的姓名
 * content 留言内容
 * create_time 留言时间
*/
 CREATE TABLE IF NOT EXISTS `think_message` (
   `id`         int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student_no` char(10) NOT NULL,
  `student_name` varchar(255)  NOT NULL,
  `teacher_id` smallint(4) unsigned NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `content`      varchar(255) NOT NULL,
  `create_time`    int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
 
 
 /*table vote
  * id 第几条投票信息
  * student_no 投票学生的学号
  * student_name 投票学生的姓名
  * teacher_id 所投老师的编号
  * teacher_name 所投老师的姓名
  * student_department 学生系别
  * vote_time 投票时间
  * */
 CREATE TABLE IF NOT EXISTS `think_vote` (
  `id`          int(11) unsigned NOT NULL AUTO_INCREMENT,
  `student_no` char(10) NOT NULL,
  `student_name` varchar(255)  NOT NULL,
  `teacher_id`   smallint(4) unsigned  NOT NULL,
  `teacher_name` varchar(255)  NOT NULL,
  `student_department` smallint(4) unsigned  NOT NULL,
  `vote_time`    int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`) 
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
 
 
 /* table teacher
  * id 第 id 位教师的信息
  * teacher_id 教师的编号
  * teacher_name 教师的姓名
  * department 系别
  * introduction 教师简介
  * honor   所获得的荣誉*/
  CREATE TABLE IF NOT EXISTS `think_teacher` (
   `id`             int(11) unsigned NOT NULL AUTO_INCREMENT,
  `teacher_id`      smallint(4) unsigned NOT NULL,
  `teacher_name`    varchar(255) NOT NULL,
  `teacher_department`      varchar(255) NOT NULL,
  `introduction`    varchar(255) NOT NULL,
  `honor`           varchar(255) NOT NULL,
  `create_time`    int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
 