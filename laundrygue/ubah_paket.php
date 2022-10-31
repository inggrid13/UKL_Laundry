<!DOCTYPE html>
<html>
<head>
    <title>Ubah Paket</title>
    <link rel="stylesheet" href="css/ubah_member_user.css">
</head>
<body>
    <?php 
    include "header.php";
    include "koneksi.php";
    $qry_get_paket = mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    ?>
    <div class="main_content">
    <div class="header"><h3>Ubah Paket</h3></div>
    <div class="info">
    <form action="proses_ubah_paket.php" method="post">
        <input type="hidden" name="id_paket" value= "<?=$dt_paket['id_paket']?>">
        Jenis paket :
        <select name="jenis" value="" class="form-control">
            <option></option>
            <option value="kiloan" <?php if($dt_paket['jenis']=='kiloan'){echo "selected";} ?>>KILOAN</option>
            <option value="selimut" <?php if($dt_paket['jenis']=='selimut'){echo "selected";} ?>>SELIMUT</option>
            <option value="bed cover" <?php if($dt_paket['jenis']=='bed cover'){echo "selected";} ?>>BED COVER</option>
            <option value="kaos" <?php if($dt_paket['jenis']=='kaos'){echo "selected";} ?>>KAOS</option>
        </select>
        Harga : 
        <input type="text" name="harga" value="<?=$dt_paket['harga']?>" class="form-control"> <br>
        <input class = "submit" type="submit" name="simpan" value="Ubah paket">
    </form>
    </div>
    </div>
</body>
</html>