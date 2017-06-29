<?php

namespace app\admin\controller;

use think\Controller;

class Note extends Controller
{
	protected $db;
    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->db=new \app\common\model\Note();
    }
	public function note(){
		$field=db('note')->select();
        //halt($field);能打印出来证明已经找到了表
        $this->assign('field',$field);//
		return $this->fetch();
	}
	public function add(){
		if(request()->isPost()) {//j检测是否是post提交
            //halt(input('post.'));测处是否接受到用户提交过来的表单
            //如果是post提交请求model下的Admin模型
            $res = $this->db->store(input('post.'));
            if($res['valid']){
                //操作成功
                $this->success($res['msg'],'note');exit;
            }else{
                $this->error($res['msg']);exit;
            }
        }
		return $this->fetch();
	}
    public function update(){
        $note_id=input('param.note_id');
        //halt($arc_id);测试是否获得要编辑的编号
        //获取旧数据
        $oldDate=db('note')->where('note_id',$note_id)->find();//获得编号为1的所有旧数据
        //halt($$oldDate);
        //把我们获得的所有旧数据分配到页面上,用assign
        $this->assign('oldDate',$oldDate);//

         if(request()->isPost()) {//j检测是否是post提交
            //halt(input('post.'));//测处是否接受到用户提交过来的表单
            //如果是post提交请求model下的Admin模型
            $res = $this->db->edit(input('post.'));
            if($res['valid']){
                //操作成功
                $this->success($res['msg'],'note');exit;
            }else{
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }

    public function del(){
         //此处接受到页面上删除字段的id值
       $famlily_id=input('get.note_id');//如果不是用框架，应使用param.famlily_id
       //halt($famlily_id);
       //下面请求模型中的del方法来删除,去模型中建立一个对应的模块del去进行删除
       $res=$this->db->del(input('get.note_id'));
       if($res['valid']){
           $this->success($res['msg'],'note');exit;
       }else{
           $this->error($res['msg']);exit;
       }
    }
}