<?php 
include "includes/config.php";
if(isset($_GET['hapus']))
{
    $kode= $_GET["hapus"];
    mysqli_query($connection, "DELETE FROM research
        WHERE Kode = '$kode'");
    echo "<script>alert('DATA BERHASIL DIHAPUS');
        document.location='research.php'</script>";
}