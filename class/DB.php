<?php


class DB
{
    var $conn;
    var $servername = "s0znzigqvfehvff5.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    var $dbusername = "ncgg4l4se4kiewko";
    var $dbpassword = "qzo3y8p48jev8e1j";
    var $dbname = "c0vt48zd4okm7ibn";

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->dbusername, $this->dbpassword, $this->dbname);
    }
}