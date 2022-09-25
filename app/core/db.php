<?php

namespace CMS\core;
use PDO;
use CMS\core\dbhandler;

class db implements dbhandler{

    private $dsn = "mysql:host=localhost;dbname=cms";
    protected $connection;
    private $table;

    public function __construct()
    {
        $this->connection = new PDO($this->dsn,"root","");
        $this->get_class_name();
    }

    
    // public function insert($table,$data){

    //     //Column
    //     $sql = "INSERT INTO `$table`(";

    //     foreach ($data as $col => $value) {
    //         $sql .="`$col`,";
    //     }
    //     $sql = rtrim($sql,",");
    //     $sql .=")VALUES(";

    //     //Values
    //     foreach ($data as $col => $value) {
    //         $sql .=":$col,";
    //     }
    //     $sql = rtrim($sql,",");
    //     $sql .=")";

    //     // Create data and Execute
    //     // // sql = INSERT INTO `gategory`(`id`,`name`)VALUES('1','mohamed')
    //     // $d = $this->connection->prepare($sql);
    //     // // // data = Array [name] => mohamed , [id] => 50
    //     // $d->execute($data);
    //     $this->exec($data,$sql);
    // }


    private function get_class_name()
    {

        $table = explode("\\",static::class);
        $table = end($table);
        $this->table = substr($table,0,-5);

    }

    public function insert($data)
    {

        // setup some variables for fields columns [database_table] and values.

        $fields = '';

        $values = '';

        foreach ($data as $key => $value)
        {
            $fields .= "`$key`,";

            $values .= ":$key,";

        }

            // remove last Comma , in This Variable.
            $fields = substr($fields, 0, -1);
            // remove last Comma , in This Variable.
            $values = substr($values, 0, -1);

            $sql = "INSERT INTO `$this->table` ($fields) VALUES ($values)";

            $this->exec($data,$sql);
    }



    public function update($table,$data){

         $sql = "UPDATE `$table` SET ";

         foreach ($data as $col => $value) {
            if($col != 'id'){
             $sql .="`$col` = :$col,";
            }else{
                $sql = rtrim($sql,",");
                $sql .=" WHERE `$col` = :$col";
            }
         }
         $sql = rtrim($sql,",");
        //  $d = $this->connection->prepare($sql);
        //  $d->execute($data);
        $this->exec($data,$sql);
    }



    public function delete($table,$id){
        $sql = "DELETE FROM `$table` WHERE `id` = :id";
        $data = ['id' =>$id];
        // $d = $this->connection->prepare($sql);
        // $d->execute();
        $this->exec($data,$sql);

    }

    public function select($table){
        $sql ="SELECT * FROM `$table`";
        // $this->exec($data,$sql);
        $sql = $this->connection->query($sql);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }



    public function sqlquery_select($sql){
        //Select Only
        $sql = $this->connection->query($sql);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }



       // Return the number of Records In table.
       protected function select_count($extra='')
       {
           return $this->connection->query("SELECT COUNT(*) FROM `$this->table` $extra")->fetchColumn();
       }
    


    private function exec($data,$sql){
        $d = $this->connection->prepare($sql);
        return  $d->execute($data);

    }
}


















?>