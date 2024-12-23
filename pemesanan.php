<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js">
    <title>Document</title>
	<style>
		*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

.nav{
    color: whitesmoke;
    display: flex;
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: pink;
    position: fixed;
    width: 100%;
    z-index: 1;
}
.nav a{
    color: whitesmoke;
}

.nav li{
    padding: 10px;
}

.nav li:hover{
    background-color: black;
}



.data-list{
    margin-left: 40%;
}

.data-list li{
display: inline-block;
margin-left: 20px;
}

.fa-chevron-down{
    transform: rotate(0deg);
    transition: 300ms;
}
.wisata:hover .fa-chevron-down{
    transform: rotate(-90deg);
}

.logo{
    margin-left: 30px;
}

.list{
    display: none;
    background-color: #333;
    position: absolute;
    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 30px;
}

.list li{
    display: block;
    margin-bottom: 10px;
    color: whitesmoke;
}

.data-list a{
    text-decoration: none;
}

.wisata:hover .list{
display: block;

}
.header{
    display: flex;
    margin-bottom: 100px;
}

.des-header{
    
    width: 30%;
    margin: auto;
}
.des-header h1{
font-weight: 800;
font-size: 4rem;
width: 50%;
color: black;
}

.gambar {
    width: 40%;
    height: 100vh; 
}
.gambar img{
    width: 100%; 
    height: 100%;
}

.bg-footer{
    height: 20vh;
    background-color: pink;
    text-align: center;
    color: whitesmoke;
    padding-top: 15vh;
}

.bg-card{
    width: 90%;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: auto;
}

.gambar-card{
    width: 250px;
    height: 200px;
    overflow: hidden;
}
.gambar-card img{
    width: 100%;
    height: 100%;
    transition: 1s;
}

.des-card{
padding: 5px;
padding-left: 15px;
padding-bottom: 15px;
}

.des-card h2{
    color: black;
    margin-bottom: 10px;
}
.des-card p{
    line-height: 20px;
    color: black;
}

.bg-card a{
    text-decoration: none;
}

.card:hover img{
    transform: scale(1.5);
    transition: 2s;
}


	</style>
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
                    <a href="#"><li>Kolam</li></a>
                    <a href="#"><li>Curug</li></a>
                </ul>

           </li></a>


           <a href="#"><li>Tentang kami</li></a>
           <a href="#"><li>Sumber informasi</li></a>
        </ul>
     </div>

     <!-- header -->
<div class="header">
    <div class="des-header">
        <h1>Wisata Alam Curug Cipeuteuy Majalengka</h1>
    </div>

    <div class="gambar">
        <img src="https://djavatoday.com/wp-content/uploads/2022/04/IMG-20220424-WA0064_compress99.jpg" alt="">
    </div>
</div>

