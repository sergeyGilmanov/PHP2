<?php


class Users extends model\Model
{
    public $id;
    public $login;
    public $pass;

    public function getTableName()
    {
        return "users";
    }



}