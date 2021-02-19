<?php


class Application
{
    private static $instance;

//    private function __construct()
//    {
//
//    }

    public static function getInstance()
    {
        if (self::$instance === null){
            self::$instance = new Application();
        }
        return self::$instance;
    }
}


$app1 = Application::getInstance();
print_r($app1);
$app2 = Application::getInstance();
print_r($app2);

/** neu khong co ham khoi tao thuoc tinh private van the tao nhieu doi tuong bang tu khoa new*/
/** khi co ham private __construc() thi khong tao doi tuong app3 o dong duoi    */
$app3 = new Application();
print_r($app3);
