<?php
namespace app\admin\validate;
use think\Validate;
class Eat extends Validate{
    //首先建立一个规则，验证用户名，密码以及验证码都不允许为空，并且比对验证码是否正确
    //注意admin_username，admin_password和code要和html中相应的name属性相对应
    //d当一个字段有多个验证的时时候，我们可以使用|风格开来
    protected  $rule=[
        'breakfast_food'=>'require',
        'lunch_food'=>'require'
    ];
    //这个验证器处，可以添加提示信息，就是有空时进行提示。此时打印出的错误信息，就会有 这里面的内容
    protected $message=[
        'breakfast_food.require'=>'请填写早餐',
        'lunch_food.require'=>'请填写午餐',
    ];
}