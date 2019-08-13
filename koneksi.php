<?php
class Koneksi{
    protected $connection;

    function __construct(){
        $this->connect_db();
    }
    function connect_db(){
        $this->connection = mysqli_connect('localhost', 'root','','mahasiswa');
        if (mysqli_connect_error()) {
            die("database error" . mysqli_connect_error() . mysqli_connect_errno());
        }
    }

}
?>