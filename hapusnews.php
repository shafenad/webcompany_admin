<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_berita WHERE id_berita = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data Berhasil Dihapus');location='.?hal=news'</script>";