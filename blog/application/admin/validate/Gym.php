<?php
namespace app\admin\validate;
use think\Validate;

class Gym extends Validate {
    //这个验证器的规则在模型Family中去调用
    protected $rule=[
        'gym_item'=>'require',
        //数字的排序规则'family_relation'=>'number|between:1,9999,
        'gym_time'=>'require',
        'gym_result'=>'require'
    ];
    protected $message=[
        'gym_item.require'=>'请填学习任务',
        'gym_time.require'=>'请填写完成任务时间',
        'gym_result.require'=>'请填写到达的效果'
    ];
}