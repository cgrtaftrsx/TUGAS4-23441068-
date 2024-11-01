<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table border="1">
        <caption>
            Data Mahasiswa
            <form action="" method="get">
               <select name="filter">
                   <?php
                   $q_alamat "SELECT alamat FROM biodata group by alamat";
                   $r_alamat = $mysqli->query($q_alamat);
                   while($data_alamat = $r_alamat->fetch_assoc())(
                ?>
                    <option value="<?= $data_alamat['alamat'];?>"><?php echo $data_a
                <?Php
                   }
                   ?>
          </select>
        <button>Filter</button>
</form>
</caption>
<tr>
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Aksi</th>
</tr>

<?php
if(isset($_GET["filter']))(
$query = "SELECT * FROM biodata WHERE alamat='$_GET[filter]'";
Jelsef
$query = "SELECT * FROM biodata"
$result = $mysqli->query($query);
$no=0;
<
while($row = $result->fetch_assoc())f
$no++;
> >
?>
<tr>
<td><?= $no;?></td>
<td><?= $row['nama'];?x</td>
<td><?= $row['alamat'];?></td>
<td><?= $row['tempat_lahir'];?></td>
<td><?= $row['tgl_lahir'];?x</td>
<td>
<a href-"<?= "form-edit.php?id=".$row['id'];?>">Edit</a>
<a href="<?= 'hapus-data.php?id='.$row['id'];?>">Hapus</a>
</td>
</tr>
<?php
</table>
<a href="form-data.php">Tambah Data</a>
</body>
</html>