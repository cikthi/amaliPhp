<?php
include('config.php'); 
if(isset($_POST['id'])) {    
    $id = $_POST['id'];
    $namapelajar = $_POST['namapelajar'];
    $nokp = $_POST['nokp'];
    $jantina = $_POST['jantina'];
    $nondp = $_POST['nondp'];
    $nohp = $_POST['nohp'];
    $sql = "INSERT INTO infopelajar (id, namapelajar,nokp,jantina,nondp,nohp)
    VALUES ('$id', '$namapelajar', '$nokp','$jantina','$nondp','$nohp')";
    $samb = mysqli_connect($host, $user, $password, $database);
    $hasil = mysqli_query($samb, $sql); 
    if ($hasil)
        echo "<script>alert('Berjaya ditambah')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='index.php'</script>";
}
?>

    <title>TambahPelajar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  
    <style>
        form{
            margin-left: 550px;
        }
        h1{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
<body>
    <h1>DAFTAR PELAJAR BARU :</h1>
<form method="POST" >
    
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label" type="text">ID:</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="id"
                          id="id" placeholder="id anda" size="60" required>

                    </div>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                
                        <label for="validationCustom01" class="form-label" type="text">NAMA PELAJAR:</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="namapelajar"
                            id="namapelajar" placeholder="namapelajar anda" size="60" required>
                        </div>

                        <br>
                        <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                
                        <label for="validationCustom01" class="form-label" type="text">JANTINA: </label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="jantina"
                            id="jantina" placeholder="jantina anda" size="60" required>
                        </div>
                        <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                
                        <label for="validationCustom01" class="form-label" type="text">NO KAD PENGENALAN:</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="nokp"
                            id="nokp" placeholder="nokp anda" size="60" required>
                        </div>

                        <br>
                        </div>
                        <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                
                        <label for="validationCustom01" class="form-label" type="text">NOMBOR TELEFON:</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="nohp"
                            id="nohp" placeholder="nohp anda" size="60" required>
                        </div>
                        <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                
                        <label for="validationCustom01" class="form-label" type="text">NOMBOR NDP:</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="nondp"
                            id="nondp" placeholder="no ndp anda" size="60" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-secondary" type="submit" >Submit</button>
                            <button class="btn btn-info" type="reset">Reset</button><br><br>
                    </form>
                    <form action="index.php"><button type="submit" class="btn btn-link">Home</button></form>
                    </div>
                </form>
</body>
</html>