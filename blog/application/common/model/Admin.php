<?php

namespace app\common\model;

use houdunwang\crypt\Crypt;
use think\Loader;
use think\Model;
use think\Validate;

class Admin extends Model
{    //这个模型处理的是blog_admin表中的内容
    //新建模型，来处理我们接收来的数据
    //下面的数据和我们自己所见的表要对应
    protected $pk = 'admin_id';//主键
    //设置当前模型对应的完整数据表的名称
    protected  $table = 'blog_admin';//表名，命名要写完整

    //login方法,处理由登录控制器传过来的数据
    public function login($data){
        //halt($data);检测能够连接到数据库
        //1、执行验证，需要用户验证地方，tph5处有封装,验证是否有没填写的情况
        $validate = Loader::validate('Admin');//Admin是根据情况而变的
        //如果验证不成功
        if(!$validate->check($data)){
            //该信息会返回我们调用该控制器的地方，即使我们的登录页面控制器处Login.php
            return ['valid'=>0,'msg'=>$validate->getError()];
            //dump($validate->getError());//如何用户名，密码，验证码有一个为空，都会把错误信息打出来
        }
        //2、比对用户名和密码是否正确,注意where连写表示并列
        //验证是否用户名和密码输入是否正确
        $userInfo=$this->where('admin_username',$data['admin_username'])->where('admin_password',Crypt::encrypt($data['admin_password']))->find();
        //dump($userInfo);//该处如果打印为空时，证明我们用户输入的密码，数据库中式不存在的。若返回的是对象，证明该用户存在于数据库中
        if(!$userInfo){
            //证明输出的用户名或密码是错误的
            return ['valid'=>0,'msg'=>"用户名或者密码错误"];
        }
        //3、若username和password都正确，则将用户名和密码存入session中
        //进入到此处，证明我们的用户名和验证码是正确的
        session('admin.admin_id',$userInfo['admin_id']);
        session('admin.admin_username',$userInfo['admin_username']);
        return ['valid'=>1,'msg'=>"登录成功"];
    }//登录方法结束
    //pass方法，用来修改密码的方法
    public function pass($data){
        //1、执行验证，密码是否输入，密码不应该为空，并验证两次输入的新密码是否一致
        $validate = new Validate([
            'admin_password'=>'require',
            'new_password'=>'require',
            'confirm_password'=>'require|confirm:new_password'
        ],[
            'admin_password.require'=>'请输入原始密码',
            'new_password.require'=>'请输入新的密码',
            'confirm_password.require'=>'请再次确认你输入的新密码',
            'confirm_password.confirm'=>'两次输入的密码不一致'
        ]);
        if (!$validate->check($data)) {
            //如果验证不通过，我们要给控制器返回一个标识
            return ['valid'=>0,'msg'=>$validate->getError()];
            //dump($validate->getError());
        }
        //2、原始密码是否正确,用户输入的原始密码，来和我们数据库中存入的密码继续比对
        $userInfo=$this->where('admin_id',session('admin.admin_id'))->where('admin_password',Crypt::encrypt($data['admin_password']))->find();
        if(!$userInfo){
        //如果找不到这条数据证明是错误的
            return ['valid'=>0,'msg'=>"原始密码输入错误"];
        }
        //3、如果，原始密码输入正确，开始进行进行密码修改的功能
        // save方法第二个参数为更新条件
        $res=$this->save([
            'admin_password'  => Crypt::encrypt($data['new_password'])
        ],[$this->pk => session('admin.admin_id')]);
        if($res){
            return['valid'=>1,'msg'=>'密码修改成功'];
        }else{
            return ['valid'=>0,'mst'=>'修改密码失败'];
        }
        halt($res);
    }

}
