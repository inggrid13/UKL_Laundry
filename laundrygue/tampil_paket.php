<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>

</head>
<body>
    <?php
        include "header.php";
    ?>
    <h3>Paket</h3>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA PAKET</th>
                        <th>HARGA</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "koneksi.php";
                        $qry_paket=mysqli_query($conn,"select * from paket");
                        $no=0;
                        while($data_paket=mysqli_fetch_array($qry_paket)){
                        $no++;?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$data_paket['jenis']?></td> 
                            <td>
                                <?php
                                    echo "Rp. ".number_format($data_paket['harga'], 2, ',', '.')."";
                                ?>
                            </td>
                            <td><a class="btn btn-success" href="ubah_paket.php?id_paket=<?=$data_paket['id_paket']?>">Ubah</a> | <a class="btn btn-danger" href="hapus_paket.php?id_paket=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <br>
            <a class="btn btn-primary" href="tambah_paket.php">Tambah Paket</a>
        </div>
    </div>
</body>
</html>