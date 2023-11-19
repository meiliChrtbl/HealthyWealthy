<?php 
include "includes/config.php";
if(isset($_GET['hapus']))
{
    $koderecipe = $_GET["hapus"];
    mysqli_query($connection, "DELETE FROM recipe
        WHERE KodeResep = '$koderecipe'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
        document.location='recipe.php'</script>";
}