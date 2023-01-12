<?php
//sambung ke pangkalan data 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenaraiPelajar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 
</head>
<body>
    <div class="container">
      <h1>Senarai Pelajar </h1>
      <button type="button" class="btn btn-link"><a href="tambahpelajar.php">Add new</a> </button>
        <table class="table">
  <thead class="table-light">
   <th>NO PELAJAR</th>
   <th>NAMA PELAJAR</th>
   <th>NO KP</th>
   <th>JANTINA</th>
   <th>NO NDP</th>
   <th>NO HP</th>
   <th>STATUS</th>
  </thead>
    </div>
    <?php
            $samb= mysqli_connect($host, $user, $password, $database);
            $sql = "SELECT * FROM infopelajar ORDER BY id";
            $data = mysqli_query($samb, $sql);  
            $id = 1;          
            while ($infopelajar = mysqli_fetch_array($data)) {
            ?>
  <tbody>
    <tr>
        <td><?php echo $infopelajar['id']; ?></td>
        <td><?php echo $infopelajar['namapelajar']; ?></td>
        <td><?php echo $infopelajar['nokp']; ?></td>
        <td><?php echo $infopelajar['jantina']; ?></td>
        <td><?php echo $infopelajar['nondp']; ?></td>
        <td><?php echo $infopelajar['nohp']; ?></td>
       
        <td><button type="button" class="btn btn-danger"><a href="padampelajar.php">Delete</a> </button></td>
        <td><button type="button" class="btn btn-warning"><a href="kemaskinipelajar.php">UPDATE</a> </button></td>
    </tr>
  </tbody>
  <center>
             <?php $id = $id + 1; } ?></td>
           </center>
</table>
</body>
</html>