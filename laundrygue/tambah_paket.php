<!DOCTYPE html>
<html>
<head>
    <title>Tambah Paket</title>
    <link rel="stylesheet" href="css/tambah_usermember.css">
</head>
<body>
    <?php
        include "header.php";
    ?>
    <div class="main_content">
    <div class="header"><h3>Paket</h3></div>
    <div class="info">
    <form action="proses_tambah_paket.php" method="post">
        Jenis paket :
        <select name="jenis" value="" class="form-control">
            <option></option>
            <option value="kiloan">KILOAN</option>
            <option value="selimut">SELIMUT</option>
            <option value="bed cover">BED COVER</option>
            <option value="kaos">KAOS</option>
        </select>
        Harga : 
        <input class = "form-control" type="text" name="harga" value="" > <br>
        <input class = "submit" type="submit" name="simpan" value="Tambah paket">
    </form>
    </div>
    </div>

</body>
</html>