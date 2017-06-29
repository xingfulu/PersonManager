<?php

namespace app\admin\controller;
use think\Controller;

/*
 * 家庭成员信息管理
 */
class Family extends Controller
{
    // $data=db('admin')->find(1);
    //dump($data);
    //因为有添加删除，编辑三个功能都需要都需要对Family这个模型
    //实例化，所以把实例化提出来更加方便
    protected $db;
    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->db=new \app\common\model\Family();
    }

    //首页
    public function index(){
        //获取blog_famlily表中的信息，展现在store页面上
        //tp5文档中：数据库--》查询构造器--》查询数据
        //这里使用db函数来操作
        $field=db('famlily')->select();
        //halt($field);能打印出来证明已经找到了表
        $this->assign('field',$field);//将表中数据取出，在我们的家庭成员信息列表中循环查出来的数据

    return $this->fetch();
    }
    //添加家庭成员信息的方法
    public function store(){
        if(request()->isPost()) {//j检测是否是post提交
            //halt(input('post.'));测处是否接受到用户提交过来的表单
            //如果是post提交请求model下的Admin模型
            $res = $this->db->store(input('post.'));
            if($res['valid']){
                //操作成功
                $this->success($res['msg'],'index');exit;
            }else{
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }
    //编辑方法
    public function  edit(){
        //接收要编辑的id
        $famlily_id=input('param.famlily_id');
        //halt($famlily_id);测试是否获得要编辑的编号
        //获取旧数据
        $oldDate=$this->db->find($famlily_id);//获得编号为1的所有旧数据
        //halt($$oldDate);
        //把我们获得的所有旧数据分配到页面上,用assign
        $this->assign('oldDate',$oldDate);//把旧数据取出来以后，到编辑页面上，把这些数据写
        if(request()->isPost()) {//j检测是否是post提交
            //halt(input('post.'));//测处是否接受到用户提交过来的表单
            //如果是post提交请求model下的Admin模型
            $res = $this->db->edit(input('post.'));
            if($res['valid']){
                //操作成功
                $this->success($res['msg'],'index');exit;
            }else{
                $this->error($res['msg']);exit;
            }

        }
        return $this->fetch();
    }
    //删除
   public function  del(){
       //此处接受到页面上删除字段的id值
       $famlily_id=input('get.famlily_id');//如果不是用框架，应使用param.famlily_id
       //halt($famlily_id);
       //下面请求模型中的del方法来删除,去模型中建立一个对应的模块del去进行删除
       $res=$this->db->del(input('get.famlily_id'));
       if($res['valid']){
           $this->success($res['msg'],'index');exit;
       }else{
           $this->error($res['msg']);exit;
       }
   }
}
