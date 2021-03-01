<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="image/sttb.jpg" type="image/icon" />
    <style>
      section { 
        min-height: 120px;
      }
    </style>
    
    <title>Halaman Utama Website</title>
  </head>
  <body>
    <body class="mt-5">
      <nav class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">Sekolah Tinggi Teknologi Bandung</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
          
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
      </nav>


      <section id="jumbotron" class="jumbotron">
        <div class="jumbotron bg-info">
            <h1 class="display-4">Your Partner to Global Competition</h1>
            <p class="lead">Salah satu Perguruan Tinggi di Kota Bandung yang mencetak mahasiswa berdaya saing dan unggul di bidang Teknologi</p>
            <hr class="my-4">
            <p>Sebelum masuk atau mengakses website ini Harap Register Dulu ya terimakasih !!!</p>
            <a class="btn btn-primary btn-lg" href="register.php" role="button">Register</a>
          </div>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/maba.jpg" class="d-block w-100" alt="Responsive image">
              </div>
              <div class="carousel-item">
                <img src="img/bookshelf.jpg" class="d-block w-100" alt="Responsive image">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>

      
        <section id="KABAR" class="KABAR bg-light">
          <div class="container">
            <div class="row">
              <div class="col text-center">
                <h1>KABAR STTB</h1>
              </div>
            </div>

            
        <div class="row mb-4">
          <div class="col-md">
            <div class="card" style="width: auto;">
              <img src="img/WhatsApp Image 2020-08-06 at 08.51.17.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Hasil Test Gelombang 2B TA 2020/2021</h5>
                <p class="card-text">Berdasarkan hasil tes online penerimaan mahasiswa baru Gel 2B TA 2020/2021 Sekolah Tinggi Teknologi Bandung[....].</p>
                <a href="Halaman Detail Informasi.html" class="btn btn-primary">Selanjutnya</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card" style="width: auto;" >
              <img src="img/WhatsApp Image 2020-08-06 at 08.51.17.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Hasil Test Gelombang 2A TA 2020/2021</h5>
                <p class="card-text">Berdasarkan hasil tes online penerimaan mahasiswa baru Gel 2A TA 2020/2021 Sekolah Tinggi Teknologi Bandung[....].</p>
                <a href="#" class="btn btn-primary">Selanjutnya</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card"style="width: auto;">
              <img src="img/WhatsApp Image 2020-08-06 at 08.51.17.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Hasil Test Gelombang 1B TA 2020/2021</h5>
                <p class="card-text">Berdasarkan hasil tes online penerimaan mahasiswa baru Gel 1B TA 2020/2021 Sekolah Tinggi Teknologi Bandung[....]..</p>
                <a href="#" class="btn btn-primary">Selanjutnya</a>
              </div>
            </div>
          </div>
          </div>
        </div>
        </section>


        <section>
        <div class="container section">
          <div class="row">
              <div class="col-sm-3">
                  <div class="headline">
                      <h2>Kalender Akademik</h2>
                  </div>
                  <div class="row" id="calendar">
                      <div class="col-sm-12 clearfix">
                          <ul>
                              <li>
                                  <p class="date red"><i class="glyphicon glyphicon-pushpin"></i> 26 Februari - 07 Maret 2020</p>
                                  <p class="title">Perwalian Semester Genap TA. 2019/2020</p>
                              </li>
                              <li>
                                  <p class="date red"><i class="glyphicon glyphicon-pushpin"></i> 09 Maret 2020</p>
                                  <p class="title">Hari Musik Nasional</p>
                              </li>
                              <li>
                                  <p class="date"><i class="glyphicon glyphicon-pushpin"></i> 22 Maret 2020</p>

                                  <p class="title">Isra Mi'raj Nabi Muhammad SAW</p>
                              </li>
                              <li>
                                  <p class="date red"><i class="glyphicon glyphicon-pushpin"></i> 25 Maret 2020</p>
                                  <p class="title">Hari Raya Nyepi </p>
                              </li>
                          </ul>
                          <p class="more-link pull-right"><a href="kalender" class="su-link"><i class="glyphicon glyphicon-play-circle"></i> <span>Lihat Kalender</span></a></p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6">
                <div class="headline">
                    <h2>Agenda Kegiatan</h2>
                </div>
                <div class="row" id="event">
                    <div class="col-sm-12 clearfix">
                        <ul>
                            <li>
                                    <div class="clearfix">
                                        <div class="date">SEP<b>1</b>SABTU</div>
                                        <div class="desc">
                                            <h3><a href="">CALL FOR PAPER Seminar Nasional Telekomunikasi dan Informatika SELISIK 2018 </a></h3>
                                            <p>Tema : Menyiapkan SDM untuk Menghadapi Industri 4.0<br>Tanggal penting : <br>Batas Akhir Penerim...</p>
                                            <p>Start on 09:00 WIB &bull; Held at Harris Hotel, Festival Citylink, Bandung</p>
                                        </div>
                                    </div>
                                </li>
                               <li>

                                    <div class="clearfix">
                                        <div class="date">APR<b>7</b>SABTU</div>
                                        <div class="desc">
                                            <h3><a href="">We Are The Champions</a></h3>
                                            <p>Buat kamu yang suka main MOBILE LEGENDS, punya bakat main TENIS MEJA, ada raket BADMINTON yg udah ke...</p>
                                            <p>Start on 09:00 WIB &bull; Held at Sekolah Tinggi Teknologi Bandung</p>
                                        </div>
                                    </div>
                                         </li>
                                      <li>
                                    <div class="clearfix">
                                        <div class="date">MAR<b>24</b>SABTU</div>
                                        <div class="desc">
                                            <h3><a href="">New Money</a></h3>
                                            <p>Yuk Warga STTBandung, ikut kuliah umum dengan Tema: New Money Pembicara: Ir. Goenardjoadi Goenawan,...</p>
                                            <p>Start on 09:00 WIB &bull; Held at Sekolah Tinggi Teknologi Bandung</p>
                                        </div>
                                    </div>
                                </li>
                        </ul>
                        <p class="more-link pull-right"><a href="agenda" class="su-link"><i class="glyphicon glyphicon-play-circle"></i> <span>Agenda Lainnya</span></a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="headline">
                    <h2>Media</h2>
                </div>
                <div class="row" id="media">
                    <div class="col-sm-12 clearfix">
                        <div class="media-list">
                            <div>
                                <h4>Flash Mob Pena Baru 2016</h4>
                                <a data-toggle="modal" data-target="#modalMedia1"><img src="https://sttbandung.ac.id/assets/image/vid_pmb2016.jpg" class="img-responsive" title="Click to play" /></a>
                            </div>
                            <div>
                                <h4>POMA STT Bandung 2015</h4>
                                <a data-toggle="modal" data-target="#modalMedia2"><img src="https://sttbandung.ac.id/assets/image/vid_poma2015.jpg" class="img-responsive" title="Click to play" /></a>
                            </div>
                        </div>
                        <p class="more-link pull-right"><a href="#" class="su-link"><i class="glyphicon glyphicon-play-circle"></i> <span>Semua Media</span></a></p>
                    </div>
                     </div>
                   </div>
                </div>
            </div>
        </div>          
         </section>

        <section>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">Contac Us</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item"><h1>Location</h1></li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Jl. Soekarno Hatta No.378 Bandung 40235</li>
            <li class="list-group-item">West Java, Indonesia</li>
          </ul>
        </div>
    
        <div class="col-lg-6">
          <form>
            <div class="form-group">
              <label for="formGroupExampleInput">Nama</label>
              <input type="text" class="form-control" id="nama" >
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">E-mail</label>
              <input type="text" class="form-control" id="Email" >
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">No Telp</label>
              <input type="text" class="form-control" id="telp" >
            </div>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Pesan</label>
            <textarea name="pesan" id="pesan" class="form-control"></textarea>
            </div>
            <div class="form-group ">
              <div class="col text-center">
              <button type="button" class="btn btn-primary">Kirim pesan !!</button>
            </div>
          </form>
        </div>
      </section>
    
    <footer class="bg-dark text-white">
        <div class="container">
        <div class="row pt-3">
          <div class="col text-center">
            <p>@Copyright by 18111168_Vickry Taufik Firmansyah_TIFRP 18 CIDB_UASWEB1.</p>
          </div>
        </div>
        </div>
      </footer>
      </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>