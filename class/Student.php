<?php


class Student
{
    var $id;
    var $name;
    var $username;
    var $password;
    var $dbconn = "c0vt48zd4okm7ibn";

    public function __construct($id, $name, $username, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->username = $username;
        $this->dbconn = new DB();
    }

    public function save($id, $name, $username, $password){
        if (is_null($this->id)){
            $query = "insert into student values (null, '$this->name', 'this->username', 'this->password')";
                echo $query;
            mysqli_query($this->dbconn, $query);
        }else{
        $query = "Update student SET = '$this->name' where id = $this->id";
        mysqli_query($query);
    }
}