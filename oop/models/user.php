<?php
require_once ('../db.php');
class User extends Db {

    const AAA=1;

    public function __construct()
    {
        $this->table='users';
    }

}

$user1=new User();


var_dump($user1);
//$user1->find(100);