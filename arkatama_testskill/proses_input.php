<?php
//mengoneksikan php dengan database "db_arkatama"
$host = "localhost";
$username = "root";
$password = "";
$dbname = "db_arkatama";

$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    //jika koneksi gagal,
    die("Connection failed: " . mysqli_connect_error());
} 

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
//$vid=$_POST['id'];
$vname=$_POST['name'];
$vage=$_POST['age'];
$vcity=$_POST['city'];

//memasukkan nilai dalam tabel data_diri pada database "db_arkatama"
$sql="INSERT INTO data_diri (name, age, city) VALUES ('$vname','$vage','$vcity')";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);

echo"";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROSES INPUT</title>

    <!-- link css dari bootstrap 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- <script src="https://kit.fontawesome.com/bdbe2127bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container">
            <h2 class="display-3 text-center" id="proses_input">Berhasil</h2>
            <p class="text-center">
                Selamat Data Diri Anda Berhasil Dimasukkan
            </p>

        </div>
    </div>
    <!-- link javascript dari bootsrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>