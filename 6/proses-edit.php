<?php  
  if(isset($_POST['edit']))
      {
      include 'koneksi.php';
        $name=$_POST['name'];
        $work=$_POST['work'];
        $salary=$_POST['salary'];
       
        $sql="INSERT INTO name (name,id_work,id_salary) VALUES ('$name','$work','$salary')";
        $sql="UPDATE name set name = '$name', id_work = $work, id_salary = $salary WHERE id = '$_GET[edit]'";
        if($koneksi->query($sql) === false){
          trigger_error('Perintah Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
        }  
        else{ 
          header("location: index.php");
        }
      }
?>