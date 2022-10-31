<?php 
 if ($_POST) {
    $id_outlet=$_POST['id_outlet'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tlp = $_POST["tlp"];
    // echo $tlp;
    if(empty($nama)){
        echo "<script>alert('nama outlet tidak boleh kosong');location.href='tambah_outlet.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "koneksi.php";
            $update=mysqli_query($conn,"update outlet set nama='".$nama."', alamat='".$alamat."', tlp='".$tlp."' where id_outlet = '".$id_outlet."'") or die(mysqli_error($conn));
            echo "update outlet set nama='".$nama."', alamat='".$alamat."', tlp='".$tlp."' where id_outlet = '".$id_outlet."'";
            if($update){
                echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id=".$id."';</script>";
            }
        }
        
    } 

?>