<?php
require 'function.php';
$pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STIMATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="js/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="js/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="js/WOW/css/libs/animate.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand wow animate__fadeInLeft " href="#">STIMATA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- <a class="nav-link active text-warning" aria-current="page" href="#">Home</a> -->
                    </li>
                </ul>


                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button type="button" class="rounded-pill btn m-3 px-4 fw-bold btn-warning text-white">Dashboard Admin</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container ">
        <div class="row my-5 px-5">
            <div class="col-12 col-lg-6 col-sm-12 my-5">
                <h1 class="wow animate__fadeInLeft " data-wow-delay="0.8s"> </h1>
                <h2 class="text-warning wow animate__fadeInLeft" data-wow-delay="1s">Kuliah Cepat 1 Tahun Bisa Sarjana</h2>
                <span class="wow animate__fadeInLeft " data-wow-delay="0.4s">STIMATA menjadi satu satunya Sekolah Tinggi di Malang raya yang menjadi penyelenggara resmi RPL. Melalui jalur RPL kamu bisa jadi sarjana dalam waktu singkat</span><br>
                <a href="https://stimata.ac.id/">
                    <button type="button" class=" wow animate__bounce animate__repeat-2 rounded-pill btn m-5 p-2 px-5 btn-warning text-white shadow mb-5 fw-bold rounded"> Kepoin Yuk!</button>
                </a>
            </div>
            <div class="col-12 col-lg-6 col-sm-12">
                <div class="position-relative h-100 w-100">
                    <div class="position-absolute bottom-0 start-50 translate-middle-x">
                        <img class="w-100 wow animate__fadeIn" src="img/hero.png" alt="img" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-5 my-5">
        <div class="row">
            <div class="col-12 col-lg-7 col-sm-12 px-5 ">
                <h2 class="wow animate__fadeInLeft" data-wow-delay="0.3s"> Daftar Sekarang ! <br> Dan Dapatkan Harga Khusus Dari Kami !!</h2>
                <h2 class="text-warning  wow animate__fadeInLeft" data-wow-delay="0.6s"></h2>
                <p class="wow animate__fadeInLeft" data-wow-delay="0.8s">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias officiis amet ea et nisi eius possimus itaque blanditiis numquam corporis?</p>
                <a href="https://stimata.ac.id/">
                    <button type="button" class="rounded-pill btn m-5 p-2 px-5 btn-warning text-white shadow mb-5 fw-bold rounded"> Daftar Sekarang</button>
                </a>
            </div>

            <div class="col-12 col-lg-4 col-sm-12 wow animate__fadeInRight mt-5">
                <div class="shadow p-4 mb-5 rounded text-center">
                    <img src="img/programming.png" class="w-25" alt="img" srcset="">
                    <h5 class="my-3">D3 - Sistem Infromasi</h5>
                    <p>Berfokus pada Database Administrator, Software Programmer, Web Administrator, Mobile Game Programmer. Bagi kamu yang suka Coding atau membuat aplikasi berbasis Web, Dekstop, Mobile Device. Kamu sangat cocok untuk bergabung dengan Prodi D3 Sistem Informasi.</p>
                    <a href="https://stimata.ac.id/">
                        <button type="button" class="btn m-2 py-3 px-5 text-primary shadow fw-bold rounded"> Learn more</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-12 ms-auto text-center wow animate__fadeInLeft">
                <div class="shadow p-4 mb-5 rounded text-center">
                    <img src="img/paint-palette.png" class="w-25" alt="img" srcset="">
                    <h5 class="my-3">S1 - Teknologi Informasi​</h5>
                    <p>Berfokus pada Database Administrator, Software Programmer, Egineer, IT Arsitek (Cloud), Internet Of Things (IOT). Bagi kamu yang suka Coding atau membuat aplikasi berbasis Web, Dekstop, Mobile Device. Kamu sangat cocok untuk bergabung dengan Prodi D3 Sistem Informasi.</p>
                    <a href="https://stimata.ac.id/">
                        <button type="button" class="btn m-2 py-3 px-5 text-primary shadow fw-bold rounded"> Learn more</button>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sm-12 text-center wow animate__fadeInRight">
                <div class="shadow p-4 mb-5 rounded text-center">
                    <img src="img/ux.png" class="w-25" alt="img" srcset="">
                    <h5 class="my-3">S1 - Sistem Informasi​</h5>
                    <p>Berfokus pada Database Administrator, Software Programmer/Egineer, Web Master SEO Analyst, Big Data Analyst. Bagi kamu yang menginginkan prospek kerja yang menjanjikan seperti Big Data analyst / SEO Analyst. Kamu harus berganbung dengan Prodi S1 Sistem Informasi.</p>
                    <a href="https://stimata.ac.id/">
                        <button type="button" class="btn m-2 py-3 px-5 text-primary shadow fw-bold rounded"> Learn more</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
     
    <div class="container p-5">
        <div class="row">
            <div class="col-12 col-lg-12 col-sm-12 text-center px-5 wow animate__fadeIn">
                <h2> Berita Kampus </h2>
                <p></p>
            </div>
            <section class="autoplay slider">
                <?php
                $i = 1;
                foreach ($pelanggan as $plg) :
                ?>
                    <div class="col-4 col-lg-4 col-sm-12"> 
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $plg['nama_pelanggan']; ?></h5>
                                <p class="card-text"><?= $plg['notelp']; ?> </p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </section>
        </div>

         
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-lg-12 col-sm-12 text-center bg-light">
            <p> </p>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="js/slick/slick/slick.js" type="text/javascript" charset="utf-8"></script>

    <script src="js/WOW/dist/wow.js"></script>
    <script>
        wow = new WOW({
            animateClass: 'animated',
            mobile: 'false',
            offset: 100,
            live: true,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
        document.getElementById('moar').onclick = function() {
            var section = document.createElement('section');
            section.className = 'section--purple wow fadeInDown';
            this.parentNode.insertBefore(section, this);
        };
    </script>

    <script type="text/javascript">
        $(document).on('ready', function() {
            $('.autoplay').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1200,
            });
        });
    </script>

</body>

</html>