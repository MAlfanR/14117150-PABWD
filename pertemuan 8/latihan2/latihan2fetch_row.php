<html>
<head>

    <title>Koneksi Database MySQL </title>
</head>

<body>
<h1>Koneksi database dengan mysql_fetch_assoc </h1>

<?php

$conn = mysqli_connect("localhost","root","") 
    or die("Koneksi gagal");

mysqli_select_db($conn,"dunia");

$hasil = mysqli_query($conn ,"select * from liga");

while($row = mysqli_fetch_row($hasil)){
    echo "Liga  ".$row[1];
    echo "  mempunyai " .$row[2];
    echo " wakil di liga champion <br>";
}
?>

</body>
</html>