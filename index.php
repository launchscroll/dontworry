<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Komens</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://komens.bappenas.go.id/public/img/kms/favicon.png" rel="icon">
    <link href="https://komens.bappenas.go.id/public/img/kms/favicon.png" rel="apple-touch-icon">

    <!-- ======= CSS ======= -->
    <!-- Google Fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet"> -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="https://komens.bappenas.go.id/public/front/vendor/animate/animate.css" rel="stylesheet">
<link href="https://komens.bappenas.go.id/public/front/vendor/aos/aos.css" rel="stylesheet">
<link href="https://komens.bappenas.go.id/public/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://komens.bappenas.go.id/public/front/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="https://komens.bappenas.go.id/public/front/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="https://komens.bappenas.go.id/public/front/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="https://komens.bappenas.go.id/public/front/css/style.css" rel="stylesheet">

<!-- Font Awesome v4.7.0 -->
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://komens.bappenas.go.id/public/front/css/floating-wpp.min.css">

<!--PDF css-->


<style type="text/css">
@media only screen and (min-width: 412px) and (max-width: 1024px) {
  #WAButton{
    margin-right: 11%;
    z-index: 99;
  }

  /* .floating-wpp{
    margin-right: 15%;
    z-index: 99;
  } */
}

.floating-wpp{
  margin-right: 3%;
  z-index: 99;
}

.btnsearch:hover {
  background-color: #f44336;
  color: white;
}

a {
  text-decoration: none;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 300px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
  border-radius: 9px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
}

#textbox{
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    width: 40%;
    /* border-radius: 10px; */
    font-size: 23px;
    position:absolute;
    width:100%;
    height:50px;
    bottom:0px;
    right:0%;
    left:0%;
    /* margin-left:-150px; */
}

#wrap {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: left;
    color: #fff;
    width: 100%;
    padding-left: 10%;
    padding-right: 10%;
    height: 60px;
}

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/*Swiper*/
.swiper-container {
	width: 100%;
	height: 100vh;
}
.swiper-slide {
	text-align: center;
	font-size: 18px;
	background: #fff;
	/* Center slide text vertically */
	display: -webkit-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	-webkit-justify-content: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	-webkit-align-items: center;
	align-items: center;
}
.main-slider .slider-bg-position {
	background-size: cover!important;
	background-position: center center!important;
}
.main-slider .swiper-button-prev, .main-slider .swiper-button-next {
	/* background-image: none!important; */
  background-color: rgba(0, 0, 0, 0.5);
	color: #fff;
	width: 40px;
	height: 40px;
	/* border: 1px solid #fff; */
  border-radius: 15px;
	text-align: center;
	line-height: 50px;
	font-size: 10px;
}
div.swiper-button-next::after {
  font-size: 2em;
}
div.swiper-button-prev::after {
  font-size: 2em;
}
.main-slider h2 {
	color: #fff;
	font-size: 54px;
	line-height: 59px;
	padding: 0 19%;
	text-transform: uppercase;
}
.main-slider .swiper-pagination-bullet {
	width: 20px;
	height: 20px;
	background: rgba(255,255,255,0.9)
}
.main-slider .swiper-pagination-bullet-active {
	background: #0297ff
}

/* Hover image​ */
.box {
  position: relative;
}

