<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>konfirmasi</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style> 
    nav {
    width: 100%;
    display: inline-block;
    text-align: center;
    padding: 0;
    list-style: none;
    background-color: #f2f2f2;
    border-bottom: 1px solid #ccc;
    border-top: 1px solid #ccc; 
    margin-left: 0px;
    }
    .navbar {
        background-color: #212529 !important;
    }
    .navbar li{
        margin-left: 50px;
        font-size: 16px;
    }
    </style>

</head>
<body>
    <div class="pageWrapper animsition-old responsive-body">
        <a class="navbtn active" href="#">
            <i class="fa fa-times"></i>
        </a>
    <header class="top-head header-7" data-sticky="true">
        <div class="container-fluid">
            <div class="row up-head">
                <div class="col-xs-6 col-sm-5 col-md-6">
                    <div class="logo">
                        <a href="//upj.ac.id/">
                        <img class="Logo" alt="Logo" src="logo.png">
                        </a>
                    </div>
                </div>
            </div>
    </header>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="new-nav active">
        <ul class="navbar-nav text-align-center">
                <li class="nav-item">
                  <a class="nav-link" href="#">Tentang UPJ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Akademik</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pendaftaran</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">PJ-Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Penelitian</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kerjasama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Karir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wisuda ke 6</a>
                </li>
        </ul>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </nav>

<div class="container text-center border">
<h4 class="text-center mt-4 mb-3">Pendaftaran Online Mahasiswa Baru 2022</h2>
    <br>

<?php
    $jalurr = @$_POST["jalur"];
    $namaMaba = @$_POST["namamaba"];
    $ttl = @$_POST["tempattanggallahir"];
    $jenisKelamin = @$_POST["jeniskelamin"];
    $agamaa = @$_POST["agama"];
    $statuss = @$_POST["status"];
    $alamatt = @$_POST["alamat"];
    $kodePos = @$_POST["kodepos"];
    $handPhone = @$_POST["handphone"];
    $emaill = @$_POST["email"];
    $asalSekolah = @$_POST["asalsekolah"];
    $tahunLulus = @$_POST["tahunlulus"];
    $namaAyah = @$_POST["namaayah"];
    $namaIbu = @$_POST["namaibu"];
    $alamatOrtu = @$_POST["alamatortu"];
    $kodeOrtu = @$_POST["kodeposortu"];
    $handOrtu = @$_POST["handphoneortu"];
    $pndAyah = @$_POST["pendidikanayah"];
    $pndIbu = @$_POST["pendidikanibu"];
    $statusAyah = @$_POST["statusayah"];
    $statusIbu = @$_POST["statusibu"];
    $prgrm1 = @$_POST["programstudi1"];
    $prgrm2 = @$_POST["programstudi2"];
    $infoo = @$_POST["info"];
    $gelombangg = @$_POST["gelombang"];


    echo "Jalur : " .$jalurr."<br>";
    echo "Nama Mahasiswa Baru : ".$namaMaba."<br>";
    echo "Tempat Tanggal Lahir : ".$ttl."<br>";
    echo "Jenis Kelamin : ".$jenisKelamin."<br>";
    echo "Alamat : ".$alamatt."<br>";
    echo "Kode Pos : ".$kodePos."<br>";
    echo "No Handphone : ".$handPhone."<br>";
    echo "Email : ".$emaill."<br>";
    echo "Asal Sekolah : ".$asalSekolah."<br>";
    echo "Nama Ayah : ".$namaAyah."<br>";
    echo "Nama Ibu : ".$namaIbu."<br>";
    echo "Alamat Orang Tua : ".$alamatOrtu."<br>";
    echo "Kode Pos Orang Tua : ".$kodeOrtu."<br>";
    echo "No Handphone Orang Tua : ".$handOrtu."<br>";
    echo "Status Ayah : ".$statusAyah."<br>";
    echo "Status Ibu : ".$statusIbu."<br>";
    echo "Program Studi 1: ".$prgrm1."<br>";
    echo "Program Studi 2: ".$prgrm2."<br>";
    echo "Info : ".$infoo."<br>";
    echo "Gelombang : ".$gelombangg."<br>";
    echo "No Handphone Orang Tua : ".$handOrtu."<br>";
    echo "Tahun Lulus : ".$tahunLulus."<br>";
?>
</div>
</body>
</html>