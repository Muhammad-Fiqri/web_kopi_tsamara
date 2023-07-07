<?php session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kopi_tsamarah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$c11;
$c12;
$c13;
$c14;
$c15;
$c21;
$c22;
$c23;
$c24;
$c25;
$c31;
$c32;
$c33;
$c34;
$c35;
$c41;
$c42;
$c43;
$c44;
$c45;
$c51;
$c52;
$c53;
$c54;
$c55;
$c61;
$c62;
$c63;
$c64;
$c65;


$sql = "SELECT * FROM nilai_alternatif  WHERE id = 1";
$result = $conn->query($sql);

// Memeriksa hasil query
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Menghitung nilai
        $c1=$row['c1'];
        $c2=$row['c2'];
        $c3=$row['c3'];
        $c4=$row['c4'];
        $c5=$row['c5'];

        $c11=$c1;
        $c12=$c2;
        $c13=$c3;
        $c14=$c4;
        $c15=$c5;
    }

} else {
    echo "Tidak ada data yang ditemukan dalam tabel.";
}


$sql2 = "SELECT * FROM nilai_alternatif  WHERE id = 2";
$result2 = $conn->query($sql2);

// Memeriksa hasil query
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        // Menghitung nilai
        $c1=$row['c1'];
        $c2=$row['c2'];
        $c3=$row['c3'];
        $c4=$row['c4'];
        $c5=$row['c5'];

        $c21=$c1;
        $c22=$c2;
        $c23=$c3;
        $c24=$c4;
        $c25=$c5;
    }
} else {
    echo "Tidak ada data yang ditemukan dalam tabel.";
}

$sql3 = "SELECT * FROM nilai_alternatif  WHERE id = 3";
$result3 = $conn->query($sql3);

// Memeriksa hasil query
if ($result3->num_rows > 0) {
    while ($row = $result3->fetch_assoc()) {
        // Menghitung nilai
        $c1=$row['c1'];
        $c2=$row['c2'];
        $c3=$row['c3'];
        $c4=$row['c4'];
        $c5=$row['c5'];

        $c31=$c1;
        $c32=$c2;
        $c33=$c3;
        $c34=$c4;
        $c35=$c5;
    }
} else {
    echo "Tidak ada data yang ditemukan dalam tabel.";
}

$sql4 = "SELECT * FROM nilai_alternatif  WHERE id = 4";
$result4 = $conn->query($sql4);

// Memeriksa hasil query
if ($result4->num_rows > 0) {
    while ($row = $result4->fetch_assoc()) {
        // Menghitung nilai
        $c1=$row['c1'];
        $c2=$row['c2'];
        $c3=$row['c3'];
        $c4=$row['c4'];
        $c5=$row['c5'];

        $c41=$c1;
        $c42=$c2;
        $c43=$c3;
        $c44=$c4;
        $c45=$c5;
    }
} else {
    echo "Tidak ada data yang ditemukan dalam tabel.";
}
$sql5 = "SELECT * FROM nilai_alternatif  WHERE id = 5";
$result5 = $conn->query($sql5);

// Memeriksa hasil query
if ($result5->num_rows > 0) {
    while ($row = $result5->fetch_assoc()) {
        // Menghitung nilai
        $c1=$row['c1'];
        $c2=$row['c2'];
        $c3=$row['c3'];
        $c4=$row['c4'];
        $c5=$row['c5'];

        $c51=$c1;
        $c52=$c2;
        $c53=$c3;
        $c54=$c4;
        $c55=$c5;
    }
} else {
    echo "Tidak ada data yang ditemukan dalam tabel.";
}

$sql6 = "SELECT * FROM nilai_alternatif  WHERE id = 6";
$result6 = $conn->query($sql6);

