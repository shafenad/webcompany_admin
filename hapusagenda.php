<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_agenda WHERE id_agenda = '$id'";
    $q = mysqli_query($k,$sql);
    echo "<script>alert('Data Berhasil Dihapus');location='.?hal=agenda'</script>";