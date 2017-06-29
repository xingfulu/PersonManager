<?php

namespace app\common\model;

use think\Model;

class Family extends Model
{   //这个模型是用来对添加家庭成员信息的表中的内容来进行测试
    //表名为：blog.famliy
    protected $pk = 'famlily_id';//主键
    //设置当前模型对应的完整数据表的名称
    protected  $table = 'blog_famlily';//表名，命名要写完整
    public function store($data)
    {
        //halt($data);检测能够连接到数据库
        //1、执行验证
        //2、执行添加功能
        $result = $this->validate(true)->save($data);
        if(false === $result){
            // 验证失败 输出错误信息
            //dump($this->getError());
            return ['valid'=>0,'msg'=>$this->getError()];
        }else{
            //验证成功
            return ['valid'=>1,'msg'=>"添加成功"];
        }
    }
    //编辑数据
    public function edit($data)
    {    $famlily_id=input('param.famlily_id');
        //cate_id=10
        $result = $this->validate(true)->save($data,[$this->pk=>$famlily_id]);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
  //删除数据
public  function del($famlily_id){
$famlily_pid=$this->where('famlily_id',$famlily_id)->value('famlily_id');
   // halt($famlily_pid);
    if(Family::destroy($famlily_id)){
        return ['valid'=>1,'msg'=>'删除成功'];
    }else{
        return ['valid'=>0,'msg'=>'删除失败'];
    }
}
}
