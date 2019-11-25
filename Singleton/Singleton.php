<?php
/**
 * Created by PhpStorm.
 * User: Emad A. Abu Lebda
 * Date: 10/16/2019
 * Time: 1:10 PM
 */

class Singleton
{
    private static $singleton;
    private $data;
    private function __construct() {

    }
    public function getData() {
        return $this->data;
    }
    public function setData($data) {
        $this->data = $data;
    }
    public static function getSingleton() {
        if(!isset(self::$singleton))
            self::$singleton = new self();
        return self::$singleton;
    }
}