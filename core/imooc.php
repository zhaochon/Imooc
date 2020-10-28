<?php
namespace core;

class imooc
{
     public static $classMap = [];
    /*
     * 启动
     */
    static public function run()
    {
         p('ok');
         $route = new \core\route();
    }

    /**
     * 自动加载
     */
    static public function load($class)
    {

        //判断要加载的类是否已经存在
        if (isset($classMap[$class])) {
            return ture;
        } else {
           $class = str_replace('\\','/',$class);
           $file = IMOOC.'/'.$class.'.php';
            p($file);
           if (is_file($file)) {
               include $file;
               self::$classMap[$class] = $class;
           } else {
               return false;
           }
        }
    }
}