<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMB</title>
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
    background-color: #FFFFFF;
    border-bottom: 1px solid #ccc;
    border-top: 1px solid #ccc; 
    margin-left: 0px;
    }
    .navbar {
        background-color: #964B00 !important;
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
        <input class="form-control mr-sm-2" type="Cari" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
    </form>
        
    </nav>
    <div id="contentWrapper">
        <div class="pageContent">
        <div class="section index-0">
            <div class="container">
                         <div class="heading">
                             <br><br><h1 style="font-weight: bold;">Pendaftaran Online</h5>
                        </div>
                    
                        <form action="konfirmasiPMB.php" method="POST">
                            <div class="form-group row my-2">
                                    <div class="col-md-12 marbot-10">
                                        <a>Jalur Penerimaaan Mahasiswa Baru*</a>
                                        <select id="jalur" class="form-control" name="jalur">
                                            <option value>Pilih Jalur Penerimaan</option>
                                            <option value="Jalur Reguler">Jalur Reguler</option>
                                            <option value="Jalur Bidimiksi">Jalur Bidimiksi</option>
                                            <option value="Jalur Beasiswa Peringkat Raport">Jalur Beasiswa Peringkat Raport</option>
                                            <option value="Jalur Beasiswa Ujian Saringan Masuk (USM)">Jalur Ujian Saringan Masuk (USM)</option>
                                            <option value="Jalur Beasiswa ASAK (Ayo Sekolah Ayo Kuliah)">ASAK (Ayo Sekolah Ayo Kuliah)</option>
                                            <option value="Jalur Beasiswa Lulusan Terbaik Sekolah">Jalur Lulusan Terbaik Sekolah</option>
                                            <option value="Jalur Beasiswa Prestasi Akademik dan Non Akademik">Jalur Prestasi Akademik dan Non Akademik</option>
                                        </select>   
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                    <div class="col-md-8">
                                    <a>Nama Calon Mahasiswa Baru(Sesuai ijazah SMA)*</a> 
                                    <input type="text" value data-parsley-required-message="Ini harus diisi.." required class="form-control" name="namamaba">
                                    </div>
                                   
                                    <div class="col-md-8">
                                    <a>Tempat/Tanggal Lahir*</a> 
                                    <input type="text" required class="form-control" name="tempattanggallahir">
                                    </div>
                            </div>
                            
                            <div class="form-group row my-2">
                                    <div class="col-md-10">
                                    <a>Jenis Kelamin</a> 
                                    <select required class="form-control" name="jeniskelamin">
                                        <option value>Pilih</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    </div>
                                    <div class="col-md-10">
                                    <a>Agama</a> 
                                    <select required class="form-control" name="agama">
                                        <option value>Pilih</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    </div>
                                    <div class="col-md-10">
                                    <a>Status</a> 
                                    <select required class="form-control" name="status">
                                        <option value>Pilih</option>
                                        <option value="Belum Menikah">belum menikah</option>
                                        <option value="Menikah">menikah</option>
                                        <option value="Janda">janda</option>
                                        <option value="Duda">duda</option>
                                    </select>
                                    </div>
                            </div>
                            <div class="form-group row my-2">
                                    <div class="col-md-10">
                                        <a>Alamat</a> 
                                        <input required rows="3" class="form-control" name="alamat">
                                    </div>
                            </div>
                            <div class="form-group row my-2">
                                    <div class="col-md-10">
                                    <a>Kode Pos*</a> 
                                    <input type="text" value required class="form-control" name="kodepos">
                                    </div>
                                   
                                    <div class="col-md-10">
                                    <a>No. Handphone*</a> 
                                    <input type="text" value required class="form-control" name="handphone">
                                    </div>
                                    <div class="col-md-10">
                                    <a>Email*</a> 
                                    <input type="email" value data-parsley-trigger="change" required class="form-control" name="email">
                                    </div>
                            </div>
                            
                            <br>
                            <br>
                            <h3>DATA SEKOLAH ASAL CALON MAHASISWA</h3>
                            <br>
                            
                            <div class="form-group row my-2">
                               
                                    <div class="col-md-10">
                                    <a>Asal Sekolah*</a> 
                                    <input type="text" value required class="form-control" name="asalsekolah">
                                    </div>
                                   
                                    <div class="col-md-10">
                                    <a>Tahun Lulus*</a> 
                                    <input type="text" value required class="form-control" name="tahunlulus">
                                    </div>
                                   
                            </div>
                            
                            <br>
                            <br>
                            <h3>DATA ORANG TUA CALON MAHASISWA</h3>
                            <br>
                            
                            <div class="form-group row my-2">
                                    <div class="col-md-6">
                                    <a>Nama Ayah*</a> 
                                    <input type="text" value required class="form-control" name="namaayah">
                                    </div>
                                   
                                    <div class="col-md-6">
                                    <a>Nama Ibu*</a> 
                                    <input type="text" value required class="form-control" name="namaibu">
                                    </div>
                            </div>
                            <div class="form-group row my-2">
                                    <div class="col-md-12">
                                        <a>Alamat</a> 
                                        <input required rows="3" class="form-control" name="alamatortu">
                                    </div>
                             
                            </div>
                            <div class="form-group row my-2">
                                    <div class="col-md-6">
                                    <a>Kode Pos*</a> 
                                    <input type="text" value required class="form-control" name="kodeposortu">
                                    </div>
                                   
                                    <div class="col-md-6">
                                    <a>No. Handphone*</a> 
                                    <input type="text" value required class="form-control" name="handphoneortu">
                                    </div>
                            </div>
                            <div class="form-group row my-2">
                                    <div class="col-md-8">
                                    <a>Pendidikan Terakhir Ayah</a>
                                    <select required class="form-control" name="pendidikanayah">
                                        <option value>Pilih</option>
                                        <option value="Tidak tamat SD">Tidak tamat SD</option>
                                        <option value="Tamat SD">Tamat SD</option>
                                        <option value="Tamat SMP">Tamat SMP</option>
                                        <option value="Diploma (D1 - D2)">Diploma (D1 - D2)</option>
                                        <option value="Sarjana (D3)">Sarjana (D3)</option>
                                        <option value="Sarjana (D4 - S1)">Sarjana (D4 - S1)</option>
                                        <option value="Pascasarjana S2">Pascasarjana S2</option>
                                        <option value="Doktor S3">Doktor S3</option>
                                    </select>
                                    </div>
                                    <div class="col-md-8">
                                    <a>Pendidikan Terakhir Ibu</a>
                                    <select required class="form-control" name="pendidikanibu">
                                        <option value>Pilih</option>
                                        <option value="Tidak tamat SD">Tidak tamat SD</option>
                                        <option value="Tamat SD">Tamat SD</option>
                                        <option value="Tamat SMP">Tamat SMP</option>
                                        <option value="Diploma (D1 - D2)">Diploma (D1 - D2)</option>
                                        <option value="Sarjana (D3)">Sarjana (D3)</option>
                                        <option value="Sarjana (D4 - S1)">Sarjana (D4 - S1)</option>
                                        <option value="Pascasarjana S2">Pascasarjana S2</option>
                                        <option value="Doktor S3">Doktor S3</option>
                                    </select>
                                    </div>
                                </div> 
                            
                                <div class="form-group row my-2">
                                    <div class="col-md-8">
                                    <a>Status Ayah</a>
                                    <select required class="form-control" name="statusayah">
                                        <option value>Pilih</option>
                                        <option value="Masih Hidup">Masih Hidup</option>
                                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                                    </select>
                                    </div>
                                    <div class="col-md-8">
                                    <a>Status Ibu</a>
                                    <select required class="form-control" name="statusibu">
                                        <option value>Pilih</option>
                                        <option value="Masih Hidup">Masih Hidup</option>
                                        <option value="Sudah Meninggal">Sudah Meninggal</option>
                                    </select>
                                    </div>
                                 </div>
                            <br>
                            <br>
                            <h3>PEMINATAN PROGRAM STUDI</h3>
                            <br>
    
                            <div class="form-group row my-2">
                                    <div class="col-md-8">
                                    <a>Pilihan Program Studi 1</a>
                                    <select required class="form-control" name="programstudi1">
                                        <option value>Pilih</option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Manajemen">Manajemen</option>
                                        <option value="Psikologi">Psikologi</option>
                                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                        <option value="Desain Produk Industri">Desain Produk Industri</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Arsitektur">Arsitektur</option>
                                    </select>
                                    </div>
                                    <div class="col-md-8">
                                    <a>Pilihan Program Studi 2</a>
                                    <select required class="form-control" name="programstudi2">
                                        <option value>Pilih</option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Manajemen">Manajemen</option>
                                        <option value="Psikologi">Psikologi</option>
                                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                        <option value="Desain Produk Industri">Desain Produk Industri</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Arsitektur">Arsitektur</option>
                                    </select>
                                    </div>
                            </div> 
                            <div class="row">
                                <div class="col-lg-6">
                                <a style="font-weight: bold;">Sumber Informasi</a><br>
                                    <input name="info" value="Internet" type="radio">Internet<br>
                                    <input name="info" value="Majalah" type="radio">Majalah<br>
                                    <input name="info" value="Brosur" type="radio">Brosur<br>
                                    <input name="info" value="Radio" type="radio">Radio<br>
                                    <input name="info" value="Spanduk" type="radio">Spanduk<br>
                                    <input name="info" value="Orang Tua" type="radio">Orang Tua<br>
                                    <input name="info" value="Pameran" type="radio">Pameran<br>
                                    <input name="info" value="Pihak Sekolah" type="radio">Pihak Sekolah<br>
                                    <input name="info" value="Lainnya....." type="radio">Lainnya.....<br> 
                                </div>
                            </div>
                            
                            <br>
                            <br>
                            <h3>Ujian Saringan Masuk</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                <a>Lokasi: Kampus UPJ - Jl. Cendrawasih Raya Blok B7/P Bintaro Jaya, Sawah Baru, Ciputat, Tangerang Selatan 15413 Banten, Indonesia. <br> <br>
                                Pilihan Gelombang</a><br>
                                    <input name="Gelombang" value="Gelombang 1" type="radio">Gelombang 1<br>
                                        <input name="Gelombang" value="Gelombang 2" type="radio">Gelombang 2<br>
                                        <input name="Gelombang" value="Gelombang 3" type="radio">Gelombang 3<br>
                                    <input name="Gelombang" value="Gelombang 4" type="radio">Gelombang 4<br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="clear:both; margin:8px 0;">
                                  <div class="col-lg-3 col-lg-offset-3">
                                    <input type="hidden" name="submitt">
                                  </div>
                                </div>
                            </div>
                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Daftar</button>
                        </div>
                        </form>   
                </div>
            </div>
        </div>
    </div>
</body>
</html>
