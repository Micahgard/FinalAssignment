<?php
include_once ("DB.php");
include_once ("Student.php");

class Administrator{
    var $id;
    var $username;
    private $password;
    private $conn;

    public function __construct($id, $username)
    {
        $this->conn = (new DB())->conn;
    }

    public function login($username, $password){
        $query = "select * from administrator where username = '$username'";
        $result = mysqli_query($this->dbconn, $query);
        if ($result->num_rows == 1){
            while ($row = $result->fetch_assoc()){
                if ($row['password'] == $password){
                    $this->id = $row['id'];
                    $this->username = $username;
                    $this->password = $password;
                }

            }
        }
    }

    public function showStudents(){
        $query = "select * from student";
        $result = mysqli_query($this->conn, $query);
        if ($result->num_rows > 0){
            $students = array();
            while($row = $result->fetch_assoc()){
                $student = new Student($row['id'], $row['name'], $row['username'], $row['password']);
                array_push($students, $student);
            }
        }else{
            return null;
        }
    }

}