// Memeriksa hasil query
if ($result6->num_rows > 0) {
    while ($row = $result6->fetch_assoc()) {
        // Menghitung nilai
        $c1=$row['c1'];
        $c2=$row['c2'];
        $c3=$row['c3'];
        $c4=$row['c4'];
        $c5=$row['c5'];

        $c61=$c1;
        $c62=$c2;
        $c63=$c3;
        $c64=$c4;
        $c65=$c5;
    }
} else {
    echo "Tidak ada data yang ditemukan dalam tabel.";
}

            $x1 = sqrt( pow(  $c11, 2)+pow(  $c21, 2)+pow(  $c31, 2) + pow(  $c41, 2) + pow(  $c51, 2)+pow(  $c61, 2));
            $x2 = sqrt( pow(  $c12, 2)+pow(  $c22, 2)+pow(  $c32, 2) + pow(  $c42, 2) + pow(  $c52, 2)+pow(  $c62, 2));
            $x3 = sqrt( pow(  $c13, 2)+pow(  $c23, 2)+pow(  $c33, 2) + pow(  $c43, 2) + pow(  $c53, 2)+pow(  $c63, 2));
            $x4 = sqrt( pow(  $c14, 2)+pow(  $c24, 2)+pow(  $c34, 2) + pow(  $c44, 2) + pow(  $c54, 2)+pow(  $c64, 2));
            $x5 = sqrt( pow(  $c15, 2)+pow(  $c25, 2)+pow(  $c35, 2) + pow(  $c45, 2) + pow(  $c55, 2)+pow(  $c65, 2));

            $x11 = 5*$c11/$x1;
            $x12 = 5*$c21/$x1;
            $x13 = 5*$c31/$x1;
            $x14 = 5*$c41/$x1;
            $x15 = 5*$c51/$x1;
            $x16 = 5*$c61/$x1;

            

            $x21 = 4*$c12/$x2;
            $x22 = 4*$c22/$x2;
            $x23 = 4*$c32/$x2;
            $x24 = 4*$c42/$x2;
            $x25 = 4*$c52/$x2;
            $x26 = 4*$c62/$x2;



            $x31 = 3*$c13/$x3;
            $x32 = 3*$c23/$x3;
            $x33 = 3*$c33/$x3;
            $x34 = 3*$c43/$x3;
            $x35 = 3*$c53/$x3;
            $x36 = 3*$c63/$x3;




            $x41 = 4*$c14/$x4;
            $x42 = 4*$c24/$x4;
            $x43 = 4*$c34/$x4;
            $x44 = 4*$c44/$x4;
            $x45 = 4*$c54/$x4;
            $x46 = 4*$c64/$x4;



            $x51 = 5*$c15/$x5;
            $x52 = 5*$c25/$x5;
            $x53 = 5*$c35/$x5;
            $x54 = 5*$c45/$x5;
            $x55 = 5*$c55/$x5;
            $x56 = 5*$c65/$x5;


            $x111 = [$x11,$x12,$x13,$x14,$x15,$x16];
            $y11 = max($x111);
            $y12 = min($x111);
            
            $x112 = [$x21,$x22,$x23,$x24,$x25,$x26];
            $y21 = max($x112);
            $y22 = min($x112);
            
            $x113 = [$x31,$x32,$x33,$x34,$x35,$x36];
            $y31 = max($x113);
            $y32 = min($x113);
            
            $x114 = [$x41,$x42,$x43,$x44,$x45,$x46];
            $y41 = max($x114);
            $y42 = min($x114);

            $x115 = [$x51,$x52,$x53,$x54,$x55,$x56];
            $y51 = max($x115);
            $y52 = min($x115);

            

            $d11 = sqrt( pow($x11-$y11 , 2)+pow($x21-$y21 , 2)+pow($x31-$y31 , 2)+pow($x41-$y41 , 2)+pow($x51-$y51 , 2));
            $d12 = sqrt( pow($x12-$y11 , 2)+pow($x22-$y21 , 2)+pow($x32-$y31 , 2)+pow($x42-$y41 , 2)+pow($x52-$y51 , 2));
            $d13 = sqrt( pow($x13-$y11 , 2)+pow($x23-$y21 , 2)+pow($x33-$y31 , 2)+pow($x43-$y41 , 2)+pow($x53-$y51 , 2));
            $d14 = sqrt( pow($x14-$y11 , 2)+pow($x24-$y21 , 2)+pow($x34-$y31 , 2)+pow($x44-$y41 , 2)+pow($x54-$y51 , 2));
            $d15 = sqrt( pow($x15-$y11 , 2)+pow($x25-$y21 , 2)+pow($x35-$y31 , 2)+pow($x45-$y41 , 2)+pow($x55-$y51 , 2));
            $d16 = sqrt( pow($x16-$y11 , 2)+pow($x26-$y21 , 2)+pow($x36-$y31 , 2)+pow($x46-$y41 , 2)+pow($x56-$y51 , 2));

            $d21 = sqrt( pow($x11-$y12 , 2)+pow($x21-$y22 , 2)+pow($x31-$y32 , 2)+pow($x41-$y42 , 2)+pow($x51-$y52 , 2));
            $d22 = sqrt( pow($x12-$y12 , 2)+pow($x22-$y22 , 2)+pow($x32-$y32 , 2)+pow($x42-$y42 , 2)+pow($x52-$y52 , 2));
            $d23 = sqrt( pow($x13-$y12 , 2)+pow($x23-$y22 , 2)+pow($x33-$y32 , 2)+pow($x43-$y42 , 2)+pow($x53-$y52 , 2));
            $d24 = sqrt( pow($x14-$y12 , 2)+pow($x24-$y22 , 2)+pow($x34-$y32 , 2)+pow($x44-$y42 , 2)+pow($x54-$y52 , 2));
            $d25 = sqrt( pow($x15-$y12 , 2)+pow($x25-$y22 , 2)+pow($x35-$y32 , 2)+pow($x45-$y42 , 2)+pow($x55-$y52 , 2));
            $d26 = sqrt( pow($x16-$y12 , 2)+pow($x26-$y22 , 2)+pow($x36-$y32 , 2)+pow($x46-$y42 , 2)+pow($x56-$y52 , 2));

            $v1 = $d21/($d21+$d11);
            $v2 = $d22/($d22+$d12);
            $v3 = $d23/($d23+$d13);
            $v4 = $d24/($d24+$d14);
            $v5 = $d25/($d25+$d15);
            $v6 = $d26/($d26+$d16);
            
            $data = [$v1,$v2,$v3,$v4,$v5,$v6];
            $sortedData = $data; // Buat salinan data yang akan diurutkan
            rsort($sortedData); // Urutkan data secara menurun

            $rank = array();
            foreach ($data as $value) {
            $rank[] = array_search($value, $sortedData) + 1;
            }

            $r1=$rank[0];
            $r2=$rank[1];
            $r3=$rank[2];
            $r4=$rank[3];
            $r5=$rank[4];
            $r6=$rank[5];
            
            //$sql = 'UPDATE nilai_alternatif  SET v1 = $v1 WHERE id = 1;UPDATE nilai_alternatif  SET v2 = $v2 WHERE id = 2;UPDATE nilai_alternatif  SET v3 = $v3 WHERE id = 3;UPDATE nilai_alternatif  SET v4 = $v4 WHERE id = 4;UPDATE nilai_alternatif  SET v5 = $v5 WHERE id = 5;UPDATE nilai_alternatif  SET v6 = $v6 WHERE id = 6;';
                  //$result1 = 

            //$result = $conn->query($sql);
              
              //$conn->close();
              //$stmt2 = $conn->prepare($sql4);
              //$stmt2->bind_param("ssssss", $v1, $v2, $v3, $v4, $v5, $v6);
              //$stmt2->execute();

              $stmt11 = $conn->prepare("UPDATE nilai_alternatif  SET v1 =?,ym=?,rank=? WHERE id = 1");
              $stmt11->bind_param("sss", $v1,$y12,$r1);
              $stmt11->execute();

              $stmt12 = $conn->prepare("UPDATE nilai_alternatif  SET v1 =?,ym=?,rank=? WHERE id = 2");
              $stmt12->bind_param("sss", $v2,$y22,$r2);
              $stmt12->execute();
              $stmt13 = $conn->prepare("UPDATE nilai_alternatif  SET v1 =?,ym=?,rank=? WHERE id = 3");
              $stmt13->bind_param("sss", $v3,$y32,$r3);
              $stmt13->execute();
              $stmt14 = $conn->prepare("UPDATE nilai_alternatif  SET v1 =?,ym=?,rank=? WHERE id = 4");
              $stmt14->bind_param("sss", $v4,$y42,$r4);
              $stmt14->execute();
              $stmt15 = $conn->prepare("UPDATE nilai_alternatif  SET v1 =?,ym=?,rank=? WHERE id = 5");
              $stmt15->bind_param("sss", $v5,$y52,$r5);
              $stmt15->execute();

              $stmt16 = $conn->prepare("UPDATE nilai_alternatif  SET v1 =?,ym=?,rank=? WHERE id = 6");
              $stmt16->bind_param("sss", $v6,$y62,$r6);
              $stmt16->execute();
              
              //$sql4 = "UPDATE nilai_alternatif  SET v1 = $v1,yp =$x1,ym=$y12,rank=$r1 WHERE id = 1;
              // UPDATE nilai_alternatif  SET v1 = $v2,yp =$x2,ym=$y22,rank=$r2 WHERE id = 2;
              //   UPDATE nilai_alternatif  SET v1 = $v3,yp =$x3,ym=$y32,rank=$r3 WHERE id = 3;
              //   UPDATE nilai_alternatif  SET v1 = $v4,yp =$x4,ym=$y42,rank=$r4 WHERE id = 4;
              //   UPDATE nilai_alternatif  SET v1 = $v5,yp =$x5,ym=$y52,rank=$r5 WHERE id = 5;
              //   UPDATE nilai_alternatif  SET v1 = $v6,yp =$y11,ym=$y12,rank=$r6 WHERE id = 6;";

              //$stmt2 = $conn->multi_query($sql4);

