<?php

namespace app\common\model;

use houdunwang\crypt\Crypt;
use think\Loader;
use think\Model;
use think\Validate;

class Show extends Model{
	//这个模型是用来对添加文章表中的内容来进行测试
    //表名为：blog_study
    protected $pk = 'show_id';//主键
    //设置当前模型对应的完整数据表的名称
    protected  $table = 'blog_show';//表名，命名要写完整
    public function store($data){
        $result = $this->save($data);//保存
        if(false === $result){
            // 验证失败 输出错误信息
            //dump($this->getError());
            return ['valid'=>0,'msg'=>$this->getError()];
        }else{
            //验证成功
            return ['valid'=>1,'msg'=>"添加成功"];
        }
	}
     public function edit($data)
    {    
        $show_id=input('param.show_id');
        //cate_id=10
        $result = $this->save($data,[$this->pk=>$show_id]);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
    //删除学习任务
    public function del($show_id){
    $arc_pid=$this->where('show_id',$show_id)->value('show_id');
   // halt($famlily_pid);
    if(Show::destroy($show_id)){
        return ['valid'=>1,'msg'=>'删除成功'];
    }else{
        return ['valid'=>0,'msg'=>'删除失败'];
    }
    }
}