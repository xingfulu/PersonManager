<?php

namespace app\admin\controller;
use app\common\model\Admin;

class Entry extends Common
{
    //在这里我们加载的是后台的管理界面
    public function index(){
        //加载模板文件
        return $this->fetch();
    }
    //修改密码的模板文件
    public function pass(){
        if(request()->isPost()){//j检测是否是post提交
            //如果是post提交请求model下的Admin模型
            $res=(new Admin())->pass(input('post.'));
            if($res['valid']){
                //清除session中的登录信息
                session(null);
                //执行成功
                $this->success($res['msg'],'admin/entry/index');exit;
            }else{
                //执行失败
                $this->error($res['msg']);exit;
            }
        }
     return $this->fetch();
    }
}
