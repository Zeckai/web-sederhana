<?php

include 'koneksi.php';

  
  $id = $_POST['id'];

  $id_kelas = $_POST['id_kelas'];
  $nama     = $_POST['nama'];
  $alamat     = $_POST['alamat'];
  $no_telp     = $_POST['no_telp'];


  
  
                    
                   $query  = "UPDATE siswa SET id_kelas = '$id_kelas',nama = '$nama',alamat = '$alamat',no_telp = '$no_telp'  WHERE nisn = '$id'";
                    
                    $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      
                      
                      echo "<script>alert('Data berhasil diubah.');window.location='siswa.php';</script>";
                    }
              
        
        ?>
