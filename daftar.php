<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js">
</head>
<body>
<!-- nav -->
     <div class="nav">
        <div class="logo">
            <h2>Logo</h2>
        </div>

        <ul class="data-list">
           <a href="#"><li>Home</li></a>
           <a href="#"><li class="wisata">Wisata <i class="fa-solid fa-chevron-down"></i>

                <ul class="list">
                    <a href="/kolam/kolam.html"><li>Kolam</li></a>
                    <a href="#"><li>Curug</li></a>
                </ul>

           </li></a>


           <a href="#"><li>Tentang kami</li></a>
           <a href="#"><li>Sumber informasi</li></a>
        </ul>
     </div>

     <!-- nav selesai -->


     <!-- header -->
<div class="header">
    <div class="des-header">
        <h1>Wisata Alam Curug Cipeuteuy Majalengka</h1>
    </div>

    <div class="gambar">
        <img src="https://djavatoday.com/wp-content/uploads/2022/04/IMG-20220424-WA0064_compress99.jpg" alt="">
    </div>
</div>

     <!-- header selesai -->

     <?php
include 'koneksi.php';

$sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>
<h1>Daftar Pemesanan</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">Tanggal Berangkat</th>
      <th scope="col">Total Tagihan</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $co = 1;
      while($detail = mysqli_fetch_assoc($query)){
      ?>
    <tr>
      <th scope="row"><?=$co?></th>
      <td><?=$detail['nama_pemesanan']?></td>
      <td><?=$detail['hp_pemesan']?></td>
      <td><?=$detail['waktu_wisata']?></td>
      <td><?=$detail['total']?></td>
      <td><a href="invoice.php?id=<?= $detail['id']?>">Detail</a> 
      <a href="">Edit</a> 
      <a href="hapus.php?id=<?= $detail['id']?>">Hapus</a></td>
    </tr>
        <?php
        $co++;
        }
        ?>
  </tbody>
</table>
<?php
} 
?>
    
     <!-- footer -->
<div class="bg-footer">
    <p>Kontak: <a href="mailto:info@curugcipeuteuy.com">info@curugcipeuteuy.com</a> | Telepon: +62 812 3456 7890</p>
    <p>Ikuti kami:
        <a href="https://www.facebook.com" target="_blank">Facebook</a> |
        <a href="https://www.instagram.com" target="_blank">Instagram</a> |
        <a href="https://www.twitter.com" target="_blank">Twitter</a></p>
</div>
     <!-- footer selesai -->
</body>
</html>