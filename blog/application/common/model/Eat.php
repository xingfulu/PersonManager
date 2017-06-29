<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class Eat extends Model{
    //这个模型是用来对添加文章表中的内容来进行测试
    //表名为：blog_study
    protected $pk = 'breakfast_id';//主键
    //设置当前模型对应的完整数据表的名称
    protected  $table = 'blog_breakfast';//表名，命名要写完整
 public function edit($data)
    {    
        $breakfast_id=input('param.breakfast_id');
        //cate_id=10
        $result = $this->save($data,[$this->pk=>$breakfast_id]);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
}
public function edit1($data)
    {    

        $lunch_id=input('param.lunch_id');
        $lunch_food=input('param.lunch_food');
       // halt($lunch_food);
        //cate_id=10
        $result = db('lunch')->where('lunch_id',$lunch_id)->update(['lunch_food' => $lunch_food]);
         //halt($result);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
}
public function edit2($data)
    {    

        $dinner_id=input('param.dinner_id');
        $dinner_food=input('param.dinner_food');
       // halt($lunch_food);
        //cate_id=10
        $result = db('dinner')->where('dinner_id',$dinner_id)->update(['dinner_food' => $dinner_food]);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
}
}