<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class Camera extends Model
{
	//这个模型是用来对添加文章表中的内容来进行测试
    protected $pk = 'photo_id';//主键
    //设置当前模型对应的完整数据表的名称
    protected  $table = 'blog_photo';//表名，命名要写完整
     public function store($data)
    {
        //halt($data);检测能够连接到数据库
        //1、执行验证
        //2、执行添加功能
        $result = $this->save($data);
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
    public function del($photo_id){
    $arc_pid=$this->where('photo_id',$photo_id)->value('photo_id');
   // halt($famlily_pid);
    if(Camera::destroy($photo_id)){
        return ['valid'=>1,'msg'=>'删除成功'];
    }else{
        return ['valid'=>0,'msg'=>'删除失败'];
    }
    }
}