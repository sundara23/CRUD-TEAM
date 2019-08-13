<?php 
class Crud extends Koneksi{
    function  insertData($nim, $nama, $umur, $no_telepon, $alamat){
        $insert = "INSERT INTO banten (nim, nama, umur, no_telepon, alamat) VALUES ('$nim','$nama','$umur','$no_telepon','$alamat')";
        return mysqli_query($this->connection, $insert);
    }
    function readData(){
        $sql = "SELECT * FROM banten";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    // function readUpdateData($nim){
    //     $sql = "SELECT * FROM banten WHERE nim='$nim'";
    //     $res = mysqli_query($this->connection, $sql);
    //     return $res;
    // }
    // function updateData($nim){
    //     $sql = "UPDATE banten SET nama='$nama', umur='$umur', no_telepon='$no_telepon', alamat='$alamat'";
    //     $res = mysqli_query($this->connection, $sql);
    //     return $res;
    // }
}
$crud = new Crud;
?>