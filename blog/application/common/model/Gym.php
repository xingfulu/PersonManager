<?php

namespace app\common\model;

use houdunwang\crypt\Crypt;
use think\Loader;
use think\Model;
use think\Validate;

class Gym extends Model{
	//这个模型是用来对添加文章表中的内容来进行测试
    //表名为：blog_study
    protected $pk = 'gym_id';//主键
    //设置当前模型对应的完整数据表的名称
    protected  $table = 'blog_gym';//表名，命名要写完整
    public function store($data){
        $validate = Loader::validate('Gym');//Admin是根据情况而变的
        //如果验证不成功
        $result = $this->validate(true)->save($data);//保存
        if(false === $result){
            // 验证失败 输出错误信息
            //dump($this->getError());
            return ['valid'=>0,'msg'=>$this->getError()];
        }else{
            //验证成功
            return ['valid'=>1,'msg'=>"添加成功"];
        }
        if(!$validate->check($data)){
            //该信息会返回我们调用该控制器的地方，即使我们的登录页面控制器处Login.php
            return ['valid'=>0,'msg'=>$validate->getError()];
            //dump($validate->getError());//如何用户名，密码，验证码有一个为空，都会把错误信息打出来
        }
	}
     public function edit($data)
    {    
        $gym_id=input('param.gym_id');
        //cate_id=10
        $result = $this->validate(true)->save($data,[$this->pk=>$gym_id]);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
    //删除学习任务
    public function del($gym_id){
    $arc_pid=$this->where('gym_id',$gym_id)->value('gym_id');
   // halt($famlily_pid);
    if(Gym::destroy($gym_id)){
        return ['valid'=>1,'msg'=>'删除成功'];
    }else{
        return ['valid'=>0,'msg'=>'删除失败'];
    }
    }
}