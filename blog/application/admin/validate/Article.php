<?php
namespace app\admin\validate;
use think\Validate;
class Article extends Validate{
    //首先建立一个规则，验证用户名，密码以及验证码都不允许为空，并且比对验证码是否正确
    //注意admin_username，admin_password和code要和html中相应的name属性相对应
    //d当一个字段有多个验证的时时候，我们可以使用|风格开来
    protected  $rule=[
        'arc_title'=>'require',
        'arc_address'=>'require',
        'arc_digest'=>'require',
        'arc_content'=>'require'
    ];
    //这个验证器处，可以添加提示信息，就是有空时进行提示。此时打印出的错误信息，就会有 这里面的内容
    protected $message=[
        'arc_title.require'=>'请填文章标题',
        'arc_address.require'=>'请填写文章的链接地址',
        'arc_digest.require'=>'请填写文章的摘要',
        'arc_content.require'=>'请填写文章的内容'
    ];
}