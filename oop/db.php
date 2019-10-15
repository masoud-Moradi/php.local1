<?php

class Db
{

    public $table;


    public function all()
    {

        return "select * from {this->table} ";

    }

    public function find($id, $columns = null)
    {

        $columns = !is_null($columns) ? implode(',', $columns) : '*';
        return "select {$columns} from {$this->table} where id={$id}";
    }

    public function delete($id)
    {
        return "delete from {$this->table} where id={$id}";
    }

    private function sort()
    {

    }


    public static function export()
    {


    }


}

//
$connection = new Db();
//$connection->table = "users";
//$connection->find(56,['id','name']);


?>