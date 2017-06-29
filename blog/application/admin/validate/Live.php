<?php
namespace app\admin\validate;
use think\Validate;

class Live extends Validate {
    //这个验证器的规则在模型Family中去调用
    protected $rule=[
        'birthday_name'=>'require',
        //数字的排序规则'family_relation'=>'number|between:1,9999,
        'birthday_day'=>'require'
    ];
    protected $message=[
        'birthday_name.require'=>'请填写姓名',
        'birthday_day.require'=>'请填写生日'
    ];
}