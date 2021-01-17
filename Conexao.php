<?php

class Conexao{
    public static $instance;

    private function __construct(){}

    public static function getIntance(){
        if(!isset(self::$instance)){
            self::$instance = new PDO('pgsql:host=localhost;port=5432;dbname=tcc;user=postgres;password=123456');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        
        }
        return self::$instance;
    }
}