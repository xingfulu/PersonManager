<?php
namespace app\admin\validate;
use think\Validate;

class Family extends Validate {
    //这个验证器的规则在模型Family中去调用
    protected $rule=[
        'famlily_name'=>'require',
        //数字的排序规则'family_relation'=>'number|between:1,9999,
        'famlily_relation'=>'require',
        'famlily_job'=>'require'
    ];
    protected $message=[
        'famlily_name.require'=>'请填写家人的名字',
        'famlily_relation.require'=>'请填写与本人的关系',
        'famlily_job.require'=>'请填写工作单位'
    ];
}