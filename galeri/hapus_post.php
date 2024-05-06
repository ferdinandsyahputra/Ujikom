<?php
include 'koneksi.php';

// Pastikan parameter id yang diterima
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Lakukan penghapusan
    $sql = "DELETE FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    // Cek apakah penghapusan berhasil
    if($result) {
        echo "<script>alert('Post berhasil dihapus');</script>";
        // Redirect ke halaman post setelah penghapusan berhasil
        echo "<script>window.location.href = 'post.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus post');</script>";
    }
} else {
    echo "<script>alert('ID post tidak ditemukan');</script>";
}

?>
