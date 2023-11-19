<html>
<html lang="en">
<head>
    <title>Healthy Wealthy - Drink Recipe Admin</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<?php 

    ob_start();
    session_start();
    if (!isset($_SESSION['emailuser'])) {
        header("location:login.php");
    }
 ?>

    <?php include "header.php"; ?>

<?php
    include "includes/config.php";
    if(isset($_POST['Simpan']))
    {
        $kodedrink = $_POST['inputkode'];
        $namadrink = $_POST['inputnama'];
        $desc = $_POST['inputdesc'];
        $bahan = $_POST['inputbahan'];
        $instruksi = $_POST['inputinstruksi'];

        $nama = $_FILES['file']['name'];
        $file_tmp = $_FILES["file"]["tmp_name"];

        $ekstensifile = pathinfo($nama, PATHINFO_EXTENSION);

        if(($ekstensifile == "JPG") or ($ekstensifile == "jpg") or ($ekstensifile == "png") or ($ekstensifile == "PNG"))
        {
            move_uploaded_file($file_tmp, 'images/'.$nama);
            mysqli_query($connection, "INSERT INTO drink value ('$kodedrink', '$namadrink', '$desc', '$bahan' , '$instruksi', '$nama')");
            header("location:drink.php");
        }
    }

    $dataDrink = mysqli_query($connection, "SELECT * FROM drink");

?>

<body>
<div class="row">
    <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="jumbotron jumbotron-fluid" style="background-color: #eeeeee;">
                <div class="container">
                    <h1 class="display-4">Drink Recipe Input</h1>
                </div>
            </div>



    <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="kodedrink" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kodedrink" name="inputkode"
                placeholder="Kode Drink" maxlength="4">
            </div>
        </div>

        <div class="form-group row">
            <label for="namadrink" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namadrink" name="inputnama"
                placeholder="Drink Name">
            </div>
        </div>

        <div class="form-group row">
            <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="desc" name="inputdesc"
                placeholder="Deskripsi">
            </div>
        </div>

        <div class="form-group row">
            <label for="bahan" class="col-sm-2 col-form-label">Bahan Baku</label>
            <div class="col-sm-10">
            <textarea id="bahan" name="inputbahan" cols="40" rows="5" class="form-control" 
                placeholder="Bahan Baku"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="instruksi" class="col-sm-2 col-form-label">Instruksi</label>
            <div class="col-sm-10">
            <textarea id="instruksi" name="inputinstruksi" cols="40" rows="5" class="form-control" 
                placeholder="Instruksi" ></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="file" class="col-sm-2 col-form-label">Foto Minuman</label>
            <div class="col-sm-10">
                <input type="file" id="file" name="file">
                <p class="help-block">Unggah File</p>
            </div>
        </div>

        <div class="form-group now">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input type="submit" style="background-color: #A53860;" name="Simpan" class="btn btn-primary" value="Simpan">
                <input type="submit" name="Simpan" class="btn btn-secondary" value="Batal">
            </div>
        </div>

    </form>

    <div class="col-sm-1"></div>
</div>
</div>
                

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="jumbotron jumbotron-fluid" style="background-color: #eeeeee;">
            <div class="container">
                <h1 class="display-4">Drink Recipe List</h1>
            </div>
        </div>

            <form method="POST">
        <div class="form-group row mb-2">
            <label for="search" class="col-sm-3" >Search</label>
            <div class="col-sm-6">
                <input type="text" name="search" class="form-control" id="search" value="<?php if(isset($_POST['search'])) {echo $_POST['search'];}?>" placeholder="Cari Nama Drink">
            </div>
            <input type="submit" style="background-color: #A53860;" name="kirim" class="col-sm-1 btn btn-primary" value="Search">

        </div>
    </form>

    <table class="table table-hover table-danger" style="background-color: #F9DBBD;">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Bahan Baku</th>
                <th>Instruksi</th>
                <th>Foto Minuman</th>
                <th colspan="2" style="text-align: center">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php $query = mysqli_query($connection, "SELECT * FROM drink");
            $nomor =1;
            while ($row = mysqli_fetch_array($query))
            { ?>
                <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?php echo $row['KodeDrink'];?></td>
                    <td><?php echo $row['NamaDrink'];?></td>
                    <td><?php echo $row['Deskripsi'];?></td>
                    <td><?php echo nl2br($row['Bahan2']);?></td>
                    <td><?php echo nl2br($row['Instruksi']);?></td>
                    <td>
                        <?php if(is_file("images/".$row['PhotoDrink']))
                        { ?>
                            <img src="images/<?php echo $row['PhotoDrink']?>" width="80">
                        <?php }  else
                            echo "<img src='images/noimage.png' width = '80'>"
                        ?>
                    </td>
                    
                    <td>

                    <a href="drinkedit.php?ubah=<?php echo $row['KodeDrink']?>" class="btn btn-success btn-sm" title="EDIT">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    
                    </a>
                    </td>
                    
                    <td>
                        
                        <a href="drinkdelete.php?hapus=<?php echo $row['KodeDrink']?>"
                        class="btn btn-danger btn-sm" title="DELETE">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                        
                        </a>
                    </td>

                </tr>

                <?php $nomor = $nomor + 1;?>

            <?php }
            ?>
            
        </tbody>
    </table>
    </div>

    <div class="col-sm-1"></div>


</div>

</body>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<?php mysqli_close($connection);
ob_end_flush();
?>


</html>