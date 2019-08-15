<?php 
include('koneksi.php');
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
    function readUpdateData($nim){
        $sql = "SELECT * FROM banten WHERE nim='$nim'";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    function updateData($nim, $nama, $umur, $no_telepon, $alamat){
        $sql = "UPDATE banten SET nama='$nama', umur='$umur', no_telepon='$no_telepon', alamat='$alamat' WHERE nim='$nim'";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
    function deleteData($nim){
        $sql = "DELETE FROM banten WHERE nim='$nim'";
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }
}
$crud = new Crud;
if (isset($_POST['btnupdate'])) {
    $crud->updateData($_POST['unim'], $_POST['unama'], $_POST['uumur'], $_POST['uno_telepon'], $_POST['ualamat']);
    header('location: index.php');
}
if (isset($_GET['nim'])) {
    $crud->deleteData($_GET['nim']);
    header('location: index.php');
}
?>