.image {
  opacity: 1;
  display: block;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.box:hover .image {
  opacity: 0.1;
}

.box:hover .middle {
  opacity: 1.5;
}

.outside {
  position: relative;
	width: 40vmin;
	height: 40vmin;
	background: #0071BD;
  border-radius: 50%;
  margin-left: 2.3%;
  margin-top: 2.5%;
}

.inside {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
  background: #0071BD;
  border-radius: 50%;
}

@media only screen and (max-width: 1170px){
  .swiper-slide {
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
      height: 480px ! important;
  }
  .swiper-container{
      height: 600px;
  }

  #hero{
      height: 480px;
  }
}
</style>    <!-- End CSS -->

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="navbar-fixed-top d-flex align-items-center">
    <div class="container-fluid">

        <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
            
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="https://komens.bappenas.go.id" class="logo"><img src="https://komens.bappenas.go.id/public/front/img/newlogo.png" width="150" class="img-fluid" style="margin-top: -10px;"></a>

            <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link active mb-2" href="https://komens.bappenas.go.id"><i class="fa fa-home fs-3"></i></a></li>
                <li><a class="nav-link" id="flip" style="cursor: pointer;"><i class="fa fa-search fs-5"></i></a>
                    <div id="panel" class="dropdown-content mt-4 p-1" style="width: 50%;z-index: 99;">
                        <div class="d-flex bd-highlight">
                            <div class="flex-fill bd-highlight" style="width: 100%;">
                                <form action="https://komens.bappenas.go.id/search" method="POST">
                                    <input type="hidden" name="_token" value="4PyDNXu86ooy1WxbJShiyeYhrPFlERuGyZ710j85">                                    <input id="navsearch" type="text" class="form-control" name="s" placeholder="Search..."/>
                                </form>
                            </div>
                            <div class="flex-fill bd-highlight">
                                <span class="input-group-btn" style="right: 0;">
                                    <button class="btn btn-default btnsearch" type="button" id="closearch" onclick= "clearInput()" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Close search">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a class="nav-link " href="https://komens.bappenas.go.id/kategori">Kategori</a></li>
                <li><a class="nav-link " href="https://komens.bappenas.go.id/program">Program</a></li>
                
                <li><a class="nav-link " href="https://komens.bappenas.go.id/bantuan">Pusat &nbsp;Bantuan</a></li>
                                <li>
                    <a href="https://komens.bappenas.go.id/sso-komens" class="nav-link">
                        <button class="btn btn-primary px-3 rounded-pill shadow-sm">Masuk</button>
                    </a>
                </li>
                            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
        </div>

    </div>
</header>

    <!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">
    <!-- Slider main container -->
