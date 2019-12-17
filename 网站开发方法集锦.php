<?php

class Test
{
    public function index()
    {
        $str = 1;
        $len = 3;
        $str2 = '0';
        $pos = STR_PAD_LEFT|STR_PAD_RIGHT|STR_PAD_BOTH;
        //格式化
        str_pad($str/* 带填补的字符串 */,$len/* 填补后的长度 */,$str2/* 填补字符串 */,$pos/* 填补位置 */);
        sprintf("%05d",1);  //五位，不够左边补0
        sprintf("%01.3f",1);    //三位小数右边不足补0，左边最少一位，不足补0

        /**
         * h-ui
         * 空格
         * 
         * 空格：&#160;
         * 窄空格：&#8201;
         * 半个中文字:&#8194;
         * 一个中文字:&#8195;
         */
        
         /**
          * js截取ajax抓取的html的head
          *     var html = JSON.parse(data)
          *     var reg = /(?<=<head>)[\s\S]*(?=<\/head>)/g;
          *     var head = reg.exec(html)[0];
          *     var div = $(html).filter(".class");
          *     $('.class').warp('<div></div>'); //添加父节点
          */
    }
}