<?php

class ConnectDb extends PDO
{
    protected $_host = 'localhost';
    protected $_user = '';
    protected $_password = '';
    protected $_database = 'allocinemet';

    public function __construct()
    {
        try {
            parent::__construct("mysql:host=".$this->_host.';'.'dbname='.$this->_database ,$this->_user, $this->_password,  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            throw $e;
        }
    }
}

?>
