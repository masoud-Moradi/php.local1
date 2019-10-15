<?php

class Payment extends Db
{

    public function __construct()
    {
        $this->table = 'payments';
    }


    public function getAllPaymentByUserId($userId)
    {
        return "Select * from {$this->table} where payment_user_id={$userId} "
    }

}

?>