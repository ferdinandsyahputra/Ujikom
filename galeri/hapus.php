<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM petugas WHERE id = $id";
    
    if ($conn->query($sql) == TRUE) {
        header("location: manajemen_admin.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}else {
    echo "ID Tidak Ditemukan";
}

$conn->close();

?>