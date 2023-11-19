<?php 
include "includes/config.php";
if(isset($_GET['hapus']))
{
    $kodedrink= $_GET["hapus"];
    mysqli_query($connection, "DELETE FROM drink
        WHERE KodeDrink = '$kodedrink'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
        document.location='drink.php'</script>";
}