<div class="swiper-container main-slider" id="myCarousel">
    <div class="swiper-wrapper">
      
              <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1700035405_1700021708_KEPAU.jpg);" data-hash="slide24">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Knowing Everything about Perencana Ahli Utama (KEPAU) merupakan kegiatan perekaman dan pendokumentasian pengetahuan tacit yang dimiliki oleh PAU di lingkungan Kementerian PPN/Bappenas. Kegiatan ini dilakukan untuk memenuhi salah satu tugas dan fungsi Pusdatinrenbang, yaitu melakukan pengelolaan pengetahuan di Kementerian PPN/Bappenas. Pada episode kali ini, Pusdatinrenbang akan menggali pengetahuan dari Bapak Dr. Ir. Oswar Muadzin Mungkasa, MURP selaku PAU dari Kedeputian Pengembangan Regional dan Bapak Dr. Ir. Budhi Santoso, MA selaku PAU dari Kedeputian Pemantauan, Evaluasi, dan Pengembangan Pembangunan dengan dimoderatori oleh Prof. Hermanto Siregar, Ph.D dari Institut Pertanian Bogor. Kedua PAU tersebut akan membagikan pengetahuan dan pengalaman yang dimiliki selama bekerja di Bappenas untuk didokumentasikan dan dipublikasikan sehingga dapat dijadikan best practice/pembelajaran bagi pegawai di Kementerian PPN/Bappenas.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6ImJXRTdrVGtBNmJJQ1ZBdDhkTk9KNXc9PSIsInZhbHVlIjoiY29md1lQYnJFL1lzby84d0Y4N3hPdz09IiwibWFjIjoiNGI5OGM3MGY4NWI2NGNkYmRhYjExMGM1M2M5ZTI2MGY5MjBmNjA0YzU1NmMxYjQxMzEzODQ4ZGRmMTA2MTg0YSIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1700118679_KEPAU_EPS_2xxx.jpg);" data-hash="slide25">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Knowing Everything about Perencana Ahli Utama (KEPAU) merupakan kegiatan perekaman dan pendokumentasian pengetahuan tacit yang dimiliki oleh PAU di lingkungan Kementerian PPN/Bappenas. Kegiatan ini dilakukan untuk memenuhi salah satu tugas dan fungsi Pusdatinrenbang, yaitu melakukan pengelolaan pengetahuan di Kementerian PPN/Bappenas. Pada episode kali ini, Pusdatinrenbang akan menggali pengetahuan dari Ibu Ir. Wahyuningsih Darajati, Msc selaku PAU dari Kedeputian Bidang Kemaritiman dan Sumber Daya Alam dengan dimoderatori oleh Bapak Raksaka Mahi, SE, Msc, Ph.D dari Universitas Indonesia. Beliau akan membagikan pengetahuan dan pengalaman yang dimiliki selama bekerja di Bappenas untuk didokumentasikan dan dipublikasikan sehingga dapat dijadikan best practice/pembelajaran bagi pegawai di Kementerian PPN/Bappenas.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6Ild1ZjZNdFlvZkhKTEdXRTZ1b2R6MGc9PSIsInZhbHVlIjoiZE0zZ3BlY3dlbXkrQnhyZHFyRlREdz09IiwibWFjIjoiMGE5MjlhNjAxMmU2Zjg2NTY2MzQ3ZWU3OTRkM2U0NTFhZTkwNTI5N2M2M2Q5NzZhMWQzNGM1ZTEzMGQ5MTY3NCIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1700121384_KEPAU_EPS_3xxx.jpg);" data-hash="slide27">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Knowing Everything about Perencana Ahli Utama (KEPAU) merupakan kegiatan perekaman dan pendokumentasian pengetahuan tacit yang dimiliki oleh PAU di lingkungan Kementerian PPN/Bappenas. Kegiatan ini dilakukan untuk memenuhi salah satu tugas dan fungsi Pusdatinrenbang, yaitu melakukan pengelolaan pengetahuan di Kementerian PPN/Bappenas. Pada episode kali ini, Pusdatinrenbang akan menggali pengetahuan dari Bapak Ir. Sidqy Lego Pangesti Suyitno, MA selaku PAU dari Kedeputian Bidang Ekonomi dengan dimoderatori oleh Prof. Mudrajad Kuncoro, Ph.D dari Universitas Gadjah Mada. Beliau akan membagikan pengetahuan dan pengalaman yang dimiliki selama bekerja di Bappenas untuk didokumentasikan dan dipublikasikan sehingga dapat dijadikan best practice/pembelajaran bagi pegawai di Kementerian PPN/Bappenas.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6Ii81Rld1ME92LzM0bDU4cGtVWHZIZkE9PSIsInZhbHVlIjoiaW9xdDB1N29xczFWczU4R2JqbFRZZz09IiwibWFjIjoiZWQ4YzU2MWZmNzNkNTQ5MjMwOWU1ZDUwYTFlMzJlMzI3ZjcyZTMyNDA5OTIzYzQ0ODRkZmMzOGI2YThlNjJjNiIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1714375741_Thumbnail_Kebab_ep1-02-Pak_Pungky.jpg);" data-hash="slide28">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Knowing Everything about Bappenas (KEBAB) merupakan kegiatan perekaman dan pendokumentasian pengetahuan tacit yang dimiliki stakeholder di lingkungan Kementerian PPN/Bappenas. Kegiatan ini dilakukan untuk memenuhi salah satu tugas dan fungsi Pusdatinrenbang, yaitu melakukan pengelolaan pengetahuan di Kementerian PPN/Bappenas. Pada episode kali ini, Pusdatinrenbang akan menggali pengetahuan dari Bapak Drs. Pungky Sumadi, MCP, Ph.D selaku Purnabakti dari Kedeputian Bidang Kependudukan dan Ketenagakerjaan dengan dimoderatori oleh Bapak Ir. Ridwan Sutriadi S.T, M.T, Ph.D dari Institut Teknologi Bandung. Beliau akan membagikan pengetahuan dan pengalaman yang dimiliki selama bekerja di Bappenas untuk didokumentasikan dan dipublikasikan sehingga dapat dijadikan best practice/pembelajaran bagi pegawai di Kementerian PPN/Bappenas.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6IkRjVXVOOWcxTytqVDhCZ2lqZVhoc1E9PSIsInZhbHVlIjoiMXRoOFRuYks5RThYSSsyb0FJQUVmUT09IiwibWFjIjoiMTliYWJjZGU3YzdlYzg2ZWU4ZDc3MDhkODRmNGE5ZTRlZWJiOWI2ZWQ1M2E5N2IxYzZkMzdmNjQyM2ZiYjljNSIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1714375801_Thumbnail_Kebab-03-Pak_Rizky.jpg);" data-hash="slide29">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Knowing Everything about Bappenas (KEBAB) merupakan kegiatan perekaman dan pendokumentasian pengetahuan tacit yang dimiliki stakeholder, salah satunya purnabakti di lingkungan Kementerian PPN/Bappenas. Kegiatan ini dilakukan untuk memenuhi salah satu tugas dan fungsi Pusdatinrenbang, yaitu melakukan pengelolaan pengetahuan di Kementerian PPN/Bappenas. Pada episode kali ini, Pusdatinrenbang akan menggali pengetahuan tacit dari Bapak Ir. Rizky Ferianto, MA selaku Purnabakti dari Kedeputian Pemantauan, Evaluasi dan Pengendalian Pembangunan dengan dimoderatori oleh Ir. Ridwan Sutriadi S.T, M.T, Ph.D dari Institut Teknologi Bandung. Beliau akan membagikan pengetahuan dan pengalaman yang dimiliki selama bekerja di Bappenas untuk didokumentasikan dan dipublikasikan sehingga dapat dijadikan best practice/pembelajaran bagi pegawai di Kementerian PPN/Bappenas.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6Ijg2YzBvOTNnZ3V5MmsweGh1NFgyOGc9PSIsInZhbHVlIjoiWTRrVUVPV0EyUHgzRUwvbC8vTDFVQT09IiwibWFjIjoiOTFjNzA0ZmI3ZmVmMDhlMWFkYWNhZmZmYTc0MzBiMzE3ZTE1OGViMjE2YmFmZTdmMTlhYzlhMjJlNWQxMDBhYiIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1714375874_Thumbnail_KebabREv-10-Pak_Basah.jpg);" data-hash="slide30">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Knowing Everything about Bappenas (KEBAB) merupakan kegiatan perekaman dan pendokumentasian pengetahuan tacit yang dimiliki stakeholder di lingkungan Kementerian PPN/Bappenas. Kegiatan ini dilakukan untuk memenuhi salah satu tugas dan fungsi Pusdatinrenbang, yaitu melakukan pengelolaan pengetahuan di Kementerian PPN/Bappenas. Pada episode kali ini, Pusdatinrenbang akan menggali pengetahuan dari Bapak Ir. Basah Hernowo, MA selaku Purnabakti dari Direktur Sistem dan Prosedur Pendanaan Pembangunan dengan dimoderatori oleh Bapak Prof. Dr. Haryono Umar, MSc, Ak, CA, CPAM dari Perbanas Intitute. Beliau akan membagikan pengetahuan dan pengalaman yang dimiliki selama bekerja di Bappenas untuk didokumentasikan dan dipublikasikan sehingga dapat dijadikan best practice/pembelajaran bagi pegawai di Kementerian PPN/Bappenas.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6InFnQlBzOFQyanpyTzVWM3pmandJSlE9PSIsInZhbHVlIjoiNXdGZ0xaNkdIc1hkSUR4ZVpyRndhdz09IiwibWFjIjoiMjJhNGFjNzk1OTc1MThjNTYzYzljYTEwMjg1NzgxNDMwYTQzNjI2OGY2MzA3NWMxYjI4ZTljZmEzZjg0Y2ZjMiIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1724745206_1698647470_pak_agung.jpg);" data-hash="slide33">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Bincang-Bincang kali ini akan membahas Kepala Pusat Data dan Informasi Perencanaan Pembangunan pada masa jabatan yang dipimpin oleh Bapak Ir. Agung Hardjono, MSEM, MSIS.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6Iml1Q1lJa29jUWxNN2oxN1poWnJ2OWc9PSIsInZhbHVlIjoiN0pCOHlKc204V1BGdTRpNnVMV2NYZz09IiwibWFjIjoiZjMwYzVkZjRiZjU3MWZjZTNhMWU4YzczOTdlOGFjYjQ3MWU0OWMxNmJkMzQyNmNkNTRjYzZlNjUwY2M4N2RlMiIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1724745595_1698647567_pak_ipang.jpg);" data-hash="slide34">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Mohammad Irfan Saleh didapuk sebagai Pelaksana tugas Kepala Pusat Data dan Informasi Perencanaan Pembangunan di tahun 2020 hingga 2022. Pada masanya Pusdatinrebang menghadapi tantangan yang dihadapi oleh Dunia, yaitu pandemi Covid-19. Dengan tantangan tersebut Pusdatinrenbang dapat melewati hal tersebut melalui arahan dan pimpinan beliau.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6Ik9yVWJFOFRQMWlKYXo2OW1GTkxXYkE9PSIsInZhbHVlIjoiUnd4a25yLytvM3NEVjhXYUN5QnFHdz09IiwibWFjIjoiNDg5ODM2NTYzMWM4ZDQ1YjAxYTQ2YWUwOTZlZGU2MDZhYWZhNDg4ODE1ZDQ4NjI0ZDk5ODU3NzkwODBiOWRhMSIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1724745733_1698647597_pak_okto.jpg);" data-hash="slide35">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Bapak Oktorialdi menjadi Kepala Pusat Data dan Informasi Perencanaan Pembangunan selama 9 Tahun dimulai dari tahun 2005-2008 sebagai pelaksana tugas kemudian berlanjut hingga tahun 2014 sebagai Kepala Pusat Data dan Informasi Perencanaan Pembangunan secara definitive. Pada masanya teknologi informasi dan manajemen data di Pusdatinrenbang masih belum maju sehingga beliau sangat berupaya agar kedua hal tesebut bisamaju dan berkembang di bawah kepemimpinannya.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6IjFvQm1obFk4WHRZajVHMHZkOTZSa2c9PSIsInZhbHVlIjoieFZTaURuQXdNY2luWFZXY1MwcUFqZz09IiwibWFjIjoiOWQ1ZDM5NDRjZGE3MjU3NmY4N2E0MWI3NThjMDIyZjM2YjYzMTk5YjA0MjNjYjUzZGVlZjFlM2UxOGY4ZTMyNyIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1724745788_1698647634_pak_randy.jpg);" data-hash="slide36">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Bincang-Bincang Pusdatinrenbang menghadirkan cerita perjalanan para Kepala Pusdatinrenbang untuk membagikan pengalamannya yang hebat selama menjabat, pada episode kali ini menghadirkan mantan Kepala Pusdatinrenbang periode 2014-2019, yaitu Bapak Randy R. Wrihatnolo, S. Kom, MA. Pada masa jabatannya beliau menceritakan pencapaian dan kendala yang dihadapinya selama masa jabatannya.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6InExVllNWkptbk5MY045QlhQaVYwWlE9PSIsInZhbHVlIjoiazg2OGZqQU1OOVF4VG5pOVZ5QUFwZz09IiwibWFjIjoiZTEyNWRiYWYyZWM1MGUwM2MzYTZiNWYyODNmZmI3YzkwMDM4YjdhZWE5MTc4NGM2YmU2MGQ0NzEzMGE2NTZmMyIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1724745881_1698647675_pak_suharmen.jpg);" data-hash="slide37">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap">Bincang-Bincang Pusdatinrenbang menghadirkan cerita perjalanan para Kepala Pusdatinrenbang untuk membagikan pengalamannya yang hebat selama menjabat, pada episode kali ini menghadirkan mantan Kepala Pusdatinrenbang periode 2014-2019, yaitu Bapak Suharmen, S. Kom, M. Si. Pada masa jabatannya beliau menceritakan pencapaian dan kendala yang dihadapinya selama masa jabatannya.</h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6ImRVYUkxV2pWcnZFWStpbkpvZE5XTFE9PSIsInZhbHVlIjoiSlp2SnJzRVR5THFQd0NLTjNvTWwxdz09IiwibWFjIjoiZjM0Y2Q1ZTIwOWNhZTVhNjgxZmY1NDY0MGJkZjk2MjZhMmI5OTE3NGVhYTgwOGQ3NDgwNzFiOGUyMzY2NjQwOSIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
                <div class="swiper-slide slider-bg-position" style="background: url(public/upload/front/1732761719_1-09.png);" data-hash="slide39">
            <div class="d-flex justify-content-center flex-column bd-highlight" id="textbox" style="height: 130px;width: 100%;bottom: 0px;position: absolute;">
                <div class="bd-highlight justify-content-center">
                    <h4 id="wrap"></h4>
                </div>
                <div class="bd-highlight">
                    <a href="https://komens.bappenas.go.id/back-office/posts/cont/eyJpdiI6ImE4RHRua3UxeUhwN1g2dHZWQ3o1N3c9PSIsInZhbHVlIjoiRU1yMjN2U00zSFNSZE5hendTN1FkQT09IiwibWFjIjoiYzU4OGY2Njg3NGRhYmE3M2JjNzIzMTE0OTk2NjkyZjg3ZjJmZmZmMmJjYmY5YjI4Y2IwZTUwMWY4NWI5MTI0ZiIsInRhZyI6IiJ9" class="btn btn-sm btn-primary rounded-pill">See Video</a>
                </div>
            </div>
        </div>
            </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>
    <!-- End Hero Section -->

    <!-- ======= Main ======= -->
    <main id="main">
            <!-- ======= About Section ======= -->
      
    <section id="services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1">
                    <h2 class="font-weight-light">Mengenal Komens</h2>
                      
                        <p class="font-italic text-muted mb-4">Knowledge Management Bappenas atau KOMENS merupakan platform untuk memfasilitasi penyimpanan, bagipakai, dan pemanfaatan seluruh pengetahuan yang ada di Kementerian PPN/Bappenas. Komens juga berfungsi untuk mendukung proses pengambilan kebijakan yang dapat diakses oleh seluruh pegawai Kementerian PPN/Bappenas.</p>
                        
                                    </div>
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2">
                    <div class="box">
                        <img src="https://komens.bappenas.go.id/public/upload/front/1733214970_Asset 1@3x.png" alt="" class="img-fluid mb-4 mb-lg-0 image" width="500">
                        <div class="middle">
                            <a href="javascript:;" class="btn btn-sm btn-primary rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#aboutModal25">View</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
        <!-- End About Section -->

    <!-- ======= Sorotan Section ======= -->
     
    <section id="about" style="background-color: #f3f3f3;">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Sorotan Pengetahuan</h3>
                
            </header>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                        <div class="card box">
                            <img src="https://komens.bappenas.go.id/public/upload/front/1727075316_Asset 30@2x.png" class="image img-fluid" alt="...">
                            <div class="middle">
                                <h5>
                                    <p>Menu ini berisikan konten-konten pengetahuan terbaru yang telah diunggah</p>
                                </h5>
                                                                    <a href="https://komens.bappenas.go.id/kategori/new" class="btn btn-sm btn-primary rounded-pill">View</a>
                                                            </div>
                            <div class="card-footer">
                                <h5 class="title text-center">KONTEN TERBARU</h5>
                            </div>
                        </div>
                    </div>
                                    <div class="col">
                        <div class="card box">
                            <img src="https://komens.bappenas.go.id/public/upload/front/1727075325_Asset 29@2x.png" class="image img-fluid" alt="...">
                            <div class="middle">
                                <h5>
                                    <p>Kumpulan konten yang paling sering dicari dan diunduh oleh pengguna kami</p>
                                </h5>
                                                                    <a href="https://komens.bappenas.go.id/kategori/hot" class="btn btn-sm btn-primary rounded-pill">View</a>
                                                            </div>
                            <div class="card-footer">
                                <h5 class="title text-center">KONTEN POPULER</h5>
                            </div>
                        </div>
                    </div>
                                    <div class="col">
                        <div class="card box">
                            <img src="https://komens.bappenas.go.id/public/upload/front/1727075334_Asset 28@2x.png" class="image img-fluid" alt="...">
                            <div class="middle">
                                <h5>
                                    <p>Berisikan konten pengetahuan yang kami rekomendasikan untuk anda. Rekomendasi berdasarkan konten yang paling sering anda lihat, unduh, ataupun dicari.</p>
                                </h5>
                                                                    <a href="https://komens.bappenas.go.id/kategori/rec" class="btn btn-sm btn-primary rounded-pill">View</a>
                                                            </div>
                            <div class="card-footer">
                                <h5 class="title text-center">REKOMENDASI</h5>
                            </div>
                        </div>
                    </div>
                
                
            </div>
            
        </div>
    </section>
    <!-- End Sorotan Us Section -->

    <!-- ======= Statistik Section ======= -->
    
    <!-- End About Us Section -->

    <!-- ======= Testimonials Section ======= -->
     
    <section id="testimonials" style="background-color: #fff;">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="d-flex bd-highlight">
                    <div class="flex-grow-1 ms-3">
                        <h1 class="fw-bold">Apa Kata Mereka Tentang Komens</h1>
                        <p class="font-italic mb-4" style="margin-top: 7%;">
                             <p style="text-align:justify">&quot;Knowledge Management Bappenas atau KOMENS merupakan platform untuk memfasilitasi penyimpanan, bagipakai, dan pemanfaatan seluruh pengetahuan yang ada di Kementerian PPN/Bappenas. Komens juga berfungsi untuk mendukung proses pengambilan kebijakan yang dapat diakses oleh seluruh pegawai Kementerian PPN/Bappenas.&quot;</p>
                        </p>
                        <h4 style="margin-top: 7%;">Dr. Agung Indrajit, ST, M.Sc</h4>
                    </div>
                    <div class="flex-shrink-0">
                        <img src="https://komens.bappenas.go.id/public/upload/front/1700192500_Pak_kapus.png" width="300" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- End Testimonials Section -->

    <!-- ======= Services Section ======= -->
    
    <!-- End Services Section -->

    <!-- ======= Our Clients Section ======= -->
     
    <section id="clients" style="background-color: #f3f3f3;">
        <div class="container" data-aos="zoom-in">

            <header class="section-header">
                <h3>Tautan Lainnya</h3>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper justify-content-center">
                                        <a href="https://sepakat.bappenas.go.id/regsosek-dashboard/" target="_blank">
                        <div class="swiper-slide p-2" style="background: transparent;">
                            <img src="https://komens.bappenas.go.id/public/upload/front/1699953947_1698652820_regsosek.png" class="img-fluid" width="200" alt="">
                        </div>
                    </a>
                                        <a href="https://sepakat.bappenas.go.id/" target="_blank">
                        <div class="swiper-slide p-2" style="background: transparent;">
                            <img src="https://komens.bappenas.go.id/public/upload/front/1699953959_1698652820_sepakat.png" class="img-fluid" width="200" alt="">
                        </div>
                    </a>
                                        <a href="https://sikompak.bappenas.go.id/" target="_blank">
                        <div class="swiper-slide p-2" style="background: transparent;">
                            <img src="https://komens.bappenas.go.id/public/upload/front/1699953985_1698652820_sikompak.png" class="img-fluid" width="200" alt="">
                        </div>
                    </a>
                                        <a href="https://jdih.bappenas.go.id/" target="_blank">
                        <div class="swiper-slide p-2" style="background: transparent;">
                            <img src="https://komens.bappenas.go.id/public/upload/front/1699954004_1698652820_jdih.png" class="img-fluid" width="200" alt="">
                        </div>
                    </a>
                                        <a href="https://www.bappenas.go.id" target="_blank">
                        <div class="swiper-slide p-2" style="background: transparent;">
                            <img src="https://komens.bappenas.go.id/public/upload/front/1699954032_bappenas.png" class="img-fluid" width="200" alt="">
                        </div>
                    </a>
                                    </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
        <!-- End Our Clients Section -->

    <!-- Modal -->
      
    <div class="modal fade aboutModal" id="aboutModal25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Komens (Knowledge Management Bappenas)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="document.getElementById('demoVideo').pause();"></button>
            </div>
            <div class="modal-body">
                
                <video autobuffer controls controlsList="download" id="demoVideo" style="overflow:hidden;height:100%;width:100%;">
                    <source id="mp4" src="https://drive.bappenas.go.id/owncloud/index.php/s/gsRelt66oV6r6KB/download" type="">
                </video>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('demoVideo').pause();">Close</button>
            </div>
            </div>
        </div>
    </div>
        </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="border border-top-2">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="section-header">
                    <h3 class="">Kontak Kami</h3>
                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <img src="https://komens.bappenas.go.id/public/front/img/logotextblack.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <p class="">
                        <b>Alamat</b><br>
                        Jl. H. R. Rasuna Said No.Kav. B2, Kuningan, Karet, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12920
                    </p>
                    <p class="">
                        <b>Telepon / Fax</b><br>
                        021-50927402
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <p class="">
                        <b>Pusat Data dan Informasi Perencanaan Pembangunan</b><br>
                        082122184239
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <div class="social-links">
                        <a href="https://youtube.com/@pusdatinrenbang1116" class="instagram" target="_blank"><i class="bi bi-youtube"></i></a>
                        <a href="https://instagram.com/pusdatinrenbang" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="mailto:komens@bappenas.go.id?subject=Ask about Komens" class="linkedin" title="komens@bappenas.go.id" target="_blank"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Hak Cipta <strong>Kementerian PPN/Bappenas</strong>. All Rights Reserved
        </div>
    </div>
