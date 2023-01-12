<?php
 include('config.php');
//  $id= $_GET['id'];
 $samb = mysqli_connect($host, $user, $password, $database);
 $sql = "DELETE FROM `infopelajar`";
 $hasil = mysqli_query($samb, $sql);
 if ($hasil)
 {
 echo "<script>alert('Berjaya padam rekod')
 window.location='index.php'</script>";
 }
    else 
   
{
echo "<script>alert('Tidak berjaya padam rekod')</script>";

}

?>