// Check if the first form is submitted
    if (isset($_POST["form1_submit"])) {
    // Loop through the posted data and update the corresponding records for table1
    foreach ($_POST["table1_id"] as $key => $id) {
        //$kodealternatif  = $_POST["kodealternatif"];
        $id1 =intval($key)+1;
        $c1 = $_POST["table1_c1"][$key];
        $c2 = $_POST["table1_c2"][$key];
        $c3 = $_POST["table1_c3"][$key];
        $c4 = $_POST["table1_c4"][$key];
        $c5 = $_POST["table1_c5"][$key];

        
        

        // Prepare and execute the update query for table1
        $stmt1 = $conn->prepare("UPDATE nilai_alternatif SET c1 = ?, c2 = ?, c3 = ?, c4 = ?, c5 = ? WHERE id = ?");
        $stmt1->bind_param("iiiiii", $c1, $c2, $c3, $c4, $c5, $id1);
        $stmt1->execute();

        
        echo "Changes in Table 1 updated successfully.";
        header("location: dashboard.php#peringkat");
        //$stmt1->close();
        
    }
}


    if (isset($_POST["tambah_alternatif"])) {
    $alternatif = $_POST["alternatif"];
    $c1 = $_POST["ratingc1"];
    $c2 = $_POST["ratingc2"];
    $c3 = $_POST["ratingc3"];
    $c4 = $_POST["ratingc2"];
    $c5 = $_POST["ratingc3"];

    $stmt = $conn->prepare("UPDATE nilai_alternatif SET alternatif=?, c1=?, c2=?, c3=?, c4=?, c5=? WHERE id = 6");

    $stmt->bind_param("ssssss", $alternatif, $c1, $c2, $c3, $c4, $c5);
    $stmt->execute();

    
    //$stmt->close();

    echo "Changes in Table 1 updated successfully.";
    header("location: dashboard.php#peringkat");
    exit(); // Tambahkan exit() setelah header()
}







