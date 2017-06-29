<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate{
    //首先建立一个规则，验证用户名，密码以及验证码都不允许为空，并且比对验证码是否正确
    //注意admin_username，admin_password和code要和html中相应的name属性相对应
    //d当一个字段有多个验证的时时候，我们可以使用|风格开来
    protected  $rule=[
        'admin_username'=>'require',
        'admin_password'=>'require',
        'code'=>'require|captcha'
        ];
    //这个验证器处，可以添加提示信息，就是有空时进行提示。此时打印出的错误信息，就会有 这里面的内容
    protected $message=[
       'admin_username.require'=>'请填写用户名',
        'admin_password,require'=>'请填写密码',
        'code.require'=>'请填写验证码',
        'code.require'=>'验证码不正确'
    ];
}