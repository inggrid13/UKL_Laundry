<?php
    include "header.php"
?>
    <h3>OUTLET</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
 <th>NO</th><th>NAMA</th><th>ALAMAT</th>
   <th>TELP</th>
    <th>AKSI</th>
            </tr>
    </thead>
    <tbody>
            <?php 
            include "koneksi.php";
            $qry_outlet=mysqli_query($conn,"select * from outlet");
            $no=0;
            $duration = 0;
            while($data_outlet=mysqli_fetch_array($qry_outlet)){
            $duration +=50;
            $no++;?>
<tr data-aos="fade-right" data-aos-delay="<?= $duration?>">
    <td><?=$no?></td><td><?=$data_outlet['nama']?></td>
    <td><?=$data_outlet['alamat']?></td>
    <td><?=$data_outlet['tlp']?></td>
    
    <td><a class="btn btn-success" href="ubah_outlet.php?id_outlet=<?=$data_outlet['id_outlet']?>">Ubah</a> | <a href="hapus_outlet.php?id_outlet=<?=$data_outlet['id_outlet']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_outlet.php" class="btn btn-secondary">Add</a>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<?php
   include "footer.php"
?>