<!DOCTYPE html>
<html lang="id">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Haya Auto Express</title>
      <meta name="keywords" content="jual mobil, beli mobil, mobil bekas">
      <meta name="description" content="Haya Auto Express - Platform terbaik untuk jual beli mobil bekas di Indonesia">
      <meta name="author" content="Haya Auto Express">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo e(asset('images/fevicon.png')); ?>" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo e(asset('css/jquery.mCustomScrollbar.min.css')); ?>">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo e(asset('images/loading.gif')); ?>" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="text-bg">
                     <h1>Temukan Mobil Bekas Terbaik</h1>
                     <strong>Platform Jual Beli Mobil Terpercaya</strong>
                     <span>Landing Page 2023</span>
                     <p>
                        Kami menyediakan berbagai jenis mobil bekas berkualitas untuk kebutuhan Anda. Temukan mobil yang sesuai dengan kebutuhan Anda hanya di Haya Auto Express.
                     </p>
                     <a href="#">Selengkapnya</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- end banner -->
      <!-- car -->
      <div class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>VARIETAS MOBIL</h2>
                     <span>Kami menawarkan berbagai jenis mobil bekas berkualitas untuk dijual sesuai dengan kebutuhan Anda.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="<?php echo e(asset('images/car_img1.png')); ?>" alt="#"/></figure>
                     <h3>Hyundai</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="<?php echo e(asset('images/car_img2.png')); ?>" alt="#"/></figure>
                     <h3>Audi</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="<?php echo e(asset('images/car_img3.png')); ?>" alt="#"/></figure>
                     <h3>BMW X5</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end car -->
      <!-- bestCar -->
      <div id="contact" class="bestCar">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-sm-6">
                  <h3 id="hasil" style="color:white"> </h3>
                  <img id="plot" src="" width=100%>
               </div>
               <div class="col-sm-6">
                  <div class="row">
                     <div class="col-md-12 offset-md-12">
                        <form class="main_form" id="predictForm">
                           <div class="titlepage">
                              <h2>Temukan Mobil Bekas Terbaik</h2>
                           </div>
                           <div class="row">
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="tahun" name="tahun" type="number" placeholder="Masukan Tahun">
                              </div>
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="transmisi" name="transmisi" placeholder="Masukan Transmisi">
                              </div>
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="jarak_tempuh" name="jarak_tempuh" type="number"  placeholder="Masukan Jarak Tempuh">
                              </div>
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="bahan_bakar" name="bahan_bakar" placeholder="Masukan Bahan Bakar">
                              </div>
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="pajak"  name="pajak" type="number" placeholder="Masukan Pajak">
                              </div>
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="mpg"  name="mpg" type="number" placeholder="Masukan MPG">
                              </div>
                              <div class="col-md-12 mt-3">
                                 <input class="form-control" id="ukuran_mesin" name="ukuran_mesin" placeholder="Masukan Ukuran Mesin">
                              </div>
                              <div class="col-sm-12">
                                 <button class="find_btn">Cari Sekarang</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end bestCar -->
      <!-- choose  section -->
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Mengapa Memilih Kami</h2>
                     <span>Berikut alasan mengapa Anda harus memilih Haya Auto Express sebagai platform jual beli mobil bekas Anda.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>01</span>
                     <p>Kami menyediakan berbagai jenis mobil bekas berkualitas dengan harga terjangkau dan proses yang mudah.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>02</span>
                     <p>Kami memiliki layanan pelanggan yang siap membantu Anda 24/7 untuk memastikan pengalaman jual beli mobil Anda berjalan lancar.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>03</span>
                     <p>Kami menawarkan pilihan asuransi untuk memastikan Anda merasa aman dan terlindungi selama transaksi jual beli.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose  section -->
      <!-- customer -->
      <div class="cutomer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Apa Kata Pelanggan Kami</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="cross_img">
                                    <figure><img src="<?php echo e(asset('images/cross_img.png')); ?>" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Budi Santoso</h4>
                                       <span>Pembeli</span>
                                       <p>Saya sangat puas dengan layanan Haya Auto Express. Proses beli sangat mudah dan mobil yang saya beli dalam kondisi sangat baik.</p>
                                       <i><img src="<?php echo e(asset('images/te1.png')); ?>" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="cross_img">
                                    <figure><img src="<?php echo e(asset('images/cross_img.png')); ?>" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Siti Aisyah</h4>
                                       <span>Pembeli</span>
                                       <p>Pengalaman beli mobil di Haya Auto Express sangat memuaskan. Layanan pelanggan sangat responsif dan membantu.</p>
                                       <i><img src="<?php echo e(asset('images/te1.png')); ?>" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="cross_img">
                                    <figure><img src="<?php echo e(asset('images/cross_img.png')); ?>" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Andi Wijaya</h4>
                                       <span>Pembeli</span>
                                       <p>Mobil yang disediakan sangat bervariasi dan dalam kondisi baik. Saya pasti akan menggunakan Haya Auto Express lagi di masa depan.</p>
                                       <i><img src="<?php echo e(asset('images/te1.png')); ?>" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Sebelumnya</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Selanjutnya</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end customer -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="cont_call">
                        <h3> <strong class="multi color_chang"> Hubungi Kami</strong><br>
                           (+62) 82330478047<br>
                           hayaautoexpress@gmail.com
                        </h3>
                     </div>
                     <div class="cont">
                        <h3> <strong class="multi"> Haya Auto Express</strong> 
                           Platform Jual Beli Mobil Terbaik 2023
                        </h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>(+62) 82330478047 hayaautoexpress@gmail.com></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/jquery-3.0.0.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/plugin.js')); ?>"></script>
      <!-- sidebar -->
      <script src="<?php echo e(asset('js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
   <script>
        document.getElementById('predictForm').onsubmit = async function(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const params = new URLSearchParams(formData).toString();
            const response = await fetch(`http://localhost:5000/predicts?${params}`);
            const result = await response.json();
            var img = document.getElementById('plot');
    
            // Change the src attribute
            img.src = 'http://localhost:5000/gambar';
            var hasil = document.getElementById('hasil');
    
            // Change the src attribute
            hasil.textContent  = 'Hasil Prediksi: '+result['predict'];
            //document.getElementById('scatterPlot').src = result.plot_url;
        };
    </script>
</html>
<?php /**PATH C:\xampp_8_2\htdocs\iya_laravel\resources\views/welcome.blade.php ENDPATH**/ ?>