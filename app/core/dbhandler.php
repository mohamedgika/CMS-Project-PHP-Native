<?php

namespace CMS\core;

interface dbhandler{

    public function insert($data);

    public function update($table,$data);

    public function delete($table,$id);

    public function select($table);

    public function sqlquery_select($sql);

}
?>