<main class="flex-shrink-0">
	<div class="container">
	  <form method="post" action="koneksi.php">
  <div class="card mt-2">
	<div class="card-header bg-dark text-white  width: 20px">
	  Form Pemesanan Camping Ground 
	</div>
	<div class="card-body">
	  <div class="mb-3">
		<label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
		<input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
	  </div>
	  <div class="mb-3">
		<label for="hp_pemesan" class="form-label">Nomor Handphone</label>
		<input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
	  </div>
	  <div class="mb-3">
		<label for="waktu_wisata" class="form-label">Waktu Mulai Camping</label>
		<input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required>
	  </div>
	  <div class="mb-3">
		<label for="hari_wisata" class="form-label">Hari Camping</label>
		<input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required>
	  </div>
	  <div class="mb-3">
		  <div class="form-check">
			<input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap">
			<label class="form-check-label" for="paket_inap">
			  Tenda untuk 1-4 Orang (Rp. 170.000)
			</label>
		  </div>
	  </div>
	  <div class="mb-3">
		  <div class="form-check">
			<input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport">
			<label class="form-check-label" for="paket_transport">
			  Tenda untuk 5-8 Orang (Rp. 350.000)
			</label>
		  </div>
	  </div>
	  <div class="mb-3">
		  <div class="form-check">
			<input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan">
			<label class="form-check-label" for="paket_makan">
			  Tenda untuk 8-12 Orang (Rp. 550.000)
			</label>
		  </div>
	  </div>
	  <div class="mb-3">
		<label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
		<input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
	  </div>
	  <div class="mb-3">
		<label for="harga" class="form-label">Harga Paket</label>
		<input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket Perjalanan" readonly>
	  </div>
	  <div class="mb-3">
		<label for="total" class="form-label">Total Tagihan</label>
		<input type="number" class="form-control" id="total" name="total" placeholder="Total Paket Perjalanan" readonly>
	  </div>
	</div>
	<div class="card-footer">
	  <input type="submit" class="btn btn-primary" value="Simpan">
	  <input type="reset" class="btn btn-danger" value="Ulangi">
	</div>
  </div>
  <script>
  //tentukan konstanta biaya masing-masing
  const tenda_untuk_1_5_orang = 170000;
  const tenda_untuk_5_8_orang = 350000;
  const tenda_untuk_8_12_orang = 550000;
  
  function updateTotalCost()
  {
	  //inisisi harga paket 0
	  let totalCost = 0;
	  
	  //referensi dari checkbox
	  const inapCheckbox = document.getElementById('paket_inap');
	  const transportCheckbox = document.getElementById('paket_transport');
	  const makanCheckbox = document.getElementById('paket_makan');
	  
	  //jika inap checkbox ter-check
	  if(inapCheckbox.checked)
	  {
		  totalCost+=paket_inap;
	  }
	  
	  //jika transport checkbox ter-check
	  if(transportCheckbox.checked)
	  {
		  totalCost+=paket_transport;
	  }
	  
	  //jika makan checkbox ter-check
	  if(makanCheckbox.checked)
	  {
		  totalCost+=paket_makan;
	  }
	  
	  document.getElementById('harga').value = totalCost;
  }
  
  function updateTotal()
  {
	  let TotalTagihan = 0;
	  
	  var hari_wisata = document.getElementById('hari_wisata').value;
	  var jumlah_peserta = document.getElementById('jumlah_peserta').value;
	  var harga = document.getElementById('harga').value;
	  
	  TotalTagihan = hari_wisata * jumlah_peserta * harga;
	  
	  document.getElementById('total').value = TotalTagihan;
  }
  
  document.getElementById('paket_inap').addEventListener('change', updateTotalCost);
  document.getElementById('paket_transport').addEventListener('change', updateTotalCost);
  document.getElementById('paket_makan').addEventListener('change', updateTotalCost);
  
  document.getElementById('paket_inap').addEventListener('change', updateTotal);
  document.getElementById('paket_transport').addEventListener('change', updateTotal);
  document.getElementById('paket_makan').addEventListener('change', updateTotal);
  
  document.getElementById('hari_wisata').addEventListener('change', updateTotalCost);
  document.getElementById('jumlah_peserta').addEventListener('change', updateTotalCost);
  
  document.getElementById('hari_wisata').addEventListener('change', updateTotal);
  document.getElementById('jumlah_peserta').addEventListener('change', updateTotal);
  
  updateTotalCost();
  updateTotal();
  </script>  </div>
	   <!-- footer -->
	</main>
	<div class="bg-footer">
		<p>Kontak: <a href="mailto:info@curugcipeuteuy.com">info@curugcipeuteuy.com</a> | Telepon: +62 812 3456 7890</p>
		<p>Ikuti kami:
			<a href="https://www.facebook.com" target="_blank">Facebook</a> |
			<a href="https://www.instagram.com" target="_blank">Instagram</a> |
			<a href="https://www.twitter.com" target="_blank">Twitter</a></p>
	</div>
	
	
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>