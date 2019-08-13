<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <?php include('koneksi.php'); ?>
<div class="container">
    <h1 class="text-center">Data Mahasiswa</h1>
    <div class="row">
      <div class="col-md-12">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
        Tambah Data
        </button>

        <!-- Modal Insert Data-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nim :</span>
                </div>
                <input type="number" class="form-control" name="nim" placeholder="No Induk Mahasiswa" required>
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nama Mahasiswa :</span>
                </div>
                <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa">
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Umur :</span>
                </div>
                <input type="number" class="form-control" name="umur" placeholder="Umur">
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">No Telphone :</span>
                </div>
                <input type="number" class="form-control" name="no_telepon" placeholder="No Telephone">
                </div>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Alamat</span>
                </div>
                <textarea class="form-control" name="alamat" aria-label="With textarea"></textarea>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="btnsave"class="btn btn-primary" >Save</button>
            </div>
            </form>
            </div>
        </div>
        </div>
        <!-- end modal insert data -->
        <!-- modal update data -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nim :</span>
                </div>
                <input type="number" class="form-control" name="nim" placeholder="No Induk Mahasiswa" required>
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nama Mahasiswa :</span>
                </div>
                <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa">
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Umur :</span>
                </div>
                <input type="number" class="form-control" name="umur" placeholder="Umur">
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">No Telphone :</span>
                </div>
                <input type="number" class="form-control" name="no_telepon" placeholder="No Telephone">
                </div>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Alamat</span>
                </div>
                <textarea class="form-control" name="alamat" aria-label="With textarea"></textarea>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="btnsave"class="btn btn-primary" >Save</button>
            </div>
            </form>
            </div>
        </div>
        </div>
        <!-- end modal update data -->
        <?php 
        include('crud.php');
        if (isset($_POST['btnsave'])) {
            $crud->insertData($_POST['nim'], $_POST['nama'], $_POST['umur'], $_POST['no_telepon'], $_POST['alamat']);
        }
        ?>
    <table class="table table-striped" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nim</th>
          <th scope="col">Nama Mahasiswa</th>
          <th scope="col">Umur</th>
          <th scope="col">No Telephone</th>
          <th scope="col">Alamat</th>
          <!-- <th scope="col">Aksi</th> -->
        </tr>
      </thead>
      <tbody>
        <?php
        $view = $crud->readData();
        while($row = mysqli_fetch_assoc($view)) {?>
            <tr>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['umur']; ?></td>
                <td><?= $row['no_telepon']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <!-- <td><a href="#updateModal" data-toggle="modal" class="btn btn-success">Update</a></td> -->
            </tr>
        
        <?php } ?>
        
      </tbody>
    </table>
  </div>
</div>
  </div>
  <script>
    $(document).ready(function() {
    var t = $('#myTable').DataTable();
    
} );
  </script>
</body>
</html>