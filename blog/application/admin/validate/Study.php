<?php
namespace app\admin\validate;
use think\Validate;

class Study extends Validate {
    //这个验证器的规则在模型Family中去调用
    protected $rule=[
        'study_content'=>'require',
        //数字的排序规则'family_relation'=>'number|between:1,9999,
        'study_time'=>'require',
        'study_result'=>'require'
    ];
    protected $message=[
        'study_content.require'=>'请填学习任务',
        'study_time.require'=>'请填写完成任务时间',
        'study_result.require'=>'请填写到达的效果'
    ];
}