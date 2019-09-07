<?php
    if(isset($_POST['add']))
    {
    include 'koneksi.php';
      $nama=$_POST['name'];
      $work=$_POST['work'];
      $salary=$_POST['salary'];
     
      $sql="INSERT INTO name (name,id_work,id_salary) VALUES ('$nama','$work','$salary')";
      if($koneksi->query($sql) === false){
        trigger_error('Perintah Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
      }  
      else { 
        header("location: index.php");
      }
    }
?>