<?php
/**
 *  入口文件
 * 1.入口文件
 * 2.加载函数库
 * 3.启动框架
 */

define('IMOOC',realpath('./'));//项目根目录
define('CORE',IMOOC.'/core'); //框架核心文件
define('APP',IMOOC.'/app'); //项目文件 模型 控制器

//是否开启调试模式

define('DEBUG',true);

if (DEBUG) {
    ini_set('display_errors','On');
} else {
    ini_set('display_errors','Off');
}

//加载函数库
include CORE.'/common/function.php';

//加载核心文件
include CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');
\core\imooc::run();
//p(IMOOC);