</footer>    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Uncomment below i you want to use a preloader -->
    <div id="preloader"></div>

    <div id="WAButton"></div>

    <!-- ======= JS ======= -->
    <!-- Vendor JS Files -->
<script src="https://komens.bappenas.go.id/public/front/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="https://komens.bappenas.go.id/public/front/vendor/aos/aos.js"></script>
<script src="https://komens.bappenas.go.id/public/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://komens.bappenas.go.id/public/front/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://komens.bappenas.go.id/public/front/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="https://komens.bappenas.go.id/public/front/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://komens.bappenas.go.id/public/front/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="https://komens.bappenas.go.id/public/front/js/main.js"></script>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" src="https://komens.bappenas.go.id/public/front/js/swiper3.4.0.js"></script>

<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://komens.bappenas.go.id/public/front/js/floating-wpp.min.js"></script>

<!--PDF javascript-->


<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */

    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });

    $(document).ready(function(){
      $("#closearch").click(function(){
        $("#panel").slideUp();
      });
    });

    function clearInput(){
      var getValue= document.getElementById("navsearch");
        if (getValue.value !="") {
            getValue.value = "";
        }
    }

    $(function() {
      $('#WAButton').floatingWhatsApp({
        phone: '+6282122184239', //WhatsApp Business phone number International format-
        //Get it with Toky at https://toky.co/en/features/whatsapp.
        headerTitle: 'Chat with us on WhatsApp!', //Popup Title
        popupMessage: 'Hello, how can we help you?', //Popup Message
        showPopup: false, //Enables popup display
        buttonImage: '<a href="https://api.whatsapp.com/send?phone=+6282122184239&text=Hello%2C%20Admin" target="_blank"><img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" id="whatsapp" /></a>', //Button Image
        //headerColor: 'crimson', //Custom header color
        //backgroundColor: 'crimson', //Custom background button color
        position: "right"    
      });
    });

    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        centeredSlides: true,
        autoplay: 3500,
           speed: 1500,
           loop: true,
        autoplayDisableOnInteraction: false
    });

    
</script>    <!-- End JS -->

</body>

</html>
