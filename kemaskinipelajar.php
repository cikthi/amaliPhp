<?php
include('config.php'); 
if(isset($_POST['id'])) {    
    $id = $_POST['id'];
    $namapelajar = $_POST['namapelajar'];
    $nokp = $_POST['nokp'];
    $jantina = $_POST['jantina'];
    $nondp = $_POST['nondp'];
    $nohp = $_POST['nohp'];
   
    $samb = mysqli_connect($host, $user, $password, $database);
    $sql = "UPDATE infopelajar SET id='$id', namapelajar='$namapelajar',jantina='$jantina' ,nondp='$nondp' ,nohp='$nohp'  WHERE id = '$id'";
    $hasil = mysqli_query($samb, $sql); 
    if ($hasil)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='index.php'</script>";
 } 

$sql = "SELECT * FROM infopelajar";
$hasil = mysqli_query($samb, $sql);
while ($infopelajar = mysqli_fetch_array($hasil)) {
    $id = $infopelajar['id'];
    $namapelajar = $infopelajar['namapelajar'];
    $jantina = $infopelajar['jantina'];
    $nokp = $infopelajar['nokp'];
    $nondp = $infopelajar['nondp'];
    $nohp = $infopelajar['nohp']; 
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<html>
<body>
    <center>
    <h1>KEMASKINI PELAJAR  :</h1>
    <form method="POST" >
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label" type="text">ID:</label>
                        <input type="text" class="form-control" id="validationCustom01" value="<?php echo $id;?>" type="text" name="id"
                            id="id" placeholder="id anda" size="60"  required>

                    </div>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                
                        <label for="validationCustom01" class="form-label" type="text">NAMA PELAJAR :</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" value="<?php echo $namapelajar;?>" name="namapelajar"
                            id="namapelajar" placeholder="nama anda" size="60"  required>
                        </div>

                        <br>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">JANTINA: </label>
                            <input type="text" value="<?php echo $jantina;?>" class="form-control" id="validationCustom01" name="jantina"
                                placeholder="perempuan" 
                                >
                           
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">NO HP:</label>
                            <input type="text" value="<?php echo $nohp;?>" class="form-control" id="validationCustom01" name="nohp"
                                placeholder="no kp" 
                                >
                           
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">NO KP: </label>
                            <input type="text" value="<?php echo $nokp;?>" class="form-control" id="validationCustom01" name="nokp"
                                placeholder="no kp" 
                                >
                           
                        </div>
                       
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">NO NDP :</label>
                            <input type="text" value="<?php echo $nondp;?>" class="form-control" id="validationCustom01" name="nondp"
                                placeholder="no kp" 
                                >
                           
                        </div>
            <button type="submit">Submit</button>
        </form>
    </center>
</body>
</html>
