<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class Book extends Model{
	public function edit($data)
    {    
        $moneybook_id=input('param.moneybook_id');
        $moneybook_content=input('param.moneybook_content');
        $moneybook_img=input('param.moneybook_img');
        $moneybook_time=input('param.moneybook_time');
        $moneybook_show=input('param.moneybook_show');
        //cate_id=10
        $result = db('moneybook')->where('moneybook_id',$moneybook_id)->update(['moneybook_content' => $moneybook_content,'moneybook_img' => $moneybook_img,'moneybook_time' => $moneybook_time,'moneybook_show' => $moneybook_show]);
         //halt($result);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
}
public function edit1($data)
    {   
        $internet_id=input('param.internet_id');
        $internet_content=input('param.internet_content');
        $internet_img=input('param.internet_img');
        $internet_time=input('param.internet_time');
        $internet_show=input('param.internet_show');
        // halt($lunch_food);
        //cate_id=10
        $result = db('internet')->where('internet_id',$internet_id)->update(['internet_content' => $internet_content,'internet_img' => $internet_img,'internet_time' =>$internet_time,'internet_show' =>$internet_show]);
         //halt($result);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
}
public function edit2($data)
    {   
        $up_id=input('param.up_id');
        $up_content=input('param.up_content');
        $up_img=input('param.up_img');
        $up_time=input('param.up_time');
        $up_show=input('param.up_show');
        // halt($lunch_food);
        //cate_id=10
        $result = db('up')->where('up_id',$up_id)->update(['up_content' => $up_content,'up_img' => $up_img,'up_time' =>$up_time,'up_show' =>$up_show]);
         //halt($result);
        if($result)
        {
            //执行成功
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else{
            return ['valid'=>0,'msg'=>$this->getError()];
        }
}
}