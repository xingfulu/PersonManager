<?php

namespace app\admin\controller;
//注意下面这句很重要
use app\common\model\Admin;
use houdunwang\crypt\Crypt;
use think\Controller;

class Login extends Controller
{
    //在这里我们加载的是登录页面
    public function login(){
        //将密码加密
        //echo Crypt::encrypt('shenlu');//加密结果sfotjvBB/cUR90U3F8neAg==
        //解密测试
        //echo Crypt::decrypt('sfotjvBB/cUR90U3F8neAg==');
        //测试数据库连接语句
       // $data=db('admin')->find(1);
        //dump($data);
        if(request()->isPost()){
            //halt($_POST);可以用来检测是否接受到了数据
            $res = (new Admin())->login(input('post.'));
            if($res['valid']){
                //说明登录成功
                $this->success($res['msg'],'admin/entry/index');exit;
            }else{
                //说明登录失败
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }
}
