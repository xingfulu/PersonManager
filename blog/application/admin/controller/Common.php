<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
class Common extends Controller
{
    //这是进行登录验证的公共控制器
    //public function __construct(Request $request)这是一个构造方法
    public function __construct(Request $request=null)
    {
        parent::__construct($request);
        //执行登录验证
        if(!session('admin.admin_id')){
            //只要没有登录记录，把页面固定在登录页面处
            $this->redirect('admin/login/login');
        }
    }
}