?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Pendukung Keputusan Pemilihan Kualitas Biji Kopi Terbaik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Outlet <span>Kopi Tarbulan.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu Kriteria</a></li>
          <li><a href="#events">Menu Alternatif</a></li>
          <li><a href="#chefs">Menu Bobot</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li ><a href="index.php" class="btn-book-a-table">Logout</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Outlet Kopi Tarbulan <br>(Grosir Kopi Murni)</h2>
          <p data-aos="fade-up" data-aos-delay="100">Kopi Asli dan Berkualitas</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Beli Kopi</a>
            <a href="https://www.youtube.com/watch?v=cKTF7o-NN20&ab_channel=DeniAce" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img1.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
          <p>Pelajari Lebih <span>Tentang Kami</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Beli Kopi</h4>
              <p>085311164567</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              Kopi Tarbulan berdiri sejak 2019, Kopi Tarbulan merupakan kegiatan UMKM yang bergerak di bidang agribisnis, produk pangan hasil pertanian dan perkebunan biji kopi.  Kopi Tarbulan diambil dari nama perkebunan Ataqbulan di daerah Oku Selatan (Sumatera Selatan). Kopi tarbulan berlokasi di Jl. Raya Villa Bekasi Indah No 7 Jejalenjaya, Tambun Utara, Bekasi. 
              <br>
              Minum kopi dalam jumlah yang tepat dapat memberikan berbagai manfaat bagi kesehatan, di antaranya : 
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Meningkatkan energi dan konsentrasi: Kandungan kafein dalam kopi dapat meningkatkan kadar dopamin dan adrenalin dalam otak, yang dapat membantu meningkatkan energi dan konsentrasi.</li>
                <li><i class="bi bi-check2-all"></i> Mengurangi risiko diabetes tipe 2: Beberapa penelitian menunjukkan bahwa konsumsi kopi dapat membantu mengurangi risiko terkena diabetes tipe 2, terutama pada orang yang mengonsumsinya secara rutin.</li>
                <li><i class="bi bi-check2-all"></i> Menjaga kesehatan jantung: Beberapa penelitian menunjukkan bahwa minum kopi dalam jumlah yang tepat dapat membantu menjaga kesehatan jantung dengan menurunkan risiko terkena penyakit jantung koroner.</li>
              </ul>
              <p>
              Kopi Tarbulan Kopi Bubuk Hitam Murni Tanpa Campuran. 
              Kopi Tarbulan diambil dari Biji Kopi Pilihan yang berasal dari Perkebunan Atarbulan milik Keluarga. 
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y09jMHudaI0&ab_channel=dinargrup" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Kenapa Pilih Kopi Tarbulan?</h3>
              <p>
                Kopi Tarbulan adalah outlet kopi yang terpercaya yang hanya menjual kopi dengan kualitas tinggi dan Asli.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Pelajari Lebih <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Kopi Tarbulan Murni Tanpa Campuran</h4>
                  <p>Kopi Tarbulan diambil dari Biji Kopi Pilihan yang berasal dari Perkebunan Atarbulan milik Keluarga. </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Kopi Pilihan</h4>
                  <p>Pemilihan Biji Kopi hingga didapatkan Biji Kopi berkualitas Terbaik, Kopi disangrai dengan temperatur Suhu yang terukur.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Cita Rasa Kopi Terjaga</h4>
                  <p>Untuk menjaga Kualitas & Citarasa Kopi Tarbulan, Pengemasan dilakukan dengan Higienis dan dikemas kedap udara.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pelanggan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p>Outlet</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jam Buka</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pekerja</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">


        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pengecekan Kualitas Kopi</h5>
              <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names..">

              <!-- Table with stripped rows -->
              <table class="table table-striped"id= "table_id">
                <thead>
                  <tr>
                    <th scope="col" style="text-center">No</th>
                    <th scope="col">Kode Kriteria</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col" style="text-align: center;">Nilai Mutu</th>
                    <th scope="col" style="text-align: center;">Nilai</th>
                  </tr>
                </thead>
                <tbody id="tbody_table_record">
                <?php
                //include 'daftar_nilai.php';
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $num = 0;
                  //$pdo = Database::connect();
          
                  $sql = 'SELECT * FROM kriteria';
                  //$result1 = 

                  $result = $conn->query($sql);

          
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
            $num++;

            echo '<tr>';
            echo '<td>'. $num . '</td>';
            echo '<td class="bdr">'. $row['kode_kriteria'] . '</td>';
            echo '<td class="bdr">'. $row['kriteria'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['nilai_mutu'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['nilai'] . '</td>';
          }
          } else {
          echo "0 results";
          }
          
          $conn->close();
          //------------------------------------------------------------
        ?>
      </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <br>
    
    <div class="btn-group">
      <button class="button" id="btn_prev" onclick="prevPage()">Prev</button>
      <button class="button" id="btn_next" onclick="nextPage()">Next</button>
      <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;;">
        <p style="position:relative; font-size: 14px;"> Table : <span id="page"></span></p>
      </div>
      <select name="number_of_rows" id="number_of_rows">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      <button class="button" id="btn_apply" onclick="apply_Number_of_Rows()">Apply</button>
    </div>

    <br>
    <script>
    function searchTable() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("table_id");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those that don't match the search query
      for (i = 0; i < tr.length; i++) {
    var matchFound = false;
    td = tr[i].getElementsByTagName("td");

    for (var j = 0; j < td.length; j++) {
      if (td[j]) {
        txtValue = td[j].textContent || td[j].innerText;
        txtValue = txtValue.toLowerCase(); // Convert the table cell value to lowercase

        // Use regular expression to search for the filter text as a substring
        var regex = new RegExp(filter, 'i'); // 'i' flag for case-insensitive search
        if (regex.test(txtValue)) {
          matchFound = true;
          break;
        }
      }
    }

    if (matchFound) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }

    }
  </script>
    <script>
      //------------------------------------------------------------
      var current_page = 1;
      var records_per_page = 10;
      var l = document.getElementById("table_id").rows.length
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function apply_Number_of_Rows() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function prevPage() {
        if (current_page > 1) {
            current_page--;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function nextPage() {
        if (current_page < numPages()) {
            current_page++;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function changePage(page) {
        var btn_next = document.getElementById("btn_next");
        var btn_prev = document.getElementById("btn_prev");
        var listing_table = document.getElementById("table_id");
        var page_span = document.getElementById("page");
       
        // Validate page
        if (page < 1) page = 1;
        if (page > numPages()) page = numPages();

        [...listing_table.getElementsByTagName('tr')].forEach((tr)=>{
            tr.style.display='none'; // reset all to not display
        });
        listing_table.rows[0].style.display = ""; // display the title row

        for (var i = (page-1) * records_per_page + 1; i < (page * records_per_page) + 1; i++) {
          if (listing_table.rows[i]) {
            listing_table.rows[i].style.display = ""
          } else {
            continue;
          }
        }
          
        page_span.innerHTML = page + "/" + numPages() + " (Total Number of Rows = " + (l-1) + ") | Number of Rows : ";
        
        if (page == 0 && numPages() == 0) {
          btn_prev.disabled = true;
          btn_next.disabled = true;
          return;
        }

        if (page == 1) {
          btn_prev.disabled = true;
        } else {
          btn_prev.disabled = false;
        }

        if (page == numPages()) {
          btn_next.disabled = true;
        } else {
          btn_next.disabled = false;
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function numPages() {
        return Math.ceil((l - 1) / records_per_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      window.onload = function() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      };
      //------------------------------------------------------------
    </script>

            </div>
          </div>

        <div class="section-header" style="margin-top:100px">
          <h2>Menu Kami</h2>
          <p>Cek Menu <span>Kopi Tarbulan</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Arabika</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Robusta</h4>
            </a><!-- End tab nav item -->
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Arabika</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kopi Arabika Aceh Gayo </h4>
                <p class="ingredients">
                  Asli Arabika Gayo
                </p>
                <p class="price">
                  Rp40.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kopi Arabika Toraja</h4>
                <p class="ingredients">
                  Asli Arabika Toraja
                </p>
                <p class="price">
                  Rp38.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kopi Arabika Sidikalang</h4>
                <p class="ingredients">
                  Arabika Asli Sidikalang
                </p>
                <p class="price">
                  Rp40.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Robusta</h3>
            </div>

            <div class="row gy-5">

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kopi Tarbulan Jenis Robusta</h4>
                <p class="ingredients">
                  Kopi Robusta Asli
                </p>
                <p class="price">
                  Rp50.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kopi Robusta Aceh Gayo</h4>
                <p class="ingredients">
                  Asli Aceh Gayo
                </p>
                <p class="price">
                  Rp24.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4>Kopi Robusta Jantan Lanang</h4>
                <p class="ingredients">
                  Kopi Buat Laki Lanang
                </p>
                <p class="price">
                  Rp25.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimoni</h2>
          <p>Apa yang mereka <span>Katakan Tentang Kami</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Kopinya mantap sekali, cocok sambil menemani saya membela kasus Mr. Walter White, Better Call Saul!!!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Saul Goodman</h3>
                      <h4>Penikmat &amp; Ahli Kopi</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Kopinya berkualitas sekali dan rasanya tahan lama karena kemasan berkualitas
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Taste of Kopinya ya guys, wih, delicious bwaaaangett, melebihi coffeenya starbucks, saya very recommendeddd
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jena Karlis</h3>
                      <h4>Selebgram</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Kopinya uenakk banget rek, pelanggan di cafe pada suka
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>John Larson</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nilai Alternatif</h5>
              <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names..">

              <!-- Table with stripped rows -->
              <table class="table table-striped"id= "table_id">
                <thead>
                  <tr>
                    <th scope="col" style="text-center">No</th>
                    <th scope="col">Kode Alternatif</th>
                    <th scope="col">Alternatif</th>
                    
                    <th scope="col" style="text-align: center;">C1</th>
                    <th scope="col" style="text-align: center;">C2</th>
                    <th scope="col" style="text-align: center;">C3</th>
                    <th scope="col" style="text-align: center;">C4</th>
                    <th scope="col" style="text-align: center;">C5</th>
                    
                  </tr>
                </thead>
                <tbody id="tbody_table_record">
                <?php
                //include 'daftar_nilai.php';
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $num = 0;
                  //$pdo = Database::connect();
          
                  $sql = 'SELECT * FROM nilai_alternatif LIMIT 5';
                  //$result1 = 

                  $result = $conn->query($sql);
          $kodekriteria1 =0;
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
            $num++;

            echo '<tr>';
            echo '<td>'. $num . '</td>';
            
            echo '<td class="bdr">'. $row['kode_alternatif'] . '</td>';
            echo '<td class="bdr">'. $row['alternatif'] . '</td>';
           
            echo '<td class="bdr" style="text-align: center;">'. $row['c1'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['c2'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['c3'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['c4'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['c5'] . '</td>';
          }
          } else {
          echo "0 results";
          }
          
          $conn->close();
          //------------------------------------------------------------
        ?>
      </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <br>
    
    <div class="btn-group">
      <button class="button" id="btn_prev" onclick="prevPage()">Prev</button>
      <button class="button" id="btn_next" onclick="nextPage()">Next</button>
      <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;;">
        <p style="position:relative; font-size: 14px;"> Table : <span id="page"></span></p>
      </div>
      <select name="number_of_rows" id="number_of_rows">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      <button class="button" id="btn_apply" onclick="apply_Number_of_Rows()">Apply</button>
    </div>
    <div style="text-align:  center;">
      <a href="#form_tambah_alternatif" class="btn" style="background-color:#A1C2F1;">Tambah Alternatif</a>
      <a href="#form_update_alternatif" class="btn" style="background-color:#FFD0D0;">Edit Nilai Alternatif</a>

    </div>
    <br>
    <script>
    function searchTable() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("table_id");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those that don't match the search query
      for (i = 0; i < tr.length; i++) {
    var matchFound = false;
    td = tr[i].getElementsByTagName("td");

    for (var j = 0; j < td.length; j++) {
      if (td[j]) {
        txtValue = td[j].textContent || td[j].innerText;
        txtValue = txtValue.toLowerCase(); // Convert the table cell value to lowercase

        // Use regular expression to search for the filter text as a substring
        var regex = new RegExp(filter, 'i'); // 'i' flag for case-insensitive search
        if (regex.test(txtValue)) {
          matchFound = true;
          break;
        }
      }
    }

    if (matchFound) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }

    }
  </script>
    <script>
      //------------------------------------------------------------
      var current_page = 1;
      var records_per_page = 10;
      var l = document.getElementById("table_id").rows.length
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function apply_Number_of_Rows() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function prevPage() {
        if (current_page > 1) {
            current_page--;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function nextPage() {
        if (current_page < numPages()) {
            current_page++;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function changePage(page) {
        var btn_next = document.getElementById("btn_next");
        var btn_prev = document.getElementById("btn_prev");
        var listing_table = document.getElementById("table_id");
        var page_span = document.getElementById("page");
       
        // Validate page
        if (page < 1) page = 1;
        if (page > numPages()) page = numPages();

        [...listing_table.getElementsByTagName('tr')].forEach((tr)=>{
            tr.style.display='none'; // reset all to not display
        });
        listing_table.rows[0].style.display = ""; // display the title row

        for (var i = (page-1) * records_per_page + 1; i < (page * records_per_page) + 1; i++) {
          if (listing_table.rows[i]) {
            listing_table.rows[i].style.display = ""
          } else {
            continue;
          }
        }
          
        page_span.innerHTML = page + "/" + numPages() + " (Total Number of Rows = " + (l-1) + ") | Number of Rows : ";
        
        if (page == 0 && numPages() == 0) {
          btn_prev.disabled = true;
          btn_next.disabled = true;
          return;
        }

        if (page == 1) {
          btn_prev.disabled = true;
        } else {
          btn_prev.disabled = false;
        }

        if (page == numPages()) {
          btn_next.disabled = true;
        } else {
          btn_next.disabled = false;
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function numPages() {
        return Math.ceil((l - 1) / records_per_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      window.onload = function() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      };
      //------------------------------------------------------------
    </script>

            </div>
          </div>

        <div class="section-header" style="margin-top:100px">
          <h2>Toko</h2>
          <p>Cek Foto <span>Toko</span> Kami</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
              <h3>Logo</h3>
              <div class="price align-self-start">Deskripsi:</div>
              <p class="description">
                Logo Kopi Tarbulan
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-2.jpg)">
              <h3>Kemasan Kopi Tarbulan</h3>
              <div class="price align-self-start">Deskripsi:</div>
              <p class="description">
                Kemasan Kopi Tarbulan Kedap Udara Menjaga Kualitas Dan Cita Rasa
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
              <h3>Tampilan Jalan Toko</h3>
              <div class="price align-self-start">Deskripsi:</div>
              <p class="description">
                Jalan Toko Di Google Map
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bobot</h5>
              <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names..">

              <!-- Table with stripped rows -->
              <table class="table table-striped"id= "table_id">
                <thead>
                  <tr>
                    <th scope="col" style="text-center">No</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col" style="text-align: center;">Bobot</th>
                  </tr>
                </thead>
                <tbody id="tbody_table_record">
                <?php
                //include 'daftar_nilai.php';
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $num = 0;
                  //$pdo = Database::connect();
          
                  $sql = 'SELECT * FROM bobot';
                  //$result1 = 

                  $result = $conn->query($sql);
          $kodekriteria1 =0;
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
            $num++;

            echo '<tr>';
            echo '<td>'. $num . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['keterangan'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['bobot'] . '</td>';
          }
          } else {
          echo "0 results";
          }
          
          $conn->close();
          //------------------------------------------------------------
        ?>
      </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <br>
    
    <div class="btn-group">
      <button class="button" id="btn_prev" onclick="prevPage()">Prev</button>
      <button class="button" id="btn_next" onclick="nextPage()">Next</button>
      <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;;">
        <p style="position:relative; font-size: 14px;"> Table : <span id="page"></span></p>
      </div>
      <select name="number_of_rows" id="number_of_rows">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      <button class="button" id="btn_apply" onclick="apply_Number_of_Rows()">Apply</button>
    </div>

    <br>
    <script>
    function searchTable() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("table_id");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those that don't match the search query
      for (i = 0; i < tr.length; i++) {
    var matchFound = false;
    td = tr[i].getElementsByTagName("td");

    for (var j = 0; j < td.length; j++) {
      if (td[j]) {
        txtValue = td[j].textContent || td[j].innerText;
        txtValue = txtValue.toLowerCase(); // Convert the table cell value to lowercase

        // Use regular expression to search for the filter text as a substring
        var regex = new RegExp(filter, 'i'); // 'i' flag for case-insensitive search
        if (regex.test(txtValue)) {
          matchFound = true;
          break;
        }
      }
    }

    if (matchFound) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }

    }
  </script>
    <script>
      //------------------------------------------------------------
      var current_page = 1;
      var records_per_page = 10;
      var l = document.getElementById("table_id").rows.length
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function apply_Number_of_Rows() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function prevPage() {
        if (current_page > 1) {
            current_page--;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function nextPage() {
        if (current_page < numPages()) {
            current_page++;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function changePage(page) {
        var btn_next = document.getElementById("btn_next");
        var btn_prev = document.getElementById("btn_prev");
        var listing_table = document.getElementById("table_id");
        var page_span = document.getElementById("page");
       
        // Validate page
        if (page < 1) page = 1;
        if (page > numPages()) page = numPages();

        [...listing_table.getElementsByTagName('tr')].forEach((tr)=>{
            tr.style.display='none'; // reset all to not display
        });
        listing_table.rows[0].style.display = ""; // display the title row

        for (var i = (page-1) * records_per_page + 1; i < (page * records_per_page) + 1; i++) {
          if (listing_table.rows[i]) {
            listing_table.rows[i].style.display = ""
          } else {
            continue;
          }
        }
          
        page_span.innerHTML = page + "/" + numPages() + " (Total Number of Rows = " + (l-1) + ") | Number of Rows : ";
        
        if (page == 0 && numPages() == 0) {
          btn_prev.disabled = true;
          btn_next.disabled = true;
          return;
        }

        if (page == 1) {
          btn_prev.disabled = true;
        } else {
          btn_prev.disabled = false;
        }

        if (page == numPages()) {
          btn_next.disabled = true;
        } else {
          btn_next.disabled = false;
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function numPages() {
        return Math.ceil((l - 1) / records_per_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      window.onload = function() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      };
      //------------------------------------------------------------
    </script>

            </div>
          </div>



         <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bobot Kriteria</h5>
              <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names..">

              <!-- Table with stripped rows -->
              <table class="table table-striped"id= "table_id">
                <thead>
                  <tr>
                    <th scope="col" style="text-center">No</th>
                    <th scope="col" style="text-align: center;">Kode Kriteria</th>
                    <th scope="col" style="text-align: center;">Kriteria</th>
                    <th scope="col" style="text-align: center;">Bobot</th>
                    <th scope="col" style="text-align: center;">Atribut</th>
                  </tr>
                </thead>
                <tbody id="tbody_table_record">
                <?php
                //include 'daftar_nilai.php';
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $num = 0;
                  //$pdo = Database::connect();
          
                  $sql = 'SELECT * FROM bobot_kriteria';
                  //$result1 = 

                  $result = $conn->query($sql);
          $kodekriteria1 =0;
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
            $num++;

            echo '<tr>';
            echo '<td>'. $num . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['kode_kriteria'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['kriteria'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['bobot'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['atribut'] . '</td>';
          }
          } else {
          echo "0 results";
          }
          
          $conn->close();
          //------------------------------------------------------------
        ?>
      </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <br>
    
    <div class="btn-group">
      <button class="button" id="btn_prev" onclick="prevPage()">Prev</button>
      <button class="button" id="btn_next" onclick="nextPage()">Next</button>
      <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;;">
        <p style="position:relative; font-size: 14px;"> Table : <span id="page"></span></p>
      </div>
      <select name="number_of_rows" id="number_of_rows">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      <button class="button" id="btn_apply" onclick="apply_Number_of_Rows()">Apply</button>
    </div>

    <br>
    <script>
    function searchTable() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("table_id");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those that don't match the search query
      for (i = 0; i < tr.length; i++) {
    var matchFound = false;
    td = tr[i].getElementsByTagName("td");

    for (var j = 0; j < td.length; j++) {
      if (td[j]) {
        txtValue = td[j].textContent || td[j].innerText;
        txtValue = txtValue.toLowerCase(); // Convert the table cell value to lowercase

        // Use regular expression to search for the filter text as a substring
        var regex = new RegExp(filter, 'i'); // 'i' flag for case-insensitive search
        if (regex.test(txtValue)) {
          matchFound = true;
          break;
        }
      }
    }

    if (matchFound) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }

    }
  </script>
    <script>
      //------------------------------------------------------------
      var current_page = 1;
      var records_per_page = 10;
      var l = document.getElementById("table_id").rows.length
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function apply_Number_of_Rows() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function prevPage() {
        if (current_page > 1) {
            current_page--;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function nextPage() {
        if (current_page < numPages()) {
            current_page++;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function changePage(page) {
        var btn_next = document.getElementById("btn_next");
        var btn_prev = document.getElementById("btn_prev");
        var listing_table = document.getElementById("table_id");
        var page_span = document.getElementById("page");
       
        // Validate page
        if (page < 1) page = 1;
        if (page > numPages()) page = numPages();

        [...listing_table.getElementsByTagName('tr')].forEach((tr)=>{
            tr.style.display='none'; // reset all to not display
        });
        listing_table.rows[0].style.display = ""; // display the title row

        for (var i = (page-1) * records_per_page + 1; i < (page * records_per_page) + 1; i++) {
          if (listing_table.rows[i]) {
            listing_table.rows[i].style.display = ""
          } else {
            continue;
          }
        }
          
        page_span.innerHTML = page + "/" + numPages() + " (Total Number of Rows = " + (l-1) + ") | Number of Rows : ";
        
        if (page == 0 && numPages() == 0) {
          btn_prev.disabled = true;
          btn_next.disabled = true;
          return;
        }

        if (page == 1) {
          btn_prev.disabled = true;
        } else {
          btn_prev.disabled = false;
        }

        if (page == numPages()) {
          btn_next.disabled = true;
        } else {
          btn_next.disabled = false;
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function numPages() {
        return Math.ceil((l - 1) / records_per_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      window.onload = function() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      };
      //------------------------------------------------------------
    </script>

            </div>
          </div>


        
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pesan Kopi</h2>
          <p>Pesan <span>Kopi Anda</span> Dengan Kami</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesanan Booking Anda Di Terima, Anda Akan Mendapat Email atau Pesan Secepatnya, Terimakasih!</div>
              </div>
              <div class="text-center"><button type="submit">Pesan Meja</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">


        <div class="col-lg-16">

          <div id="form_tambah_alternatif" class="card">
            <div class="card-body">
              <h5 class="card-title">Form Tambah Alternatif </h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="POST">
                <div class="col-12">
                  <label for="inputnop" class="form-label">Kode Alternatif</label>
                  <input type="text" class="form-control" id="kodealternatif" name="kodealternatif" value="A6" disabled>
                </div>
                <div class="col-12">
                  <label for="inputnamalengkap" class="form-label">Alternatif</label>
                  <input type="text" class="form-control" id="alternatif " name="alternatif">
                </div>
                <div class=" container" style=" margin-top: 20px;">
                <div class=" row ">
                  <div class="col-3">
                  <label for="inputstatus" class="form-label">C1 => Kadar Air</label>
                  </div>
                  <div class="col"> 
                  <input type="radio" id="star5" name="ratingc1" value="5" style="margin-left:20px;">
                  <label for="star5" >5</label>
                  <input type="radio" id="star4" name="ratingc1" value="4" style="margin-left:20px;">
                  <label for="star4">4</label>
                  <input type="radio" id="star3" name="ratingc1" value="3" style="margin-left:20px;">
                  <label for="star3">3</label>
                  <input type="radio" id="star2" name="ratingc1" value="2" style="margin-left:20px;">
                  <label for="star2">2</label>
                  <input type="radio" id="star1" name="ratingc1" value="1" style="margin-left:20px;">
                  <label for="star1">1</label>
                  </div>
                </div>
                </div>
                <div class=" container" style=" margin-top: 20px;">
                <div class=" row ">
                  <div class="col-3">
                  <label for="inputstatus" class="form-label">C2 => Ketinggian Lokasi</label>
                  </div>
                  <div class="col"> 
                  <input type="radio" id="star5" name="ratingc2" value="5" style="margin-left:20px;">
                  <label for="star5" >5</label>
                  <input type="radio" id="star4" name="ratingc2" value="4" style="margin-left:20px;">
                  <label for="star4">4</label>
                  <input type="radio" id="star3" name="ratingc2" value="3" style="margin-left:20px;">
                  <label for="star3">3</label>
                  <input type="radio" id="star2" name="ratingc2" value="2" style="margin-left:20px;">
                  <label for="star2">2</label>
                  <input type="radio" id="star1" name="ratingc2" value="1" style="margin-left:20px;">
                  <label for="star1">1</label>
                  </div>
                </div>
                </div>
                <div class=" container" style=" margin-top: 20px;">
                <div class=" row ">
                  <div class="col-3">
                  <label for="inputstatus" class="form-label">C3 => Warna Biji</label>
                  </div>
                  <div class="col"> 
                  <input type="radio" id="star5" name="ratingc3" value="5" style="margin-left:20px;">
                  <label for="star5" >5</label>
                  <input type="radio" id="star4" name="ratingc3" value="4" style="margin-left:20px;">
                  <label for="star4">4</label>
                  <input type="radio" id="star3" name="ratingc3" value="3" style="margin-left:20px;">
                  <label for="star3">3</label>
                  <input type="radio" id="star2" name="ratingc3" value="2" style="margin-left:20px;">
                  <label for="star2">2</label>
                  <input type="radio" id="star1" name="ratingc3" value="1" style="margin-left:20px;">
                  <label for="star1">1</label>
                  </div>
                </div>
                </div>
                <div class=" container" style=" margin-top: 20px;">
                <div class=" row ">
                  <div class="col-3">
                  <label for="inputstatus" class="form-label">C4 => Aroma</label>
                  </div>
                  <div class="col"> 
                  <input type="radio" id="star5" name="ratingc4" value="5" style="margin-left:20px;">
                  <label for="star5" >5</label>
                  <input type="radio" id="star4" name="ratingc4" value="4" style="margin-left:20px;">
                  <label for="star4">4</label>
                  <input type="radio" id="star3" name="ratingc4" value="3" style="margin-left:20px;">
                  <label for="star3">3</label>
                  <input type="radio" id="star2" name="ratingc4" value="2" style="margin-left:20px;">
                  <label for="star2">2</label>
                  <input type="radio" id="star1" name="ratingc4" value="1" style="margin-left:20px;">
                  <label for="star1">1</label>
                  </div>
                </div>
                </div>
                <div class=" container" style=" margin-top: 20px;">
                <div class=" row ">
                  <div class="col-3">
                  <label for="inputstatus" class="form-label">C5 => Nilai Cacat</label>
                  </div>
                  <div class="col"> 
                  <input type="radio" id="star5" name="ratingc5" value="5" style="margin-left:20px;">
                  <label for="star5" >5</label>
                  <input type="radio" id="star4" name="ratingc5" value="4" style="margin-left:20px;">
                  <label for="star4">4</label>
                  <input type="radio" id="star3" name="ratingc5" value="3" style="margin-left:20px;">
                  <label for="star3">3</label>
                  <input type="radio" id="star2" name="ratingc5" value="2" style="margin-left:20px;">
                  <label for="star2">2</label>
                  <input type="radio" id="star1" name="ratingc5" value="1" style="margin-left:20px;">
                  <label for="star1">1</label>
                  </div>
                </div>
                </div>
                
                <div class="text-center">
                  
                  <button type="submit" name="tambah_alternatif" class="btn btn-primary" >Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>


          <div id="form_update_alternatif" class="card">
            <div class="card-body">
              <h5 class="card-title">Update Nilai Alternatif</h5>
              <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names..">

              <!-- Table with stripped rows -->
              <form method="POST" name="  form_update1">
              <table class="table table-striped"id= "table_id">
                <thead>
                  <tr>

                    <th scope="col" style="text-center">No</th>
                    <th scope="col">Kode Alternatif</th>
                    <th scope="col">Alternatif</th>
                    
                    <th scope="col" style="text-align: center;">C1</th>
                    <th scope="col" style="text-align: center;">C2</th>
                    <th scope="col" style="text-align: center;">C3</th>
                    <th scope="col" style="text-align: center;">C4</th>
                    <th scope="col" style="text-align: center;">C5</th>
                    
                  </tr>
                </thead>
                <tbody id="tbody_table_record">
                <?php
                //include 'daftar_nilai.php';
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $num = 0;
                  //$pdo = Database::connect();
          
                  $sql = 'SELECT * FROM nilai_alternatif LIMIT 5';
                  //$result1 = 

                  $result = $conn->query($sql);
          $kodekriteria1 =0;
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
            $num++;

            echo '<tr>';
            echo '<td><input type="hidden" name="table1_id[]" value=" . $row["id"] . ">'. $row["id"] . '</td>';
            
            echo '<td class="bdr">'. $row['kode_alternatif'] . '</td>';
            echo '<td class="bdr">'. $row['alternatif'] . '</td>';
           
            echo '<td><input type="text" style="width:30px;" name="table1_c1[]" value="' . $row['c1'] . '"></td>';
            echo '<td><input type="text" style="width:30px;" name="table1_c2[]" value="' . $row['c2'] . '"></td>';
            echo '<td><input type="text" style="width:30px;" name="table1_c3[]" value="' . $row['c3'] . '"></td>';
            echo '<td><input type="text" style="width:30px;" name="table1_c4[]" value="' . $row['c4'] . '"></td>';
            echo '<td><input type="text" style="width:30px;" name="table1_c5[]" value="' . $row['c5'] . '"></td>';
            echo '</tr>';
          }
          } else {
          echo "0 results";
          }
          
          $conn->close();
          //------------------------------------------------------------
        ?>
      </tbody>
              </table>
              <div style="  text-align:   center;"> 
                <input class=" button " style=" background-color:  #A1C2F1 " type='submit' name='form1_submit' value='Save Changes'>;
              </div>
              
            </form>
              <!-- End Table with stripped rows -->
              <br>
    
    <div class="btn-group">
      <button class="button" id="btn_prev" onclick="prevPage()">Prev</button>
      <button class="button" id="btn_next" onclick="nextPage()">Next</button>
      <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;;">
        <p style="position:relative; font-size: 14px;"> Table : <span id="page"></span></p>
      </div>
      <select name="number_of_rows" id="number_of_rows">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      <button class="button" id="btn_apply" onclick="apply_Number_of_Rows()">Apply</button>
    </div>
    
    <br>
    <script>
    function searchTable() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("table_id");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those that don't match the search query
      for (i = 0; i < tr.length; i++) {
    var matchFound = false;
    td = tr[i].getElementsByTagName("td");

    for (var j = 0; j < td.length; j++) {
      if (td[j]) {
        txtValue = td[j].textContent || td[j].innerText;
        txtValue = txtValue.toLowerCase(); // Convert the table cell value to lowercase

        // Use regular expression to search for the filter text as a substring
        var regex = new RegExp(filter, 'i'); // 'i' flag for case-insensitive search
        if (regex.test(txtValue)) {
          matchFound = true;
          break;
        }
      }
    }

    if (matchFound) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }

    }
  </script>
    <script>
      //------------------------------------------------------------
      var current_page = 1;
      var records_per_page = 10;
      var l = document.getElementById("table_id").rows.length
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function apply_Number_of_Rows() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function prevPage() {
        if (current_page > 1) {
            current_page--;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function nextPage() {
        if (current_page < numPages()) {
            current_page++;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function changePage(page) {
        var btn_next = document.getElementById("btn_next");
        var btn_prev = document.getElementById("btn_prev");
        var listing_table = document.getElementById("table_id");
        var page_span = document.getElementById("page");
       
        // Validate page
        if (page < 1) page = 1;
        if (page > numPages()) page = numPages();

        [...listing_table.getElementsByTagName('tr')].forEach((tr)=>{
            tr.style.display='none'; // reset all to not display
        });
        listing_table.rows[0].style.display = ""; // display the title row

        for (var i = (page-1) * records_per_page + 1; i < (page * records_per_page) + 1; i++) {
          if (listing_table.rows[i]) {
            listing_table.rows[i].style.display = ""
          } else {
            continue;
          }
        }
          
        page_span.innerHTML = page + "/" + numPages() + " (Total Number of Rows = " + (l-1) + ") | Number of Rows : ";
        
        if (page == 0 && numPages() == 0) {
          btn_prev.disabled = true;
          btn_next.disabled = true;
          return;
        }

        if (page == 1) {
          btn_prev.disabled = true;
        } else {
          btn_prev.disabled = false;
        }

        if (page == numPages()) {
          btn_next.disabled = true;
        } else {
          btn_next.disabled = false;
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function numPages() {
        return Math.ceil((l - 1) / records_per_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      window.onload = function() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      };
      //------------------------------------------------------------
    </script>

            </div>
          </div>


        <div class="section-header" style="margin-top:100px">
          <h2>gallery</h2>
          <p>Cek <span>Galeri Kami</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

        <div id="peringkat" class="card">
            <div class="card-body">
              <h5 class="card-title">PERINGKAT ALTERNATIF</h5>
              <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names..">

              <!-- Table with stripped rows -->
              <table class="table table-striped"id= "table_id">
                <thead>
                  <tr>
                    <th scope="col" style="text-center">No</th>
                    <th scope="col">Kode Alternatif</th>
                    <th scope="col">Alternatif</th>
                    
                    <th scope="col" style="text-align: center;">C1</th>
                    <th scope="col" style="text-align: center;">C2</th>
                    <th scope="col" style="text-align: center;">C3</th>
                    <th scope="col" style="text-align: center;">C4</th>
                    <th scope="col" style="text-align: center;">C5</th>
                    <th scope="col" style="text-align: center;">V</th>
                    <th scope="col" style="text-align: center;">Peringkat</th>
                    
                  </tr>
                </thead>
                <tbody id="tbody_table_record">
                <?php
                //include 'daftar_nilai.php';
                  $conn = new mysqli($servername, $username, $password, $dbname);
                  $num = 0;
                  //$pdo = Database::connect();
          
                  $sql = 'SELECT * FROM nilai_alternatif';
                  //$result1 = 

                  $result = $conn->query($sql);
          $kodekriteria1 =0;
          if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            
            $num++;

            echo '<tr>';
            echo '<td>'. $num . '</td>';
            
            echo '<td class="bdr">'. $row['kode_alternatif'] . '</td>';
            echo '<td class="bdr">'. $row['alternatif'] . '</td>';
           
            echo '<td class="bdr" style="text-align: center;">'. $row['c1'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['c2'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['c3'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['c4'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['c5'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['v1'] . '</td>';
            echo '<td class="bdr" style="text-align: center;">'. $row['rank'] . '</td>';
          }
          } else {
          echo "0 results";
          }
          
          $conn->close();
          //------------------------------------------------------------
        ?>
      </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <br>
    
    <div class="btn-group">
      <button class="button" id="btn_prev" onclick="prevPage()">Prev</button>
      <button class="button" id="btn_next" onclick="nextPage()">Next</button>
      <div style="display: inline-block; position:relative; border: 0px solid #e3e3e3; float: center; margin-left: 2px;;">
        <p style="position:relative; font-size: 14px;"> Table : <span id="page"></span></p>
      </div>
      <select name="number_of_rows" id="number_of_rows">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      <button class="button" id="btn_apply" onclick="apply_Number_of_Rows()">Apply</button>
    </div>
    <div style="text-align:  center;">
      <a href="#form_tambah_alternatif" class="btn" style="background-color:#A1C2F1;">Tambah Alternatif</a>
      <a href="#form_update_alternatif" class="btn" style="background-color:#FFD0D0;">Edit Nilai Alternatif</a>
      <a href="pdf_export.php" class="btn" style="background-color:#FFD0D0;">Print PDF</a>
    </div>
    <br>
    <script>
    function searchTable() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("table_id");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those that don't match the search query
      for (i = 0; i < tr.length; i++) {
    var matchFound = false;
    td = tr[i].getElementsByTagName("td");

    for (var j = 0; j < td.length; j++) {
      if (td[j]) {
        txtValue = td[j].textContent || td[j].innerText;
        txtValue = txtValue.toLowerCase(); // Convert the table cell value to lowercase

        // Use regular expression to search for the filter text as a substring
        var regex = new RegExp(filter, 'i'); // 'i' flag for case-insensitive search
        if (regex.test(txtValue)) {
          matchFound = true;
          break;
        }
      }
    }

    if (matchFound) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }

    }
  </script>
    <script>
      //------------------------------------------------------------
      var current_page = 1;
      var records_per_page = 10;
      var l = document.getElementById("table_id").rows.length
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function apply_Number_of_Rows() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function prevPage() {
        if (current_page > 1) {
            current_page--;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function nextPage() {
        if (current_page < numPages()) {
            current_page++;
            changePage(current_page);
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function changePage(page) {
        var btn_next = document.getElementById("btn_next");
        var btn_prev = document.getElementById("btn_prev");
        var listing_table = document.getElementById("table_id");
        var page_span = document.getElementById("page");
       
        // Validate page
        if (page < 1) page = 1;
        if (page > numPages()) page = numPages();

        [...listing_table.getElementsByTagName('tr')].forEach((tr)=>{
            tr.style.display='none'; // reset all to not display
        });
        listing_table.rows[0].style.display = ""; // display the title row

        for (var i = (page-1) * records_per_page + 1; i < (page * records_per_page) + 1; i++) {
          if (listing_table.rows[i]) {
            listing_table.rows[i].style.display = ""
          } else {
            continue;
          }
        }
          
        page_span.innerHTML = page + "/" + numPages() + " (Total Number of Rows = " + (l-1) + ") | Number of Rows : ";
        
        if (page == 0 && numPages() == 0) {
          btn_prev.disabled = true;
          btn_next.disabled = true;
          return;
        }

        if (page == 1) {
          btn_prev.disabled = true;
        } else {
          btn_prev.disabled = false;
        }

        if (page == numPages()) {
          btn_next.disabled = true;
        } else {
          btn_next.disabled = false;
        }
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      function numPages() {
        return Math.ceil((l - 1) / records_per_page);
      }
      //------------------------------------------------------------
      
      //------------------------------------------------------------
      window.onload = function() {
        var x = document.getElementById("number_of_rows").value;
        records_per_page = x;
        changePage(current_page);
      };
      //------------------------------------------------------------
    </script>

            </div>
          </div>


      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Butuh Bantuan? <span>Hubungi Kami</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7932.505853571598!2d107.05779017770998!3d-6.230349500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f70f4926239%3A0xdd39cf2f807952e0!2sOutlet%20Kopi%20Tarbulan%20(Grosir%20Kopi%20Murni)!5e0!3m2!1sid!2sid!4v1688629587212!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat Kami</h3>
                <p>Outlet Kopi Tarbulan Jl. Raya Villa Bekasi Indah No 7, Jejalenjaya,. Tambun Utara, Bekasi (Depan Gerbang Perum Bekasi Indah 1/ Samping Yayasan Al Munir) Bekasi, West Java, Indonesia 17510</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Kami</h3>
                <p>Irawati_say@yahoo.com</p>
                <p>saihu_01@yahoo.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon Kami</h3>
                <p>0853-1116-4567</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Waktu Buka</h3>
                <div><strong>Sen-Minggu:</strong> 08.00 - 20.00;
                  <strong>Tidak Pernah</strong> Tutup
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Pesanmu Telah Terkirim Terimakasih</div>
          </div>
          <div class="text-center"><button type="submit">Kirim Pesan</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
            Outlet Kopi Tarbulan Jl. Raya Villa Bekasi Indah No 7, Jejalenjaya,. Tambun Utara, Bekasi (Depan Gerbang Perum Bekasi Indah 1/ Samping Yayasan Al Munir)<br>
            Bekasi, West Java, Indonesia 17510<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Telepon:</strong> 0853-1116-4567<br>
              <strong>Email:</strong> Irawati_say@yahoo.com<br>saihu_01@yahoo.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Waktu Buka</h4>
            <p>
              <strong>Sen-Minggu: 08.00</strong> - 20.00<br>
              Tidak Pernah Tutup
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Ikuti Kami</h4>
          <div class="social-links d-flex">
            <a href="https://www.facebook.com/kopitarbulan/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/kopi_tarbulan/" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kopi Tarbulan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>