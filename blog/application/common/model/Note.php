<?php

namespace app\common\model;

use houdunwang\crypt\Crypt;
use think\Loader;
use think\Model;
use think\Validate;

class Note extends Model{
 protected $pk = 'note_id';//主键
    //设置当前模型对应的完整数据表的名称
    protected  $table = 'blog_note';//表名，命名要写完整
    public function store($data){
        $result = $this->save($data);//保存
        if(false === $result){
            // 验证失败 输出错误信息
            //dump($this->getError());
            return ['valid'=>0,'msg'=>$this->getError()];
        }else{
            //验证成功
            return ['valid'=>1,'msg'=>"添加笔记成"];
        }
	}
    public function edit($data)
    {    
        $note_id=input('param.note_id');
        $note_pic=input('param.note_pic');
        $note_head=input('param.note_head');
        $note_content=input('param.note_content');
        //cate_id=10
        $result = db('note')->where('note_id',$note_id)->update(['note_pic' => $note_pic,'note_head' => $note_head,'note_content' => $note_content]);
         //halt($result);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑记事本成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
}

public  function del($note_id){
$note_pid=db('note')->where('note_id',$note_id)->value('note_id');
   // halt($famlily_pid);
    if(Note::destroy($note_id)){
        return ['valid'=>1,'msg'=>'删除成功'];
    }else{
        return ['valid'=>0,'msg'=>'删除失败'];
    }
}
}