<?php
class Database
{
    public function selectAll()
    {

        return "select all";
    }
    public function selectSpecified($id)
    {

        return "select {$id}";
    }
    public function delete($id)
    {

        return "delete {$id}";
    }
}
