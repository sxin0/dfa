<?php
header("content-type:text/html;charset=utf-8");

require_once __DIR__.'/vendor/autoload.php';

use Dfa\trieTree;

/*
 * 替换敏感词为指定字符
 * */

//要检测的文字
$txt = "测试敏感词过滤,卧槽";

//实例化类 获取处理完毕的字符串
$str = (new trieTree($txt))->endString;

//输出转换后的文字
echo $str;



/**
 * demo.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.jsx6.com
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/19, 作者: 降省心(QQ:1348550820), 操作:创建
 **/
