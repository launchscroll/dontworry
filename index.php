<!doctype html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->
<html>

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0M5J29J5Y3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-0M5J29J5Y3');
  </script>

  <meta charset="utf-8">
  <meta name="description" content="Website Resmi Direktorat PEPPD Kementerian PPN/Bappanes">
  <meta name="keywords" content="PEPPD, direktorat PEPPD, Bappenas, Pemantauan Evaluasi Pengendalian Pembangunan Daerah">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Direktorat PEPPD Bappenas">

  <meta name="google-site-verification" content="7Y7lbVDDdUOZc1qrrnB7fKLzvMyJXdNsyD1lcFD-nqE" />

  <!-- CSRF Token -->
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

  <link rel="shortcut icon" href="https://peppd.bappenas.go.id/media/assets/images/img/favicon_bappenas_2023.ico" type="image/x-icon">

  <title>
    Kementerian PPN/BAPPENAS :: Pemantauan Evaluasi, Dan Pengendalian Pembangunan Daerah
  </title>

  <!-- Bootstrap CSS -->
  <link href="https://peppd.bappenas.go.id/media/assets/assets/bootstrap-4.6.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" type="text/css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@500;600&family=Varela+Round&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monda:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/introjs.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="https://peppd.bappenas.go.id/media/assets/plugins/owlcarousel2/docs/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://peppd.bappenas.go.id/media/assets/plugins/owlcarousel2/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

  <!-- Animate Style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- End Animate Style -->

  <!-- Maps API -->
  <script src="https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.css" rel="stylesheet" />

  <!-- <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=fetch,requestAnimationFrame,Element.prototype.classList,URL"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- End Maps API -->

  <!-- style -->
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
  <style>
    @media (max-width: 575px) {
      .dekstop {
        display: none !important;
      }

      .mobile {
        display: block !important;
      }

      .card-infograph {
        margin: 0 5px 1px 2px;
        height: 360px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .card-image {
        width: 50%;
      }

      .row-infograph {
        overflow-x: none;
        flex-wrap: nowrap;
        font-family: 'Monda', sans-serif;
      }

      .card-infograph {
        margin: 0 5px 3px 2px;
        height: 225px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .infograph-title-text {
        font-family: 'Monda', sans-serif;
        font-size: 10px;
        text-align: center;
        line-height: 1;
      }

      .infograph-body-text {
        display: flex;
        font-size: 9px;
        align-items: center;
      }

      .button-detail-infograph {
        margin-top: 0.5rem;
        font-size: 0.7rem;
        background-color: #0D4A82;
        color: white;
        border: 1px solid black;
        transition: all 300ms ease;
        padding: 0.5% 10%;
      }

      .button-detail-infograph:hover {
        background-color: white;
        color: black;
        text-decoration: none;
      }

      .card-activity {
        height: 8rem;
        padding-top: 0px;
      }


      .card-text {
        font-size: 0.8rem;
      }

      .card-text-activity {
        text-align: center;
        font-size: 0.8rem;
      }

      .box-img-activity {
        padding: 0;
      }

      .text-activity {
        font-size: 0.5rem;
        font-weight: 600;
      }

      .img-news {
        height: 10rem;
      }

      .title-news {
        font-size: 0.7rem;
      }

      .text-news {
        font-size: 0.5rem;
      }

      .img-publication {
        height: 11rem;
        width: 8rem;
      }

      .text-footer {
        font-size: 0.5rem;
      }

      .col-footer-2 {
        padding-left: 12%;
      }
    }

    @media(min-width: 360px) {
      .card-infograph {
        margin: 0 5px 1px 2px;
        height: 190px;
        border-radius: 10px;
        border: 1px solid black;
      }
    }

    @media(min-width: 375px) {
      .dekstop {
        display: none !important;
      }

      .mobile {
        display: block !important;
      }

      .card-infograph {
        margin: 0 5px 1px 2px;
        height: 200px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .card-activity {
        height: 12rem;
        padding-top: 0px;
      }

      .text-activity {
        font-size: 0.65rem;
        font-weight: 600;
      }

      .img-publication {
        height: 19rem;
        width: 14rem;
      }
    }

    @media (min-width: 575px) {
      .dekstop {
        display: none !important;
      }

      .mobile {
        display: block !important;
      }

      .card-text {
        font-size: 0.8rem;
      }

      .card-text-activity {
        text-align: center;
        font-size: 0.8rem;
      }


      .card-infograph {
        margin: 0 5px 3px 2px;
        height: 250px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .infograph-title-text {
        font-family: 'Monda', sans-serif;
        font-size: 14px;
        text-align: center;
      }

      .infograph-body-text {
        display: flex;
        font-size: 13px;
        align-items: center;
      }

      .button-detail-infograph {
        margin-top: 0.5rem;
        font-size: 0.7rem;
        background-color: #0D4A82;
        color: white;
        border: 1px solid black;
        transition: all 300ms ease;
        padding: 0.5% 10%;
      }

      .button-detail-infograph:hover {
        background-color: white;
        color: black;
        text-decoration: none;
      }


      .card-activity {
        height: 13rem;
        padding-top: 0px;
      }

      .text-activity {
        font-size: 1rem;
        font-weight: 600;
      }

      .img-publication {
        height: 19rem;
        width: 14rem;
      }

      .text-footer {
        font-size: 0.5rem;
      }

      .card-image {
        width: 40%;
      }

      .col-footer-2 {
        padding-left: 8%;
      }
    }

    @media (min-width: 768px) {
      .dekstop {
        display: none !important;
      }

      .mobile {
        display: block !important;
      }

      .card-infograph {
        margin: 0 5px 1px 2px;
        height: 215px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .row-infograph {
        overflow-x: none;
        flex-wrap: nowrap;
        font-family: 'Monda', sans-serif;
      }

      .card-infograph {
        margin: 0 5px 3px 2px;
        height: 280px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .infograph-title-text {
        font-family: 'Monda', sans-serif;
        font-size: 14px;
        text-align: center;
      }

      .card-image {
        width: 50%;
      }

      .infograph-body-text {
        display: flex;
        font-size: 14px;
        align-items: center;
      }

      .button-detail-infograph {
        margin-top: 0.5rem;
        font-size: 0.7rem;
        background-color: #0D4A82;
        color: white;
        border: 1px solid black;
        transition: all 300ms ease;
        padding: 0.5% 10%;
      }

      .button-detail-infograph:hover {
        background-color: white;
        color: black;
        text-decoration: none;
      }

      .card-activity {
        height: 9rem;
        padding-top: 0px;
      }

      .card-text {
        font-size: 0.8rem;
      }

      .card-text-activity {
        text-align: center;
        font-size: 0.8rem;
      }

      .box-img-activity {
        padding: 0;
      }

      .text-activity {
        font-size: 0.5rem;
        font-weight: 600;
      }

      .img-news {
        height: 9rem;
      }

      .title-news {
        font-size: 0.75rem;
      }

      .text-news {
        font-size: 0.6rem;
      }

      .img-publication {
        height: 13rem;
        width: 9rem;
      }

      .text-footer {
        font-size: 0.6rem;
      }

      .row-footer-menu {
        float: left;
      }

      .row-footer-social-media {
        float: left;
      }

      .col-footer-2 {
        padding-left: 6%;
      }
    }

    @media (min-width: 992px) {
      .dekstop {
        display: block !important;
      }

      .mobile {
        display: none !important;
      }

      .navbar {
        font-size: 0.7rem;
      }

      .row-infograph {
        overflow-x: none;
        flex-wrap: nowrap;
        font-family: 'Monda', sans-serif;
      }

      .card-infograph {
        margin: 0 5px 3px 2px;
        height: 230px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .infograph-title-text {
        font-family: 'Monda', sans-serif;
        font-size: 11px;
        text-align: center;
      }

      .infograph-body-text {
        display: flex;
        font-size: 13px;
        align-items: center;
      }

      .button-detail-infograph {
        margin-top: 0.5rem;
        font-size: 0.7rem;
        background-color: #0D4A82;
        color: white;
        border: 1px solid black;
        transition: all 300ms ease;
        padding: 0.5% 10%;
      }

      .button-detail-infograph:hover {
        background-color: white;
        color: black;
        text-decoration: none;
      }


      .card-activity {
        height: 6rem;
        padding-top: 0px;
      }

      .text-activity {
        font-size: 0.65rem;
        font-weight: 500;
      }

      .box-icon-activity {
        padding: 10px;
        padding-left: 20px;
      }

      .box-text-activity {
        padding-top: 17px;
        padding-right: 23px;
      }

      .img-news {
        height: 10rem;
      }

      .title-news {
        font-size: 0.8rem;
      }

      .text-news {
        font-size: 0.6rem;
      }

      .img-publication {
        height: 11rem;
        width: 7.5rem;
      }

      .text-footer {
        font-size: 0.55rem;
      }

      .row-footer-menu {
        float: right;
      }

      .row-footer-social-media {
        float: right;
      }
    }

    @media (min-width: 1024px) {
      .text-activity {
        font-size: 0.65rem;
        font-weight: 500;
      }

      .card-infograph {
        margin: 0 5px 3px 2px;
        height: 300px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .card-article:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
      }


      .box-icon-activity {
        padding: 10px;
        padding-left: 25px;
      }

      .box-text-activity {
        padding-top: 15px;
        padding-right: 30px;
      }
    }

    @media (min-width: 1200px) {
      .dekstop {
        display: block !important;
      }

      .mobile {
        display: none !important;
      }

      .navbar {
        font-size: 0.9rem;
      }

      .card-infograph {
        margin: 0 5px 1px 2px;
        height: 245px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .card-activity {
        height: 7rem;
      }

      .text-activity {
        font-size: 0.85rem;
        font-weight: 500;
      }

      .box-icon-activity {
        padding: 10px;
        padding-left: 30px;
      }

      .box-text-activity {
        padding-top: 20px;
        padding-right: 45px;
      }

      .box-img-news {
        display: flex;
        justify-content: center;
        transition: 0.5s all ease-in-out;
      }

      /* .box-img-news:hover {
        transform: scale(1.2);
      } */

      .img-news {
        /* height: 11.5rem; */
        /* width: auto !important; */
      }

      .title-news {
        font-size: 1rem;
      }

      .text-news {
        font-size: 0.8rem;
      }

      .img-publication {
        height: 14.5rem;
        width: 11rem;
      }

      .text-footer {
        font-size: 0.7rem;
      }

      .row-footer-menu {
        float: right;
      }

      .row-footer-social-media {
        float: right;
      }
    }

    @media(min-width: 1330px) {

      .card-infograph {
        margin: 0 5px 1px 2px;
        height: 250px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .card-activity {
        height: 8.5rem;
        padding-top: 0px;
      }

      .text-activity {
        margin-top: 15px;
        font-size: 0.9rem;
        font-weight: 500;
      }

      .box-icon-activity {
        padding: 10px;
        padding-left: 30px;
      }

      .box-text-activity {
        padding-top: 20px;
        padding-right: 40px;
      }

      .card-text {
        font-size: 0.8rem;
      }


      .card-text-activity {
        text-align: center;
        font-size: 0.8rem;
      }
    }

    @media (min-width: 1550px) {
      .card-infograph {
        margin: 0 5px 3px 2px;
        height: 250px;
        border-radius: 10px;
        border: 1px solid black;
      }

      .infograph-title-text {
        font-family: 'Monda', sans-serif;
        font-size: 14px;
        text-align: center;
      }

      .infograph-body-text {
        display: flex;
        font-size: 14px;
        align-items: center;
      }

      .card-activity {
        height: 8rem;
        padding-top: 0px;
      }

      .text-activity {
        margin-top: 4px;
        font-size: 0.9rem;
        font-weight: 600;
      }

      .box-icon-activity {
        padding: 10px;
        padding-left: 60px;
      }

      .box-text-activity {
        padding-top: 40px;
        padding-right: 50px;
      }
    }

    @media (min-width: 1800px) {
      .card-activity {
        height: 10rem;
        padding-top: 0px;
      }

      .text-activity {
        font-size: 1rem;
        font-weight: 600;
      }

      .box-icon-activity {
        padding: 10px;
        padding-left: 70px;
      }

      .box-text-activity {
        padding-top: 40px;
        padding-right: 50px;
      }
    }

    section {
      margin-top: 1rem;
    }

    .navbar {
      font-family: "Open Sans", sans-serif;
      font-weight: 600;
      line-height: 18px;
      color: #0d4a82;
    }

    .card {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: 400;
      font-size: 12px;
      color: #0d4a82;
    }

    .card-activity-menu {
      height: 15rem;
    }

    .text-activity-menu {
      font-size: 0.9rem;
    }

    .card-activity {
      border: none;
      background: white;
      color: black;
      padding: 10px;
      font-size: 16px;
      border: black solid 1px;
      border-radius: 5px;
      position: relative;
      box-sizing: border-box;
      transition: all 500ms ease;
    }

    /* Ghost Button */
    .card-activity:hover {
      color: white;
      border: white solid 1px;
      background: #1f3984;
    }

    .infograph-more {
      min-width: 80px;
      min-height: 80px;
      border-radius: 100%;
      border: 1px solid black;
      align-self: center;
    }

    .infograph-more:hover {
      color: white;
      border: white solid 1px;
      background: #1f3984;
    }

    .img-application {
      position: relative;
    }

    .img-application a {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.3);
      opacity: 0;
      transition: opacity 0.3s;
    }

    .img-application a:hover {
      opacity: 1;
    }

    .img-publication-box {
      position: relative;
    }

    .img-publication-box a {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.3);
      opacity: 0;
      transition: opacity 0.3s;
    }

    .img-publication-box a:hover {
      opacity: 1;
    }

    .icon-message-delete {
      color: transparent;
    }

    .icon-message-delete:hover {
      color: red;
    }

    .icon-message-reply {
      color: transparent;
    }

    .icon-message-reply:hover {
      color: blue;
    }

    footer {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: 400;
      font-size: 12px;
      color: #0d4a82;
    }

    .logoBar {
      display: none !important;
    }

    .button-read-more {
      margin-top: 0.5rem;
      font-size: 0.7rem;
      background-color: #0D4A82;
      color: white;
      border: 1px solid black;
      padding: 0.5% 1.5%;
      transition: all 300ms ease;
    }

    .button-read-more:hover {
      background-color: white;
      color: black;
      text-decoration: none;
    }

    .btn-download-publication {
      padding: 0.5% 1.5%;
      border: 1px solid black;
      border-radius: 0px;
      background-color: #0D4A82;
      margin-top: 5px;
      font-size: 0.9rem;
      width: -webkit-fill-available;
      color: white;
      transition: all 300ms ease;
      text-align: center;
    }

    .btn-download-publication:hover {
      background-color: white;
      color: black;
      text-decoration: none;
    }

    .btn-download-publication:hover .page-hint-unduh-publikasi {
      background-color: black;
      color: white;
    }

    mark {
      line-height: 2.3rem;
    }

    #menuSearch>.card-body {
      border: 1px solid black;
    }

    #menuSearch:hover {
      background-color: #0D4A82;
    }

    #menuSearch>.card-body:hover {
      border: 1px solid white;
      color: white;
    }

    #menuFile>.card-body {
      border: 1px solid black;
    }

    #menuFile>.card-body:hover {
      background-color: #0D4A82;
      border: 1px solid black;
      color: white;
    }

    /* infograph page start */

    /**
* Set rules for how the map overlays
* (information box and legend) will be displayed
* on the page. */
    .map-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      background: #fff;
      margin-left: 20px;
      font-family: Arial, sans-serif;
      border-radius: 3px;
      padding-left: 3px;
      padding-right: 3px;
      box-shadow: 0 0 0 2px rgb(0 0 0 / 10%);
    }

    #features {
      top: 0;
      height: 20px;
      margin-top: 20px;
    }

    .map-legend {
      position: absolute;
      bottom: 0;
      left: 0;
      background: #fff;
      margin-left: 20px;
      font-family: Arial, sans-serif;
      border-radius: 3px;
      padding-left: 3px;
      padding-right: 3px;
      box-shadow: 0 0 0 2px rgb(0 0 0 / 10%);
      height: 40px;
      width: 100px;
    }

    .map-description {
      position: absolute;
      bottom: 0;
      right: 0;
      background: #fff;
      margin-right: 20px;
      font-family: Arial, sans-serif;
      border-radius: 3px;
      padding-left: 3px;
      padding-right: 3px;
      box-shadow: 0 0 0 2px rgb(0 0 0 / 10%);
      height: 40px;
      width: 100px;
    }

    /* infograph end */

    /* #menuFile:hover {
      background-color: #0D4A82;
    } */

    /* .publication-scroll::-webkit-scrollbar {
      width: 70px;
      display: none;
    } */

    .buttons-indikator:hover {
      background-color: #c4c4c4;
    }

    .buttons-indikator-2:hover {
      background-color: #c4c4c4;
    }

    .button-change-chart:hover {
      background-color: #c4c4c4;
    }

    .highcharts-credits {
      display: none;
    }
  </style>
  <!-- End Style -->

  <!-- script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://peppd.bappenas.go.id/media/assets/assets/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

  <!-- Count down js -->
  <!-- <script src="https://peppd.bappenas.go.id/media/assets/zircosadmin/plugins/count-down/jquery.lwtCountdown-1.0.js"></script> -->


  <script>
    introJs().start();
  </script>


</head>

<body style="background-color: #efefef">
  <div class="fixed-top">

    <div class="" style="background-color: #1f3984; color: white">
      <div class="container">
        <marquee behavior="scroll" direction="left" style="font-size: 14px; font-weight: 400; white-space: nowrap;">
          <span style="margin-right: 20%;">Direktorat Pemantauan, Evaluasi, dan Pengendalian Pembangunan
            Daerah&nbsp;&nbsp;&nbsp;Kementerian PPN/BAPPENAS</span>
          <a href="https://peppd.bappenas.go.id/media/news/Kementerian-PPNBappenas-Terima-Kunjungan-Kerja-Pimpinan-DPRD-Kota-Probolinggo-Bahas-Pengawasan-Eksternal-Pelayanan-Publik-di-Daerah" target="_blank"><span style="color: chartreuse; margin-right: 20%;"><i class="fa fa-exclamation-triangle"></i>
              Kementerian PPN/Bappenas Terima Kunjungan Kerja Pimpinan DPRD Kota Probolinggo Bahas Pengawasan Eksternal Pelayanan Publik di Daerah            </span></a>
          <a href="https://peppd.bappenas.go.id/media/file_publication/Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah/23012025_Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah_9766527f2b5d3e95d4a733fcfb77bd7e.pdf" target="_blank"><span style="color: springgreen; margin-right: 20%;"><i class="fa fa-book"></i>
              Laporan Akhir Kegiatan Tahun 2024: Evaluasi Pembangunan Daerah            </span></a>
        </marquee>
      </div>
    </div>

    <!-- <nav
        class="navbar navbar-expand-lg navbar-light bg-light shadow px-3 bg-white rounded"
        style="background-image: url({{ asset('images/img/bappenas_banner.png') }}); background-size: cover"
      > -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow px-3 bg-white rounded" style="background-image: url('https://peppd.bappenas.go.id/media/assets/images/img/bappenas_banner.png'); background-size: cover">
      <div class="container-fluid" style="width: 70%">
        <a class="navbar-brand" href="https://peppd.bappenas.go.id/media/"><img src="https://peppd.bappenas.go.id/media/assets/images/img/new_logo_bappenas.png" alt="LOGO-BAPPENAS" class="img-responsive" height="45" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="https://peppd.bappenas.go.id/media/" class="nav-link active">Beranda</a>
            <a href="https://peppd.bappenas.go.id/media/news" class="nav-link">Berita</a>
            <a href="https://peppd.bappenas.go.id/media/publication" class="nav-link">Publikasi</a>
            <a href="https://peppd.bappenas.go.id/media/kegiatan" class="nav-link">Kegiatan</a>
            <a href="https://peppd.bappenas.go.id/media/aplikasi" class="nav-link">Aplikasi</a>
            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfcACkyqgiSTD7QrSYHBXxg47xwenTZfi7ofACM598Kjg8Jzw/viewform?usp=pp_url" target="_blank" rel="noopener">Hubungi Kami</a>
            <!-- <a href="https://peppd.bappenas.go.id/media/karir" class="nav-link">Karir</a> -->
          </div>
        </div>
      </div>
    </nav>

  </div><div class="dekstop">
  <div class="container-fluid" style="width: 90%; margin-top: 8rem">
    <div class="row">
      <div class="col-lg-8">
        <!-- Section Carousel-->
        <div class="col-md-12 order-1">
          <section class="carousel">
            <div id="carouselExampleIndicators" class="carousel slide img-thumbnail" data-ride="carousel" style="border-radius: 0">
              <ol class="carousel-indicators" style="justify-content: left; margin-left: 5%;">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                              </ol>
              <div class="carousel-inner">
                                  <div class="carousel-item active">
                    <a class="btn-read-more-article" data-id="50" href="https://peppd.bappenas.go.id/media/news/Bappenas-Gelar-Diskusi-Sistem-Informasi-Keuangan-Daerah--Untuk-Pengayaan-Analisis-Evaluasi-Kinerja-Pembangunan-Daerah-2023" target="_blank" rel="noopener">
                      <img class="d-block w-100" style="height: 28vw;" src="https://peppd.bappenas.go.id/media/assets/images/summernote/title_picture_23052023_0336dcbab05b9d5ad24f4333c7658a0e.png" alt="0 slide" />
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7); right: 0!important; left: 0!important; bottom: 0!important; padding: 1% 5% 3% 5%; text-align: left;">
                        <p class="animate__animated animate__fadeInLeft"><strong>Bappenas Gelar Diskusi Sistem Informasi Keuangan Daerah  Untuk Pengayaan Analisis Evaluasi Kinerja Pembangunan Daerah 2023</strong></p>
                      </div>
                    </a>
                  </div>
                                  <div class="carousel-item ">
                    <a class="btn-read-more-article" data-id="63" href="https://peppd.bappenas.go.id/media/news/Kementerian-PPNBappenas-Terima-Kunjungan-Kerja-Pimpinan-DPRD-Kota-Probolinggo-Bahas-Pengawasan-Eksternal-Pelayanan-Publik-di-Daerah" target="_blank" rel="noopener">
                      <img class="d-block w-100" style="height: 28vw;" src="https://peppd.bappenas.go.id/media/assets/images/summernote/title_picture_23122024_8f85517967795eeef66c225f7883bdcb.jpg" alt="1 slide" />
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7); right: 0!important; left: 0!important; bottom: 0!important; padding: 1% 5% 3% 5%; text-align: left;">
                        <p class="animate__animated animate__fadeInLeft"><strong>Kementerian PPN/Bappenas Terima Kunjungan Kerja Pimpinan DPRD Kota Probolinggo Bahas Pengawasan Eksternal Pelayanan Publik di Daerah</strong></p>
                      </div>
                    </a>
                  </div>
                                  <div class="carousel-item ">
                    <a class="btn-read-more-article" data-id="60" href="https://peppd.bappenas.go.id/media/news/Kemeriahan-Penyerahan-Piala-Penghargaan-Pembangunan-Daerah-PPD-oleh-Presiden-RI-dan-Expo-PPD-2024-dalam-Musrenbangnas-2024" target="_blank" rel="noopener">
                      <img class="d-block w-100" style="height: 28vw;" src="https://peppd.bappenas.go.id/media/assets/images/summernote/title_picture_28052024_c45147dee729311ef5b5c3003946c48f.jpg" alt="2 slide" />
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7); right: 0!important; left: 0!important; bottom: 0!important; padding: 1% 5% 3% 5%; text-align: left;">
                        <p class="animate__animated animate__fadeInLeft"><strong>Kemeriahan Penyerahan Piala Penghargaan Pembangunan Daerah (PPD) oleh Presiden RI dan Expo PPD 2024 dalam Musrenbangnas 2024</strong></p>
                      </div>
                    </a>
                  </div>
                                <!-- <div class="carousel-item">
                    <a href="https://peppd.bappenas.go.id/media/karir" target="_blank" rel="noopener">
                      <img
                          class="d-block w-100"
                          style="height: 28vw;"
                          src="https://peppd.bappenas.go.id/media/assets/images/img/carousel/career.png"
                          alt="career slide"
                      />
                      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7); right: 0!important; left: 0!important; bottom: 0!important; padding: 1% 5% 3% 5%; text-align: left;">
                          <p class="animate__animated animate__fadeInLeft"><strong>Buat sahabat pembangunan yang ingin bergabung menjadi bagian dari kami, yuk segera daftarkan diri kalian</strong></p>
                      </div>
                    </a>
                  </div> -->
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
        </div>

        <!-- End Section Carousel -->

        <!-- infografis card -->
        <div class="col-md-12 order-4">
          <section class="card-infografis">
            <a href="https://peppd.bappenas.go.id/media/infograph" target="_blank" style="color: black;">
              Infografis
              <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </a>
            <hr style="margin-bottom: 0px;" />
            <div style="margin-left: 5px; margin-bottom: 10px;">
              <sub>
                <b>Indikator Makro Pembangunan Nasional</b>
              </sub>
            </div>
            <div class="owl-carousel owl-theme">
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Pertumbuhan Ekonomi</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/pertumbuhan_ekonomi.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023:</b>
                            5.05                            <br />
                            <sub>(
                                                                                                Turun 0.26                                   <span class="badge badge-warning ml-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.26 "></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022:
                            </b>
                            5.31                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="1" onclick="openDetailPage('bc5e08d3771ee834f4508d0c22cfd91fee3ebb3cb96aea19826733aa1309a1c1795376664194f307882ac87e6da7616c7df9fa0c1221adf3ec20606aabde4c5dh0D6FUAQKIbIB+70h05q0/a5IrYwIqenN7couNlFVfaoFEUzaYjaUtHQAfW5usNN', 'b8f20af06efe0973021a2cce3c382549e29da225183741e88a786853022fcde3f7d143c4d14e1383590a76bc1870575bb9b82e636a43aade5df2f7917a77defb51c4coy0XriM8fWUxgBorWrVvo4PxZEMllUNYQiycN8=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>PDRB per Kapita ADHB</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/pdrb_per_kapita_adhb.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023:</b>
                            Rp74.96 Juta                            <br />
                            <sub>(
                                                                                                Naik 3,921,260.00 Rp                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 3,921,260.00 Rp"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022:
                            </b>
                            Rp71.04 Juta                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="2" onclick="openDetailPage('20e430727e2c45dd31b1c9ac8d0e06092338bfce02304b3051ab811cce26ba1098184031fe548d03e1cad64d31920d503043f13331ecdff76dffdea6970cb854qdqtTZZZ2/BBfG5+3PMQZIh7rmaI9h8sWFh2V0GGENEI9nyuEf/kpiKAkRg9PLel', 'f95e14c31f1034ced889be3a2f723cb51111cee1f929eb83415b06f3b90a236791116a39ea58323325c55cf36b79bc0d3a793f5f189beb9189ddbaab23a3d96cSxTjnAwps+W332UckhOujmb5FHSV5XHzYo3hWXCl+Fs=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>PDRB per Kapita ADHK Tahun Dasar 2010</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/pdrb_per_kapita_adhk_tahun_dasar_2010.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023:</b>
                            Rp44.14 Juta                            <br />
                            <sub>(
                                                                                                Naik 1,667,540.00 Rp                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 1,667,540.00 Rp"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022:
                            </b>
                            Rp42.47 Juta                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="3" onclick="openDetailPage('2ce143862e473c3c6b2c6021e01876e90fb15df31df2579486a035ea0751c27450903d5ff9871ed91ea165a2867fc86fbe9a56f6300974cab35bde654c728fc1Uh7K3h4eefEZspLJ2/VC8G84kfkOrkcl+nn7PIYf0zoCmShCrRCpNbYy6BMBQWXhvX5aDMW7rsy/giaqbo9uew==', '87c4ee014bfb91d84dc6babb299e5a903a030ab7f97a0dbe5178aa55b53115cdf3c15f55709701e7e729fd57d31a33326be10e5f92dad8372c05a44bca04f366+RKlukFL7dD/JQieJrQVe7MxHxn6zWxmSicts6gCh4g=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Jumlah Penganggur</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/jumlah_penganggur.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023 (Feb):</b>
                            79.89 Juta Orang                            <br />
                            <sub>(
                                                                                                Turun 436,656.00 Orang                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 436,656.00 Orang"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022 (Agu):
                            </b>
                            84.26 Juta Orang                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="4" onclick="openDetailPage('4f2c153e1343f0ae14cef96e66b6b580d5d321df1fa3db5acfb3a4924115a88d340a5ed8a7a0b63e98e92e3bef289b43e1c1a71a195ab6272bdabb2ac37d4c5fTo65f7+/EPC6pcMZDncaBtRO+d8teOMOFvf+V19Ea80h5K/7hteK6nap3D0oC73W', '2a409bf54085b3697dcbb4417db7636a3ecae353bfed16726c72012b05777e1785528b7fb536cdbe92acdaea637a43264ebe3192eb77f9c45a9df36ff83438fbz48Z5Uu8AgmWTT9l6f6Yty434dd6IOm3ahOSvRTwjGg=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Indeks Pembangunan Manusia</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/indeks_pembangunan_manusia.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023:</b>
                            74.39                            <br />
                            <sub>(
                                                                                                Naik 0.62                                   <span class="badge badge-success ml-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 0.62 "></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022:
                            </b>
                            73.77                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="5" onclick="openDetailPage('a71ef8bf4be07e27196642a60bdbc9ad0fec87082e4adacb1577ea4b7fb1f9a1bb07861f00d950341a6e132f44a3e92a04d83b5a998231e990f062c6519fee8bIdthGYodomUZFba8qHBP09LRQ75RrLtAPPoqWqUrwcNo+HGZXEiSqWoBxlg9MaP/', 'ee7efaef013188fff029c40a2a8ada29a5614656a4db5936c1ae884f6ce48a6fe3069962d52863e8b2b6aea814ac490e7c21d352ad5357e1122cd9abe382efdch1yX9zDWFyCTBQproqubDSxiPjEYIMcquU/jyZzuLPI=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Tingkat Pengangguran Terbuka</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/tingkat_pengangguran_terbuka.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2024 (Feb):</b>
                            4.82 %                            <br />
                            <sub>(
                                                                                                Turun 0.50 %                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.50 %"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2023 (Agu):
                            </b>
                            5.32 %                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="6" onclick="openDetailPage('6ce85c41b71b073b0e66acfad328c2ccdde5378cb2371cde1af897b23246783ea22ffb95237e962eed2149765d851a1cfeece12a87f6f6a1ae491520c161037aaaBytO4w1qKolcP7XBcEFtygVA6ozV5uwiDWuo6yV9a/8RQpcHiTglGZ4/0FZeEx', '88de59bab1c72abcfbb553d194a122071d7fbb9195f7cbb8281f8481efc301be7cc75fc1ed8cdbbc7c78ee0d2fbdd6d3bb79ae0f1e6924893ae834b5ede92a9esBq9Y1bTR8yss1MU7gFubfwnOJedOvHt/pTFetpz3Bc=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Gini Rasio</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/gini_rasio.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2024 (Mar):</b>
                            0.38                            <br />
                            <sub>(
                                                                                                Turun 0.01                                   <span class="badge badge-warning ml-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.01 "></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2023 (Mar):
                            </b>
                            0.39                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="7" onclick="openDetailPage('407148274aa219327e840019c9763f740c622394b29ff7b1aec8a4a528dc5669d559edaccb95bae155038cbfee84b96a79bcd5fd2a5b181fe52389d789b17672cazIs5EYuWvctOYoTd/Nwuxa8Nr6OPqW6/OCd/vjFrs=', 'b4af2a05b53c2af79666fe28e852d4c322a66a677fb003566ccc28156736e99ff69a516e5cef176647ca16b8862f7d93f9474e3599b9b2d3ecd8c3f76899e1b5ze+RIPshAqTxh0oTVkuX0P/zDDCUXAD8zi5yeTnVQ9U=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Angka Harapan Hidup</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/angka_harapan_hidup.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023:</b>
                            73.93 Tahun                            <br />
                            <sub>(
                                                                                                Naik 1.01 Tahun                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 1.01 Tahun"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022:
                            </b>
                            72.92 Tahun                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="8" onclick="openDetailPage('116e3b847d05e8606c0c5c2a89488dbba16c0ecc25108b45ac3564f67c26fa3b2249a179ef30428c3f07b1428e601d12dfec3a27654cd482d47e1cec067f5bafyhmt/qRhZapQ3za5/mK+S0jkZzrjckDVL+AHFpm1ZD+ax17lpDoErhU4Rk18eL4r', '475ea9084cffa84310162018f42af5104fd64948bd94ceb5654b0fea7aec903fde80b389f20de510a99465ce1cb6d10556644e2b6ab8b63fb0feba88af7eacc4TFs8ULFIQb2Xj+C15fG/fcr9IXUeD2b7EnyM5bcAUVM=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Rata-rata Lama Sekolah</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/rata-rata_lama_sekolah.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023:</b>
                            8.77 Tahun                            <br />
                            <sub>(
                                                                                                Naik 0.08 Tahun                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 0.08 Tahun"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022:
                            </b>
                            8.69 Tahun                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="9" onclick="openDetailPage('ca2133297ea6c6e166c29d956a3836146afd9f762b02fb12661f704d4d9f9f77d9f55ac54df3060eab2fc862a272498469566fdaae612979b78ee9a399ba22daFVhH0D1VwcRyiel06zhdAC/6+CKAZ+qaozCOVlyyU4VfWq3Y/YPfSqyZ3RIIn9vk', '1e68fd26f398f1178405c6d62d80ef2f1587269335ad459bbe65b91038ceb59a47381927b9412509b2ff4e7a5b004a5af9dafac4f1a40a324ba91503c90a8d909bxVWYaL4WLHj/c65JjXxzH5S3y2f3hf+Ccy9UOuJok=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Harapan Lama Sekolah</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/harapan_lama_sekolah.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023:</b>
                            13.15 Tahun                            <br />
                            <sub>(
                                                                                                Naik 0.05 Tahun                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 0.05 Tahun"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022:
                            </b>
                            13.10 Tahun                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="10" onclick="openDetailPage('e43ec47d8f25076b053200f3c16296e4cbd52855a70f5eee72bd1c8c5dd52a3d484b000493ecec8d91d0d426637356acf3d049a792c183b86e0e6eb973d77559YQgmsMcX0scyOsY/jjxn03H54+eU3aHb4hcr1+mzkE1chaGtNGIQ5iZfXzYTliFf', '843081e63b35bd5a86080f1272c4dca38d3c3ff95d7327ef76d3846a3c05bce02086f55399a226d8ba705bcdb4bad5d0f2098406ebe9d2f54b2da498fd0abd11YQM+SPKvGTmJrwGHGeq7Fqr7kbEvInQpX6gFHmbQWTw=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Pengeluaran per Kapita</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/pengeluaran_per_kapita.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023:</b>
                            Rp11.90 Juta                            <br />
                            <sub>(
                                                                                                Naik 420,000.00 Rp                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 420,000.00 Rp"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022:
                            </b>
                            Rp11.48 Juta                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="11" onclick="openDetailPage('c842e6fdd937b4205b1197a16e43d3150739bb82ff569b7feb44f5dbd08f4c2d8ca22afc846adff5664549bc28a5cafd7c346a644efadf7b7dc0a4e37f09d7a67/40UZJhzVaes+fk3fUWwKj+DZaK7H5QJbN1MkMRydJKMEi+yiJbZiVXEr/Dxal/', '65c52d84507a569284c1b44bb888d03cf7c66c92e26935eb5375a06667e1d6a6fd3b3311532f82cec3863a890cb129dc8462c4d91f5317e7bb3ea64aa3ceada0vD7dXqNpYbI8iRHVxZix6PAsyyTaMyrTCKxF4TTeihI=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Tingkat Kemiskinan</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/tingkat_kemiskinan.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2024 (Mar):</b>
                            9.03 %                            <br />
                            <sub>(
                                                                                                Turun 0.33 %                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.33 %"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2023 (Mar):
                            </b>
                            9.36 %                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="36" onclick="openDetailPage('be1c6f706f9e7277cce7742ca8b005dcc6e4ba631029429b39090d6d1e2af208cba59faa35e0015018346645abc6eb5793acf625dfb467c9195b9f4a6ea16966bIPvk83fdfXcexpmdO7EYItaS+pDl/KwAB0TNdi0himYSRqcMhkDXUa+mNTsBg/c', 'c2cd9b1cde4cfe868e7f9378800e05b73de437a4243db983171e8f2216f97ebbef6988ec9906b6ae69c55ffeb5a77471e4eb3cbe57307c0464220f1b6f9230f9ToOK1PhUQlYST36ntvkGhqEwMM9QnO8/qmTdDgZDD4g=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Indeks Kedalaman Kemiskinan</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/indeks_kedalaman_kemiskinan.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2024 (Mar):</b>
                            1.46 %                            <br />
                            <sub>(
                                                                                                Turun 0.07 %                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.07 %"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2023 (Mar):
                            </b>
                            1.53 %                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="39" onclick="openDetailPage('931d14db70a4571862b499b3c94b6c8608b7501985ddc0fb72498fcbb349d724939e16c2a5528bfe7540fab70fd08a3813b355f3b6c014118fba199d52c0f7ef7598Zmb9guIBDEIdyOjyL082qQuuaZ9YyYDaRunNaVcw8HGPx/60SM7RmL69qEbb', '9723d951314c3eefb62227dea61fe59029c7ae42a99d1aa2c4217d1f083968821d9d861ac5f4c9520e28ba8c15e706568a9b78a416394231eb9c27c4724b10faXthQ4QBEhUH9siV6XXo7CKivdMSrL4reLlhMvApW26g=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                              <div class="item">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-12">
                          <p class="card-title infograph-title-text">
                            <b>Jumlah Penduduk Miskin</b>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-body" style="min-height: 150px;">
                      <div class="row">
                        <div class="col-4">
                          <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/jumlah_penduduk_miskin.png">
                        </div>
                        <div class="col-8">
                          <p>
                            <b>2023 (Mar):</b>
                            258.99 Juta Orang                            <br />
                            <sub>(
                                                                                                Turun 464,720.00 Orang                                  <span class="badge badge-success ml-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 464,720.00 Orang"></i></span>
                                                                                            )</sub>
                          </p>
                          <p><b>
                              2022 (Sep):
                            </b>
                            263.63 Juta Orang                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="button-detail-infograph" data-id="40" onclick="openDetailPage('3a82a0e201ab1a007429f0dfbd396bbb31d12dc0f36e94ba4dd3a35b6a184d10454e6c71d9dce4e86dc54db610009dc835609647b43be1fcb48a52de86b7191e8itH2dbS8KidjklZZDVjZyANhxeA8ztSSXyRLcld5OIVyt+I5A59rjB+LHm0dfMH', 'af138a36bd51c940aff75a7d6b7726c0f6965b196fa904b04e43255adb4c12f995be0a48d426fe57992c3f3339024587f205ef7fca854396a218116b9fc225aaRHPXUyc+oigyDEhU/kciTOg8J8aAbK1TEJrJHVrKsMs=')">
                        Detail <i class="fa fa-caret-right"></i>
                      </button>
                    </div>
                  </div>
                </div>
                          </div>
            <div style="text-align: right; margin-right: 5px;">
              <sub style="margin-top: 10px;"><b><u>Keterangan</u></b></sub>
              <br /><sub>Lebih Tinggi Lebih Baik <span class="badge badge-success"><i class="fa fa-arrow-up" aria-hidden="true"></i></span> - Lebih Tinggi Lebih Buruk <span class="badge badge-warning"><i class="fa fa-arrow-up" aria-hidden="true"></i></span></sub>
              <br /><sub>Klik <b><a href="https://peppd.bappenas.go.id/media/infograph" target="_blank" style="color: black;"> infografis <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></b> untuk melihat indikator makro lainnya (Nasional, Kabupaten, kota)</sub>
              <br /><sub>Klik detail untuk melihat proyeksi 6 periode sebelumnya <button type="button" style="background-color: #0D4A82; color: white;">Detail <i class="fa fa-caret-right"></i></button></sub>
            </div>
          </section>
        </div>
        <!-- end infografis card -->

        <!-- Section News -->
        <div class="col-md-12 order-3">
          <section class="news">
            <a href="https://peppd.bappenas.go.id/media/news" style="color: black;">
              Berita
              <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </a>
            <hr />
            <div class="list_article"></div>
            <div align="right" class="pagination_link"></div>
          </section>
        </div>
        <!-- End Section News -->

        <!-- Section Publication -->
        <div class="col-md-12 order-5">
          <section class="publication">
            <a href="https://peppd.bappenas.go.id/media/publication" style="color: black;">
              Publikasi
              <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </a>
            <hr />
            <!-- array(6) {
  [0]=>
  object(stdClass)#30 (10) {
    ["id"]=>
    string(3) "188"
    ["id_category"]=>
    string(1) "8"
    ["name"]=>
    string(62) "Laporan Akhir Kegiatan Tahun 2024: Evaluasi Pembangunan Daerah"
    ["description"]=>
    string(0) ""
    ["title_picture"]=>
    string(108) "23012025_Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah_9766527f2b5d3e95d4a733fcfb77bd7e.png"
    ["file"]=>
    string(108) "23012025_Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah_9766527f2b5d3e95d4a733fcfb77bd7e.pdf"
    ["year"]=>
    string(4) "2024"
    ["region"]=>
    string(4) "1000"
    ["created_at"]=>
    string(19) "2025-01-23 13:53:34"
    ["updated_at"]=>
    string(19) "2025-01-23 13:53:34"
  }
  [1]=>
  object(stdClass)#31 (10) {
    ["id"]=>
    string(3) "112"
    ["id_category"]=>
    string(1) "3"
    ["name"]=>
    string(41) "Success Story Pengawasan Pelayanan Publik"
    ["description"]=>
    string(0) ""
    ["title_picture"]=>
    string(87) "03092024_Success-Story-Pengawasan-Pelayanan-Publik_7f6ffaa6bb0b408017b62254211691b5.png"
    ["file"]=>
    string(87) "03092024_Success-Story-Pengawasan-Pelayanan-Publik_7f6ffaa6bb0b408017b62254211691b5.pdf"
    ["year"]=>
    string(4) "2024"
    ["region"]=>
    string(4) "1000"
    ["created_at"]=>
    string(19) "2024-09-03 10:24:44"
    ["updated_at"]=>
    string(19) "2024-09-03 10:24:44"
  }
  [2]=>
  object(stdClass)#32 (10) {
    ["id"]=>
    string(1) "6"
    ["id_category"]=>
    string(1) "1"
    ["name"]=>
    string(48) "Knowledge Sharing Pembangunan Daerah 2019 - 2020"
    ["description"]=>
    string(48) "Knowledge Sharing Pembangunan Daerah 2019 - 2020"
    ["title_picture"]=>
    string(94) "30112021_Knowledge-Sharing-Pembangunan-Daerah-2019---2020_76dc611d6ebaafc66cc0879c71b5db5c.png"
    ["file"]=>
    string(94) "05122021_Knowledge-Sharing-Pembangunan-Daerah-2019---2020_a8f15eda80c50adb0e71943adc8015cf.pdf"
    ["year"]=>
    string(1) "0"
    ["region"]=>
    string(0) ""
    ["created_at"]=>
    string(19) "2021-11-30 16:37:00"
    ["updated_at"]=>
    string(19) "2021-11-30 16:37:00"
  }
  [3]=>
  object(stdClass)#33 (10) {
    ["id"]=>
    string(1) "5"
    ["id_category"]=>
    string(1) "1"
    ["name"]=>
    string(32) "Prosiding Knowledge Sharing 2019"
    ["description"]=>
    string(0) ""
    ["title_picture"]=>
    string(78) "30082021_Prosiding-Knowledge-Sharing-2019_2b44928ae11fb9384c4cf38708677c48.png"
    ["file"]=>
    string(78) "05122021_Prosiding-Knowledge-Sharing-2019_013d407166ec4fa56eb1e1f8cbe183b9.pdf"
    ["year"]=>
    string(1) "0"
    ["region"]=>
    string(0) ""
    ["created_at"]=>
    string(19) "2021-08-30 11:45:42"
    ["updated_at"]=>
    string(19) "2021-08-30 11:45:42"
  }
  [4]=>
  object(stdClass)#34 (10) {
    ["id"]=>
    string(1) "4"
    ["id_category"]=>
    string(1) "1"
    ["name"]=>
    string(32) "Prosiding Knowledge Sharing 2018"
    ["description"]=>
    string(0) ""
    ["title_picture"]=>
    string(78) "30082021_Prosiding-Knowledge-Sharing-2018_9b8619251a19057cff70779273e95aa6.png"
    ["file"]=>
    string(78) "05122021_Prosiding-Knowledge-Sharing-2018_1afa34a7f984eeabdbb0a7d494132ee5.pdf"
    ["year"]=>
    string(1) "0"
    ["region"]=>
    string(0) ""
    ["created_at"]=>
    string(19) "2021-08-30 11:20:31"
    ["updated_at"]=>
    string(19) "2021-08-30 11:20:31"
  }
  [5]=>
  object(stdClass)#35 (10) {
    ["id"]=>
    string(1) "3"
    ["id_category"]=>
    string(1) "1"
    ["name"]=>
    string(41) "Knowledge Sharing Pembangunan Daerah 2018"
    ["description"]=>
    string(0) ""
    ["title_picture"]=>
    string(68) "21062021_Sharing-Knowledge-2020_07e1cd7dca89a1678042477183b7ac3f.png"
    ["file"]=>
    string(68) "21062021_Sharing-Knowledge-2020_07e1cd7dca89a1678042477183b7ac3f.pdf"
    ["year"]=>
    string(1) "0"
    ["region"]=>
    string(0) ""
    ["created_at"]=>
    string(19) "2021-06-21 16:25:33"
    ["updated_at"]=>
    string(19) "2021-06-21 16:25:33"
  }
}
              <br>
              <br>
              array(6) {
  [0]=>
  array(1) {
    [0]=>
    object(stdClass)#36 (10) {
      ["id"]=>
      string(3) "188"
      ["id_category"]=>
      string(1) "8"
      ["name"]=>
      string(62) "Laporan Akhir Kegiatan Tahun 2024: Evaluasi Pembangunan Daerah"
      ["description"]=>
      string(0) ""
      ["title_picture"]=>
      string(108) "23012025_Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah_9766527f2b5d3e95d4a733fcfb77bd7e.png"
      ["file"]=>
      string(108) "23012025_Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah_9766527f2b5d3e95d4a733fcfb77bd7e.pdf"
      ["created_at"]=>
      string(19) "2025-01-23 13:53:34"
      ["updated_at"]=>
      string(19) "2025-01-23 13:53:34"
      ["sum_of_log"]=>
      string(1) "5"
      ["sum_of_download"]=>
      string(2) "29"
    }
  }
  [1]=>
  array(1) {
    [0]=>
    object(stdClass)#37 (10) {
      ["id"]=>
      string(3) "112"
      ["id_category"]=>
      string(1) "3"
      ["name"]=>
      string(41) "Success Story Pengawasan Pelayanan Publik"
      ["description"]=>
      string(0) ""
      ["title_picture"]=>
      string(87) "03092024_Success-Story-Pengawasan-Pelayanan-Publik_7f6ffaa6bb0b408017b62254211691b5.png"
      ["file"]=>
      string(87) "03092024_Success-Story-Pengawasan-Pelayanan-Publik_7f6ffaa6bb0b408017b62254211691b5.pdf"
      ["created_at"]=>
      string(19) "2024-09-03 10:24:44"
      ["updated_at"]=>
      string(19) "2024-09-03 10:24:44"
      ["sum_of_log"]=>
      string(3) "453"
      ["sum_of_download"]=>
      string(3) "287"
    }
  }
  [2]=>
  array(1) {
    [0]=>
    object(stdClass)#38 (10) {
      ["id"]=>
      string(1) "6"
      ["id_category"]=>
      string(1) "1"
      ["name"]=>
      string(48) "Knowledge Sharing Pembangunan Daerah 2019 - 2020"
      ["description"]=>
      string(48) "Knowledge Sharing Pembangunan Daerah 2019 - 2020"
      ["title_picture"]=>
      string(94) "30112021_Knowledge-Sharing-Pembangunan-Daerah-2019---2020_76dc611d6ebaafc66cc0879c71b5db5c.png"
      ["file"]=>
      string(94) "05122021_Knowledge-Sharing-Pembangunan-Daerah-2019---2020_a8f15eda80c50adb0e71943adc8015cf.pdf"
      ["created_at"]=>
      string(19) "2021-11-30 16:37:00"
      ["updated_at"]=>
      string(19) "2021-11-30 16:37:00"
      ["sum_of_log"]=>
      string(4) "1555"
      ["sum_of_download"]=>
      string(4) "1278"
    }
  }
  [3]=>
  array(1) {
    [0]=>
    object(stdClass)#39 (10) {
      ["id"]=>
      string(1) "5"
      ["id_category"]=>
      string(1) "1"
      ["name"]=>
      string(32) "Prosiding Knowledge Sharing 2019"
      ["description"]=>
      string(0) ""
      ["title_picture"]=>
      string(78) "30082021_Prosiding-Knowledge-Sharing-2019_2b44928ae11fb9384c4cf38708677c48.png"
      ["file"]=>
      string(78) "05122021_Prosiding-Knowledge-Sharing-2019_013d407166ec4fa56eb1e1f8cbe183b9.pdf"
      ["created_at"]=>
      string(19) "2021-08-30 11:45:42"
      ["updated_at"]=>
      string(19) "2021-08-30 11:45:42"
      ["sum_of_log"]=>
      string(4) "1053"
      ["sum_of_download"]=>
      string(4) "1084"
    }
  }
  [4]=>
  array(1) {
    [0]=>
    object(stdClass)#40 (10) {
      ["id"]=>
      string(1) "4"
      ["id_category"]=>
      string(1) "1"
      ["name"]=>
      string(32) "Prosiding Knowledge Sharing 2018"
      ["description"]=>
      string(0) ""
      ["title_picture"]=>
      string(78) "30082021_Prosiding-Knowledge-Sharing-2018_9b8619251a19057cff70779273e95aa6.png"
      ["file"]=>
      string(78) "05122021_Prosiding-Knowledge-Sharing-2018_1afa34a7f984eeabdbb0a7d494132ee5.pdf"
      ["created_at"]=>
      string(19) "2021-08-30 11:20:31"
      ["updated_at"]=>
      string(19) "2021-08-30 11:20:31"
      ["sum_of_log"]=>
      string(4) "1069"
      ["sum_of_download"]=>
      string(3) "996"
    }
  }
  [5]=>
  array(1) {
    [0]=>
    object(stdClass)#41 (10) {
      ["id"]=>
      string(1) "3"
      ["id_category"]=>
      string(1) "1"
      ["name"]=>
      string(41) "Knowledge Sharing Pembangunan Daerah 2018"
      ["description"]=>
      string(0) ""
      ["title_picture"]=>
      string(68) "21062021_Sharing-Knowledge-2020_07e1cd7dca89a1678042477183b7ac3f.png"
      ["file"]=>
      string(68) "21062021_Sharing-Knowledge-2020_07e1cd7dca89a1678042477183b7ac3f.pdf"
      ["created_at"]=>
      string(19) "2021-06-21 16:25:33"
      ["updated_at"]=>
      string(19) "2021-06-21 16:25:33"
      ["sum_of_log"]=>
      string(4) "1094"
      ["sum_of_download"]=>
      string(4) "1084"
    }
  }
}
              <br> -->
            <div class="row publication-scroll" style="overflow-x: auto; flex-wrap: nowrap;">
                                                <div class="my-2 mx-2">

                    <div class="card img-publication-box" style="max-width:fit-content;" title="Laporan Akhir Kegiatan Tahun 2024: Evaluasi Pembangunan Daerah">
                      <span class="badge badge-info" style="position: absolute; margin: 10px; right: 0;">Page Hint:
                        5                      </span>
                      <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah/23012025_Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah_9766527f2b5d3e95d4a733fcfb77bd7e.png" alt="Laporan Akhir Kegiatan Tahun 2024: Evaluasi Pembangunan Daerah">
                      <div class="card-body p-2">
                        <p class="card-text" style="text-wrap: nowrap;">
                          Laporan Akhir Kegiatan ...                        </p>

                      </div>
                                                        <a href="https://peppd.bappenas.go.id/media/file_publication/Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah/23012025_Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah_9766527f2b5d3e95d4a733fcfb77bd7e.pdf" data-id="188" target="_blank" rel="noopener" class="d-flex justify-content-center btn-read-publication">
                                                                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                  <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                                  </lord-icon>
                                  </a>
                    </div>
                    <a type="button" class="btn-download-publication btn-download-modal" style="display: flex; justify-content: center; align-self: center;" data-toggle="modal" data-target="#exampleModal" data-id="188" data-nama="Laporan Akhir Kegiatan Tahun 2024: Evaluasi Pembangunan Daerah">
                      Unduh
                      <span class="badge badge-light page-hint-unduh-publikasi" style="font-size: 0.6rem; padding: 0.10em; align-self: center; margin-left: 4px;">
                        29                      </span>
                    </a>
                  </div>
                                                                <div class="my-2 mx-2">

                    <div class="card img-publication-box" style="max-width:fit-content;" title="Success Story Pengawasan Pelayanan Publik">
                      <span class="badge badge-info" style="position: absolute; margin: 10px; right: 0;">Page Hint:
                        453                      </span>
                      <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Success-Story-Pengawasan-Pelayanan-Publik/03092024_Success-Story-Pengawasan-Pelayanan-Publik_7f6ffaa6bb0b408017b62254211691b5.png" alt="Success Story Pengawasan Pelayanan Publik">
                      <div class="card-body p-2">
                        <p class="card-text" style="text-wrap: nowrap;">
                          Success Story Pengawasa...                        </p>

                      </div>
                                              <!-- <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script> -->
                        <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                        <a class="d-flex justify-content-center btn-read-publication" data-id="112" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/eagp/" data-width="900" data-height="500" data-title="Success Story Pengawasan Pelayanan Publik">
                                                          <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                  <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                                  </lord-icon>
                                  </a>
                    </div>
                    <a type="button" class="btn-download-publication btn-download-modal" style="display: flex; justify-content: center; align-self: center;" data-toggle="modal" data-target="#exampleModal" data-id="112" data-nama="Success Story Pengawasan Pelayanan Publik">
                      Unduh
                      <span class="badge badge-light page-hint-unduh-publikasi" style="font-size: 0.6rem; padding: 0.10em; align-self: center; margin-left: 4px;">
                        287                      </span>
                    </a>
                  </div>
                                                                <div class="my-2 mx-2">

                    <div class="card img-publication-box" style="max-width:fit-content;" title="Knowledge Sharing Pembangunan Daerah 2019 - 2020">
                      <span class="badge badge-info" style="position: absolute; margin: 10px; right: 0;">Page Hint:
                        1555                      </span>
                      <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Knowledge-Sharing-Pembangunan-Daerah-2019---2020/30112021_Knowledge-Sharing-Pembangunan-Daerah-2019---2020_76dc611d6ebaafc66cc0879c71b5db5c.png" alt="Knowledge Sharing Pembangunan Daerah 2019 - 2020">
                      <div class="card-body p-2">
                        <p class="card-text" style="text-wrap: nowrap;">
                          Knowledge Sharing Pemba...                        </p>

                      </div>
                                                      <!-- <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script> -->
                                <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                                <a class="d-flex justify-content-center btn-read-publication" data-id="6" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/kvbv/" data-width="900" data-height="500" data-title="Knowledge Sharing Pembangunan Daerah 2019 - 2020">
                                                                  <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                  <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                                  </lord-icon>
                                  </a>
                    </div>
                    <a type="button" class="btn-download-publication btn-download-modal" style="display: flex; justify-content: center; align-self: center;" data-toggle="modal" data-target="#exampleModal" data-id="6" data-nama="Knowledge Sharing Pembangunan Daerah 2019 - 2020">
                      Unduh
                      <span class="badge badge-light page-hint-unduh-publikasi" style="font-size: 0.6rem; padding: 0.10em; align-self: center; margin-left: 4px;">
                        1278                      </span>
                    </a>
                  </div>
                                                                <div class="my-2 mx-2">

                    <div class="card img-publication-box" style="max-width:fit-content;" title="Prosiding Knowledge Sharing 2019">
                      <span class="badge badge-info" style="position: absolute; margin: 10px; right: 0;">Page Hint:
                        1053                      </span>
                      <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Prosiding-Knowledge-Sharing-2019/30082021_Prosiding-Knowledge-Sharing-2019_2b44928ae11fb9384c4cf38708677c48.png" alt="Prosiding Knowledge Sharing 2019">
                      <div class="card-body p-2">
                        <p class="card-text" style="text-wrap: nowrap;">
                          Prosiding Knowledge Sha...                        </p>

                      </div>
                                                    <!-- <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script> -->
                              <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                              <a class="d-flex justify-content-center btn-read-publication" data-id="5" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/ksbx/" data-width="900" data-height="500" data-title="Prosiding Knowledge Sharing 2019">
                                                                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                  <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                                  </lord-icon>
                                  </a>
                    </div>
                    <a type="button" class="btn-download-publication btn-download-modal" style="display: flex; justify-content: center; align-self: center;" data-toggle="modal" data-target="#exampleModal" data-id="5" data-nama="Prosiding Knowledge Sharing 2019">
                      Unduh
                      <span class="badge badge-light page-hint-unduh-publikasi" style="font-size: 0.6rem; padding: 0.10em; align-self: center; margin-left: 4px;">
                        1084                      </span>
                    </a>
                  </div>
                                                                <div class="my-2 mx-2">

                    <div class="card img-publication-box" style="max-width:fit-content;" title="Prosiding Knowledge Sharing 2018">
                      <span class="badge badge-info" style="position: absolute; margin: 10px; right: 0;">Page Hint:
                        1069                      </span>
                      <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Prosiding-Knowledge-Sharing-2018/30082021_Prosiding-Knowledge-Sharing-2018_9b8619251a19057cff70779273e95aa6.png" alt="Prosiding Knowledge Sharing 2018">
                      <div class="card-body p-2">
                        <p class="card-text" style="text-wrap: nowrap;">
                          Prosiding Knowledge Sha...                        </p>

                      </div>
                                                  <!-- <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script> -->
                            <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                            <a class="d-flex justify-content-center btn-read-publication" data-id="4" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/qrsg/" data-width="900" data-height="500" data-title="Prosiding Knowledge Sharing 2018">
                                                              <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                  <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                                  </lord-icon>
                                  </a>
                    </div>
                    <a type="button" class="btn-download-publication btn-download-modal" style="display: flex; justify-content: center; align-self: center;" data-toggle="modal" data-target="#exampleModal" data-id="4" data-nama="Prosiding Knowledge Sharing 2018">
                      Unduh
                      <span class="badge badge-light page-hint-unduh-publikasi" style="font-size: 0.6rem; padding: 0.10em; align-self: center; margin-left: 4px;">
                        996                      </span>
                    </a>
                  </div>
                                                                <div class="my-2 mx-2">

                    <div class="card img-publication-box" style="max-width:fit-content;" title="Knowledge Sharing Pembangunan Daerah 2018">
                      <span class="badge badge-info" style="position: absolute; margin: 10px; right: 0;">Page Hint:
                        1094                      </span>
                      <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Knowledge-Sharing-Pembangunan-Daerah-2018/21062021_Sharing-Knowledge-2020_07e1cd7dca89a1678042477183b7ac3f.png" alt="Knowledge Sharing Pembangunan Daerah 2018">
                      <div class="card-body p-2">
                        <p class="card-text" style="text-wrap: nowrap;">
                          Knowledge Sharing Pemba...                        </p>

                      </div>
                                                <!-- <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script> -->
                          <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                          <a class="d-flex justify-content-center btn-read-publication" data-id="3" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/ghjy/" data-width="900" data-height="500" data-title="Knowledge Sharing Pembangunan Daerah 2018">
                                                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                  <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                                  </lord-icon>
                                  </a>
                    </div>
                    <a type="button" class="btn-download-publication btn-download-modal" style="display: flex; justify-content: center; align-self: center;" data-toggle="modal" data-target="#exampleModal" data-id="3" data-nama="Knowledge Sharing Pembangunan Daerah 2018">
                      Unduh
                      <span class="badge badge-light page-hint-unduh-publikasi" style="font-size: 0.6rem; padding: 0.10em; align-self: center; margin-left: 4px;">
                        1084                      </span>
                    </a>
                  </div>
                                          </div>
          </section>
        </div>
        <!-- End Section Publication -->

      </div>
      <div class="col-lg-4">

        <!-- Section Activity -->
        <div class="col-md-12 order-2">
          <section class="activity">
            Kegiatan
            <hr />
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12 my-1 rounded-3">
                <a href="https://peppd.bappenas.go.id/media/kegiatan/penghargaan" style="text-decoration: none;">
                  <div class="card card-activity">
                    <div class="row">
                      <div class="col-4 box-icon-activity">
                        <img class="img-fluid mb-3 w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/logo-kegiatan/ppd-min.png" alt="card image" />
                      </div>
                      <div class="col-8 box-text-activity">
                        <div class="col">
                          <p class="card-text text-center text-activity">
                            PENGHARGAAN PEMBANGUNAN DAERAH
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-12 my-1 rounded-3">
                <a href="https://peppd.bappenas.go.id/media/kegiatan/evaluasi" style="text-decoration: none;">
                  <div class="card card-activity">
                    <div class="row">
                      <div class="col-4 box-icon-activity">
                        <img class="img-fluid mb-3 w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/logo-kegiatan/epd-min.png" alt="card image" />
                      </div>
                      <div class="col-8 box-text-activity">
                        <div class="box-img-activity col">
                          <p class="card-text text-center text-activity">
                            EVALUASI PEMBANGUNAN DAERAH
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-12 my-1 rounded-3">
                <a href="https://peppd.bappenas.go.id/media/kegiatan/koordinasi" style="text-decoration: none;">
                  <div class="card card-activity">
                    <div class="row">
                      <div class="col-4 box-icon-activity">
                        <img class="img-fluid mb-3 w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/logo-kegiatan/koordinasi_pembangunan-min.png" alt="card image" />
                      </div>
                      <div class="col-8 box-text-activity">
                        <div class="box-img-activity col">
                          <p class="card-text text-center text-activity">
                            KOORDINASI PEMBANGUNAN
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </section>
        </div>
        <!-- End Section Activity -->

        <!-- Section Application -->
        <div class="col-md-12 order-4">
          <section class="application">
            Aplikasi
            <hr />
            <div class="card card-application my-3">
              <div class="img-application">
                <img src="https://peppd.bappenas.go.id/media/assets/images/img/login_ppd2025.png" class="card-img-top" alt="Aplikasi Penilaian PPD" />
                <div class="card-body">
                  <p class="card-text text-center">LOGIN SISTEM PENILAIAN PPD</p>
                </div>
                <a href="https://peppd.bappenas.go.id/jumper_ppd/" target="_blank" rel="noopener" class="d-flex justify-content-center">
                  <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                  <lord-icon src="https://cdn.lordicon.com/udwhdpod.json" trigger="morph" colors="primary:#121331,secondary:#08a88a" style="width:180px;height:180px">
                  </lord-icon>
                </a>
              </div>
            </div>
            <div class="card card-application my-3">
              <div class="img-application">
                <img src="https://peppd.bappenas.go.id/media/assets/images/img/aplikasi_pemantauan.png" class="card-img-top" alt="Aplikasi Pemantauan" />
                <div class="card-body">
                  <p class="card-text text-center">LOGIN SISTEM PEMANTAUAN</p>
                </div>
                <a href="https://peppd.bappenas.go.id/pemantauan/" target="_blank" rel="noopener" class="d-flex justify-content-center">
                  <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                  <lord-icon src="https://cdn.lordicon.com/udwhdpod.json" trigger="morph" colors="primary:#121331,secondary:#08a88a" style="width:180px;height:180px">
                  </lord-icon>
                </a>
              </div>
            </div>
          </section>
        </div>
        <!-- End Section Application -->

        <!-- Section Contact Us -->
        <div class="col-md-12 order-6">
          <section class="contact-us">
            Hubungi Kami
            <hr />
            <div class="card my-3">
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSfcACkyqgiSTD7QrSYHBXxg47xwenTZfi7ofACM598Kjg8Jzw/viewform?usp=pp_url" target="_blank" rel="noopener">
                <img src="https://peppd.bappenas.go.id/media/assets/images/img/Contact-Centre-02.png" class="card-img-top" alt="Aplikasi Penilaian PPD" />
                <div class="card-body">
                  <p class="card-text text-center">HUBUNGI KAMI</p>
                </div>
              </a>
            </div>
          </section>
        </div>
        <!-- End Section Contact Us -->

        <!-- Section career -->
        <!-- <div class="col-md-12 order-7">
            <section class="career">
              Karir
              <hr />
              <div class="row" style="display: flex; justify-content: center;">
                <div class="card" style="width: 22vw;">
                  <a href="https://peppd.bappenas.go.id/media/karir" target="_blank" rel="noopener">
                    <img
                      src="https://peppd.bappenas.go.id/media/assets/images/img/carousel/career1.png"
                      class="card-img-top"
                      alt="Rekrutmen Tenagan Pendukung Analis Ekonomi"
                    />
                  </a>
                  <div class="card-body m-0 p-3">
                    <hr>
                    <a type="button" href="https://peppd.bappenas.go.id/media/assets/images/img/carousel/career1.png" class="btn-download-publication m-0" download="Lowongan_Kerja_Tenagan_Pendukung_Analis_Ekonomi_Bappenas.png"><i class="fa fa-arrow-circle-down"></i> Unduh Brosur</a>
                  </div>
                </div>
              </div>
            </section>
          </div> -->
        <!-- End Section Career -->

      </div>
    </div>
  </div>
</div>

<div class="mobile">
  <div class="container-fluid" style="width: 90%; margin-top: 7rem">
    <div class="row">
      <!-- Section Carousel-->
      <div class="col-md-12 order-1">
        <section class="carousel">
          <div id="carouselExampleIndicators" class="carousel slide img-thumbnail" data-ride="carousel" style="border-radius: 0">
            <ol class="carousel-indicators" style="justify-content: left; margin-left: 5%;">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                          </ol>
            <div class="carousel-inner">
                              <div class="carousel-item active">
                  <!-- <img
                      class="d-block w-100"
                      src="https://peppd.bappenas.go.id/media/assets/images/img/carousel/carousel_1_1min.png"
                      alt="First slide"
                    /> -->
                  <a class="btn-read-more-article" data-id="50" href="https://peppd.bappenas.go.id/media/news/Bappenas-Gelar-Diskusi-Sistem-Informasi-Keuangan-Daerah--Untuk-Pengayaan-Analisis-Evaluasi-Kinerja-Pembangunan-Daerah-2023" target="_blank" rel="noopener">
                    <img class="d-block w-100" style="height: 45vw;" src="https://peppd.bappenas.go.id/media/assets/images/summernote/title_picture_23052023_0336dcbab05b9d5ad24f4333c7658a0e.png" alt="0 slide" />
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7); right: 0!important; left: 0!important; bottom: 0!important; padding: 1% 5% 3% 5%; text-align: left;">
                      <!-- <h5><mark>Bappenas Gelar Diskusi Sistem Informasi Keuangan Daerah  Untuk Pengayaan Analisis Evaluasi Kinerja Pembangunan Daerah 2023</mark></h5> -->
                      <p class="animate__animated animate__fadeInLeft"><strong>
                          Bappenas Gelar Diskusi Sistem Informasi Keuangan Daerah  Untuk Pengayaan Analisis Evaluasi Kinerja Pembangunan Daerah 2023                        </strong></p>
                    </div>
                  </a>
                </div>
                              <div class="carousel-item ">
                  <!-- <img
                      class="d-block w-100"
                      src="https://peppd.bappenas.go.id/media/assets/images/img/carousel/carousel_1_1min.png"
                      alt="First slide"
                    /> -->
                  <a class="btn-read-more-article" data-id="63" href="https://peppd.bappenas.go.id/media/news/Kementerian-PPNBappenas-Terima-Kunjungan-Kerja-Pimpinan-DPRD-Kota-Probolinggo-Bahas-Pengawasan-Eksternal-Pelayanan-Publik-di-Daerah" target="_blank" rel="noopener">
                    <img class="d-block w-100" style="height: 45vw;" src="https://peppd.bappenas.go.id/media/assets/images/summernote/title_picture_23122024_8f85517967795eeef66c225f7883bdcb.jpg" alt="1 slide" />
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7); right: 0!important; left: 0!important; bottom: 0!important; padding: 1% 5% 3% 5%; text-align: left;">
                      <!-- <h5><mark>Kementerian PPN/Bappenas Terima Kunjungan Kerja Pimpinan DPRD Kota Probolinggo Bahas Pengawasan Eksternal Pelayanan Publik di Daerah</mark></h5> -->
                      <p class="animate__animated animate__fadeInLeft"><strong>
                          Kementerian PPN/Bappenas Terima Kunjungan Kerja Pimpinan DPRD Kota Probolinggo Bahas Pengawasan Eksternal Pelayanan Publik di Daerah                        </strong></p>
                    </div>
                  </a>
                </div>
                              <div class="carousel-item ">
                  <!-- <img
                      class="d-block w-100"
                      src="https://peppd.bappenas.go.id/media/assets/images/img/carousel/carousel_1_1min.png"
                      alt="First slide"
                    /> -->
                  <a class="btn-read-more-article" data-id="60" href="https://peppd.bappenas.go.id/media/news/Kemeriahan-Penyerahan-Piala-Penghargaan-Pembangunan-Daerah-PPD-oleh-Presiden-RI-dan-Expo-PPD-2024-dalam-Musrenbangnas-2024" target="_blank" rel="noopener">
                    <img class="d-block w-100" style="height: 45vw;" src="https://peppd.bappenas.go.id/media/assets/images/summernote/title_picture_28052024_c45147dee729311ef5b5c3003946c48f.jpg" alt="2 slide" />
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7); right: 0!important; left: 0!important; bottom: 0!important; padding: 1% 5% 3% 5%; text-align: left;">
                      <!-- <h5><mark>Kemeriahan Penyerahan Piala Penghargaan Pembangunan Daerah (PPD) oleh Presiden RI dan Expo PPD 2024 dalam Musrenbangnas 2024</mark></h5> -->
                      <p class="animate__animated animate__fadeInLeft"><strong>
                          Kemeriahan Penyerahan Piala Penghargaan Pembangunan Daerah (PPD) oleh Presiden RI dan Expo PPD 2024 dalam Musrenbangnas 2024                        </strong></p>
                    </div>
                  </a>
                </div>
                            <!-- <div class="carousel-item">
                    <a href="https://peppd.bappenas.go.id/media/karir" target="_blank" rel="noopener">
                    <img
                      class="d-block w-100"
                      style="height: 45vw;"
                      src="https://peppd.bappenas.go.id/media/assets/images/img/carousel/career.png"
                      alt="Career slide"
                    />
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7); right: 0!important; left: 0!important; bottom: 0!important; padding: 1% 5% 3% 5%; text-align: left;">
                      <p class="animate__animated animate__fadeInLeft"><strong>Rekrutmen Tenaga Pendukung Analis Ekonomi</strong></p>
                    </div>
                    </a>
                  </div> -->
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
      </div>
      <!-- End Section Carousel -->

      <!-- Section News -->
      <div class="col-md-12 order-4">
        <section class="news">
          <a href="https://peppd.bappenas.go.id/media/news" style="color: black;">
            Berita
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </a>
          <hr />
          <div class="list_article"></div>
          <div align="right" class="pagination_link"></div>
        </section>
      </div>
      <!-- End Section News -->

      <div class="col-md-12 order-3">
        <section class="card-infografis">
          <a href="https://peppd.bappenas.go.id/media/infograph" target="_blank" style="color: black;">
            Infografis
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </a>
          <hr />
          <div class="owl-carousel owl-theme">
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Pertumbuhan Ekonomi                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/pertumbuhan_ekonomi.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-00:
                            </b>
                            5.05                           </p>
                                                                                    <h6><span class="badge badge-warning mx-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.26 "></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-00:
                            </b>
                            5.31                           </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('c0c4ced21fb1b7d8db760d3811d427234378e81e54c42904a8264aab484070165cb2ecbf0a284c448f6227898a89ec4f13171a27d32ba1089b844ccbe0f251fd5AMsYIE04u/JUcjOKTSdFAf7/szb4QNHT4s52phqJ7Kpv3izRnUWiI356e2OY/uW',  'e76929129bccc2a09081dbb06d1647f1c3cf34780b73c6cba352f4f831cb8a6b8b0aade68b4c98638c81ab0b04ea43ddf2ab20e695b4435a4384e730d8cb76fboj6xAUBzJrrAdaQXF7NtZXXTjXsy/t5DJ5kRLlWi2Qo=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        PDRB per Kapita ADHB                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/pdrb_per_kapita_adhb.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-00:
                            </b>
                            74,964,700.00 Rp                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 3,921,260.00 Rp"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-00:
                            </b>
                            71,043,440.00 Rp                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('a81eb32fc927447ba554812e86cbdb8be254a93766537a34a7c1425509779201b4bc7cd8b3e2cc60295fda81e1c8e6979fea926beb3ad9908fab4b6e4a5001d88vOY/gmOdZqnd4Wud//hn0uoteqfeLSwBmaUB2Qx2oGJsYww8nKHIH39xAjncrcx',  '175991e80681f55769bc0612e9e0a89801b75899a90f994b8f47af0d3b9641dc2617d4ab166a4e2dc46be877476973c6f53766ec8ef41ddf48ed2c8d36a7a5f8TqlaITpBoh20qUxY3uTwHkERbReEAwoCzJMm+hvahCs=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        PDRB per Kapita ADHK Tahun Dasar 2010                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/pdrb_per_kapita_adhk_tahun_dasar_2010.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-00:
                            </b>
                            44,139,080.00 Rp                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 1,667,540.00 Rp"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-00:
                            </b>
                            42,471,540.00 Rp                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('3f83eb4b1ce438c1f9ba294e3b63df1ed3b52168e7458b1cfbcaa32f2ce6f88778edec5b32bf749a6da3334c4b4ac9c0d7a55f07a4eb781783e6fdea09111dc1ySoavmN7kIxpebteopCN/hid/r/b0wqHPG7tU7uAWRHFt0NUJdZ0DbDnrIHgsJ0aBPaqeGZw/Tg9Xjq6Cib5Yg==',  '1155f41f49808839845d476a830a819f46ba79def8fc3652ccf836d3ea92680fd991bf0737ace9b81b8c80bf82bfd4d24f4929d2f54451336b29493e6483d689VdkmLKfr12oPbtT/USsA46IwRUeWjytva8ikaMp7H8M=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Jumlah Penganggur                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/jumlah_penganggur.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-02:
                            </b>
                            7,989,275.00 Orang                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 436,656.00 Orang"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-08:
                            </b>
                            8,425,931.00 Orang                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('515f3abbcac8c7df06c3e9992cb671a23a79ea6001428f9a79c8012b250ca912695a3140fbce5dda998dbbda7adf0a93af47e72e6b6245338cb2906f66332775IZzv2w2GLSvri8/K250PNICXa8I/eRlW3cfT8XTtC8V+B5iKZU8CdLzZ5K/Ohwdk',  '383bd44363a28397244ebbf4780d7be4b570e16c40ff24e42b92fe338e22b8324a067daa69cdc098ca47a786b602936c992311222fc3355e54985569a07e5c32jsm7SBkKGj321/c9hWKKolAA2MNkcoCM7ORFSPgrVo8=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Indeks Pembangunan Manusia                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/indeks_pembangunan_manusia.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-00:
                            </b>
                            74.39                           </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 0.62 "></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-00:
                            </b>
                            73.77                           </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('f35f108b40e02c7653bb34172928c5136ffa8bd1a1800098567cf64dbc87b3c5f63bb78ce08884cdf0b43e52a5b702340b975f8858d15ba544948a1f43508cf9pibq1UXPEzQAeo8AKl4djqE1roDtJ6SrDpvnsV0HqM8kh3pNoVSCQPBmnJ55AJRU',  '373c3c0f660303dc47a6db1f0d64b1d4aa62e7ffde8ade6faf15d611e4f8eb1fa1261021a77cc96e9fbe748b90fdf9e0208c4d94e23cf0cf09ae68bdbc0728e6mbMp/pveiVhRqwS4e9HhuA3uFm1+zNZos9gcj5W65TY=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Tingkat Pengangguran Terbuka                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/tingkat_pengangguran_terbuka.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2024-02:
                            </b>
                            4.82 %                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.50 %"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2023-08:
                            </b>
                            5.32 %                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('d979f61349b30ec4218e793e084ecdd7a24a46335526f00a6404c4295c1948cef449cc5d395462e49843d3e10223cf7afe523d8e7b39cc804f47c3d0280c482bBdFpD8fkVUiUrYH8GVKlmVTLtYYXgH+JdJzcUrSo0Logosxo0tU2aQ30tVVf5HyK',  '7fa320de1dcc13317e42156739f8be384bed3e38b0099a112d85c9d4895921c5b701b41fae0a751af4d76f1f63019b3840315bef29296a9c61702bb89ab883815/GvOEzASNvsxGDSRRX5nU6NXGGmcM+tsD8HOnxnU1c=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Gini Rasio                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/gini_rasio.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2024-03:
                            </b>
                            0.38                           </p>
                                                                                    <h6><span class="badge badge-warning mx-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.01 "></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2023-03:
                            </b>
                            0.39                           </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('1fed993b284cf5515349a512c7ee4ec3a41be6a0af9504fabe3153f1c593ca54c4e4c98ffa620b72c888ab5b52f6bce10bf2f1553ac670f598434673d2dbb46e/muPakuTcm6R138YKqxTMPy1GE3tkb55+GCXx7/IovM=',  '21711df2800391104f543551e70e70a665f1b2be98619d3c2523bf101304c3ba7131647b58596f888f0afc3f40800d1dcc2ecd57a0e6ea729d9f28641d2c2881E69ABBsB/6jWKVWMwkAo2S9M1S/F1/wMffVSqFJnE7o=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Angka Harapan Hidup                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/angka_harapan_hidup.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-00:
                            </b>
                            73.93 Tahun                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 1.01 Tahun"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-00:
                            </b>
                            72.92 Tahun                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('3dbd79c86d62c79ad697db3de619bb914cd1b15040c47eabdeb19e4bab5d2bcf49038fd97f35a837a2924db1a1b36ff490f4cd9ca1d9fa0a42dd1a7174309d48z8FGIx0tCuTsj1oBS4cYguj4A1AJU126hwE7vBC0Q1w4OyKv1pL9Z3pQrbIMBAnN',  '691b127b2d639bf49a2b0a269d3b3b3d75095259813573a75f8b16e13b90ab075ffc61b52991dd954ac2d8fb9ba9e1ad029adb3bdf67d6a5eab94e4c84fce171IL2f7wwzwsmVsYSvhUJViu2C/VMwLTpDYkWDDhvhw3Q=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Rata-rata Lama Sekolah                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/rata-rata_lama_sekolah.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-00:
                            </b>
                            8.77 Tahun                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 0.08 Tahun"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-00:
                            </b>
                            8.69 Tahun                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('c169a10253ea691f52a9ae3c4fc09cf8b3aa86f374109344d1b2effe014bd6c837348fb6813c9aadddc3fea8f0b8215c4c1daaa7be0de10b6b2c669e3fa677f9KBBsyG1stiT0BBEGcD6Yi2MCsItdx3Bf5Qinh+8OCtW/P28SZ7o4+fil0OFYISZ5',  '9755c98f9bb04b516d9ebdf6628b83a35c5cbde919505bd9c9558cfcfff7df52c968baa6ea29afbd7cfbdd197d4d09b20914c688d343aea5beb6de9e948481a4dtGt+2LQXF0TI7P02sI5NomMole63atnBOzP4i1mTEM=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Harapan Lama Sekolah                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/harapan_lama_sekolah.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-00:
                            </b>
                            13.15 Tahun                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 0.05 Tahun"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-00:
                            </b>
                            13.10 Tahun                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('71dba7cc4819cc1c3acc3e44b3c8b1dd2a1dbac3c4e4906313be446f68ac92c0c6e9e898d352ee402036851cddb27f211b7b21323aa163f7e91ef51b4526d087bJtxT0htxMAObFqKnui68NQUrk7RuoeVNuMvm8ZE0pFX7fQe5wHKTEe59qHd9jkD',  'd07e3006ddc7c259b00661b248f84a9c29b735e6f77e808a18343f3d94f4d6b8e01c0a029d3a6f20259cd9bf19bd9028856e27d6488b4a887a83523d869bcc83tA9DY2FSsd3MCGfLGyDDP4Plh9WXnI/2E8VS19KwfAk=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Pengeluaran per Kapita                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/pengeluaran_per_kapita.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-00:
                            </b>
                            11,899,000.00 Rp                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-up" aria-hidden="true" title="Naik 420,000.00 Rp"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-00:
                            </b>
                            11,479,000.00 Rp                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('95873d4a59b9fee88faab9b736ff96a71886b4774b34642e2b496d1a5e57a5b2970ca0452ef509e402e845880e1841ac379b22838042bd845b692566598585715OQBWk0sgeaRJZ4bO7DlNkupqXYQ4yfuSBDEjhkRrlZyzpB4EoW2gTL7ZilohxlZ',  '88d2b0756ac3609b38087f8c71b77cce8a2468b22e7099ed395faa8a96b2672e4bef86c3b17c3bc7387f247b071fa827e410b7af396ecf2a7c62eee1d9ce9c23pelxq/BdBHytFwz48KWzqcp/hvQDZecDw8alYhOmEiI=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Tingkat Kemiskinan                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/tingkat_kemiskinan.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2024-03:
                            </b>
                            9.03 %                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.33 %"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2023-03:
                            </b>
                            9.36 %                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('16679c7328380cae0d591aad82d7705b77470f828e525a53d674afab13447f57d751747e3dbd777a0c84c5333d97aa46d7701c8835145acaca44c5d04a4850b4KJ8OCip/1WHHEQb3LnKPuNZ7qCdTRvdY/4g9QeruG2D/VftnVzqjfo/8IJ0YAd/7',  '91490f36491421e5f9ff68ee01e7965f85b5a04fa72450fb8fdd3004331336f7309347dc2df669002cd64213e06e4593ae0b99389be54cf42afec6e2739488fcrC2WUb/WLqtgQCR2Fa1opOzq3btiqCKT21SxGpjalqM=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Indeks Kedalaman Kemiskinan                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/indeks_kedalaman_kemiskinan.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2024-03:
                            </b>
                            1.46 %                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 0.07 %"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2023-03:
                            </b>
                            1.53 %                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('ef4ef1278885c06450b036141944a3352e7366e5dcdb6ae9a4f8e9f7962198f2492d0369e2277d26cac40e153500ef63aeb21d9fc44314f0194d8c63a3cc41e8hdtitbMW3829++Aak5i4p3YdT48S0Awcd/Uyg0FsgmHy+gah176pc3baLG4n+uQs',  '01a59bf06308b95645ef07a6fc6173e42c99f949736be639a3656f0cef0c4ca830ff5192d872dfd1cd31e34bb2ca77b235f2c66b1c0b9d0565bf1bd184572c73/v3mcG87gI2SZzB8dn/lujFZXumSb6FRsQG5ohXjJ7g=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                          <div class="item">
                <div class="card card-infograph">
                  <div class="card-header">
                    <p class="card-title infograph-title-text"><b>
                        Jumlah Penduduk Miskin                      </b></p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <img class="w-100" src="https://peppd.bappenas.go.id/media/assets/images/img/icon/jumlah_penduduk_miskin.png">
                      </div>
                      <div class="col-8">
                        <div class="infograph-body-text">
                          <p><b>
                              2023-03:
                            </b>
                            25,898,550.00 Orang                          </p>
                                                                                    <h6><span class="badge badge-success mx-2"><i class="fa fa-arrow-down" aria-hidden="true" title="Turun 464,720.00 Orang"></i></span>
                              </h6>
                                                                              </div>
                        <div class="infograph-body-text">
                          <p><b>
                              2022-09:
                            </b>
                            26,363,270.00 Orang                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="button-detail-infograph" onclick="openDetailPage('25e4a19eb9e375949acc64713d0e93ff064926e76c4f336fa52fe0b4c787cccb524e69536086c7007fdeff6cded88e458702354b534bf715f27af50983579d49LTuDtvZ5JI96i9Cl3hamz2E4dHayxtwQKoOQDhNGdziW5xtm4vgXrrDu558QA659',  '86ab9ac00d7466b068afdd174f680e907465b3510194c12cbde0caea06b38cb3b74cf1a68cb09df44447b3a3bdb6a6f84b5511e91c5b515c78812ecaf8bc71b9BFcqvJ2FWY9fYWKPkY3MldU5ecSL9zMTHgHshA74oEc=)'">
                      Detail <i class="fa fa-caret-right"></i>
                    </button>
                  </div>
                </div>
              </div>
                      </div>
        </section>
      </div>

      <!-- Section Publication -->
      <div class="col-md-12 order-5">
        <section class="publication">
          <a href="https://peppd.bappenas.go.id/media/publication" style="color: black">
            Publikasi
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </a>
          <hr />
          <div class="row">
                          <div class="my-2 mx-2">

                <div class="card img-publication-box" style="max-width:fit-content;" title="Laporan Akhir Kegiatan Tahun 2024: Evaluasi Pembangunan Daerah">
                  <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah/23012025_Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah_9766527f2b5d3e95d4a733fcfb77bd7e.png" alt="Laporan Akhir Kegiatan Tahun 2024: Evaluasi Pembangunan Daerah">
                  <div class="card-body p-2">
                    <p class="card-text" style="text-overflow: ellipsis; text-wrap: nowrap;">
                      <!-- Laporan Akhir Kegiatan Tahun ... -->
                      Laporan Akhir Kegiatan Tahun 2024: Evaluasi Pembangunan Daerah                    </p>
                  </div>
                                                <a href="https://peppd.bappenas.go.id/media/file_publication/Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah/23012025_Laporan-Akhir-Kegiatan-Tahun-2024:-Evaluasi-Pembangunan-Daerah_9766527f2b5d3e95d4a733fcfb77bd7e.pdf" data-id="188" target="_blank" rel="noopener" class="d-flex justify-content-center btn-read-publication">
                                                            <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                              <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                              </lord-icon>
                              </a>
                </div>

              </div>
                          <div class="my-2 mx-2">

                <div class="card img-publication-box" style="max-width:fit-content;" title="Success Story Pengawasan Pelayanan Publik">
                  <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Success-Story-Pengawasan-Pelayanan-Publik/03092024_Success-Story-Pengawasan-Pelayanan-Publik_7f6ffaa6bb0b408017b62254211691b5.png" alt="Success Story Pengawasan Pelayanan Publik">
                  <div class="card-body p-2">
                    <p class="card-text" style="text-overflow: ellipsis; text-wrap: nowrap;">
                      <!-- Success Story Pengawasan Pela... -->
                      Success Story Pengawasan Pelayanan Publik                    </p>
                  </div>
                                      <!-- <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script> -->
                    <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                    <a class="d-flex justify-content-center btn-read-publication" data-id="112" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/eagp/" data-width="900" data-height="500" data-title="Success Story Pengawasan Pelayanan Publik">
                                                  <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                              <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                              </lord-icon>
                              </a>
                </div>

              </div>
                          <div class="my-2 mx-2">

                <div class="card img-publication-box" style="max-width:fit-content;" title="Knowledge Sharing Pembangunan Daerah 2019 - 2020">
                  <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Knowledge-Sharing-Pembangunan-Daerah-2019---2020/30112021_Knowledge-Sharing-Pembangunan-Daerah-2019---2020_76dc611d6ebaafc66cc0879c71b5db5c.png" alt="Knowledge Sharing Pembangunan Daerah 2019 - 2020">
                  <div class="card-body p-2">
                    <p class="card-text" style="text-overflow: ellipsis; text-wrap: nowrap;">
                      <!-- Knowledge Sharing Pembangunan... -->
                      Knowledge Sharing Pembangunan Daerah 2019 - 2020                    </p>
                  </div>
                                              <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                            <a class="d-flex justify-content-center btn-read-publication" data-id="6" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/kvbv/" data-width="900" data-height="500" data-title="Knowledge Sharing Pembangunan Daerah 2019 - 2020">
                                                          <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                              <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                              </lord-icon>
                              </a>
                </div>

              </div>
                          <div class="my-2 mx-2">

                <div class="card img-publication-box" style="max-width:fit-content;" title="Prosiding Knowledge Sharing 2019">
                  <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Prosiding-Knowledge-Sharing-2019/30082021_Prosiding-Knowledge-Sharing-2019_2b44928ae11fb9384c4cf38708677c48.png" alt="Prosiding Knowledge Sharing 2019">
                  <div class="card-body p-2">
                    <p class="card-text" style="text-overflow: ellipsis; text-wrap: nowrap;">
                      <!-- Prosiding Knowledge Sharing 2019 -->
                      Prosiding Knowledge Sharing 2019                    </p>
                  </div>
                                            <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                          <a class="d-flex justify-content-center btn-read-publication" data-id="5" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/ksbx/" data-width="900" data-height="500" data-title="Prosiding Knowledge Sharing 2019">
                                                        <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                              <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                              </lord-icon>
                              </a>
                </div>

              </div>
                          <div class="my-2 mx-2">

                <div class="card img-publication-box" style="max-width:fit-content;" title="Prosiding Knowledge Sharing 2018">
                  <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Prosiding-Knowledge-Sharing-2018/30082021_Prosiding-Knowledge-Sharing-2018_9b8619251a19057cff70779273e95aa6.png" alt="Prosiding Knowledge Sharing 2018">
                  <div class="card-body p-2">
                    <p class="card-text" style="text-overflow: ellipsis; text-wrap: nowrap;">
                      <!-- Prosiding Knowledge Sharing 2018 -->
                      Prosiding Knowledge Sharing 2018                    </p>
                  </div>
                                          <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                        <a class="d-flex justify-content-center btn-read-publication" data-id="4" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/qrsg/" data-width="900" data-height="500" data-title="Prosiding Knowledge Sharing 2018">
                                                      <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                              <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                              </lord-icon>
                              </a>
                </div>

              </div>
                          <div class="my-2 mx-2">

                <div class="card img-publication-box" style="max-width:fit-content;" title="Knowledge Sharing Pembangunan Daerah 2018">
                  <img class="card-img-top img-publication p-1" src="https://peppd.bappenas.go.id/media/assets/file_publication/Knowledge-Sharing-Pembangunan-Daerah-2018/21062021_Sharing-Knowledge-2020_07e1cd7dca89a1678042477183b7ac3f.png" alt="Knowledge Sharing Pembangunan Daerah 2018">
                  <div class="card-body p-2">
                    <p class="card-text" style="text-overflow: ellipsis; text-wrap: nowrap;">
                      <!-- Knowledge Sharing Pembangunan... -->
                      Knowledge Sharing Pembangunan Daerah 2018                    </p>
                  </div>
                                        <script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
                      <a class="d-flex justify-content-center btn-read-publication" data-id="3" data-rel="fh5-light-box-demo" data-href="https://online.fliphtml5.com/dmeid/ghjy/" data-width="900" data-height="500" data-title="Knowledge Sharing Pembangunan Daerah 2018">
                                                    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                              <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="morph" colors="primary:#000000,secondary:#000000" style="width:250px;height:250px">
                              </lord-icon>
                              </a>
                </div>

              </div>
                      </div>
        </section>
      </div>
      <!-- End Section Publication -->

      <!-- Section Activity -->
      <div class="col-md-12 order-2">
        <section class="activity">
          Kegiatan
          <hr />
          <div class="row">
            <div class="col-6 col-md-3 col-lg-6 my-2 rounded-3">
              <a href="https://peppd.bappenas.go.id/media/kegiatan/penghargaan" style="text-decoration: none;">
                <div class="card card-activity">
                  <div class="card-body">
                    <div class="box-img-activity col d-flex justify-content-center">
                      <img class="img-fluid mb-3 w-50" src="https://peppd.bappenas.go.id/media/assets/images/img/logo-kegiatan/ppd-min.png" alt="card image" />
                    </div>
                    <p class="card-text text-center text-activity">
                      PENGHARGAAN PEMBANGUNAN DAERAH
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <!-- <div class="col-6 col-md-3 col-lg-6 my-2 rounded-3">
              <a href="https://peppd.bappenas.go.id/media/kegiatan/pemantauan" style="text-decoration: none;">
                <div class="card card-activity">
                  <div class="card-body">
                    <div class="box-img-activity col d-flex justify-content-center">
                      <img class="img-fluid mb-3 w-50" src="https://peppd.bappenas.go.id/media/assets/images/img/logo-kegiatan/pemantauan-min.png" alt="card image" />
                    </div>
                    <p class="card-text text-center text-activity">
                      PEMANTAUAN PEMBANGUNAN DAERAH
                    </p>
                  </div>
                </div>
              </a>
            </div> -->
            <div class="col-6 col-md-3 col-lg-6 my-2 rounded-3">
              <a href="https://peppd.bappenas.go.id/media/kegiatan/evaluasi" style="text-decoration: none;">
                <div class="card card-activity">
                  <div class="card-body">
                    <div class="box-img-activity col d-flex justify-content-center">
                      <img class="img-fluid mb-3 w-50" src="https://peppd.bappenas.go.id/media/assets/images/img/logo-kegiatan/epd-min.png" alt="card image" />
                    </div>
                    <p class="card-text text-center text-activity">
                      EVALUASI PEMBANGUNAN DAERAH
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 my-2 rounded-3">
              <a href="https://peppd.bappenas.go.id/media/kegiatan/koordinasi" style="text-decoration: none;">
                <div class="card card-activity">
                  <div class="card-body">
                    <div class="box-img-activity col d-flex justify-content-center">
                      <img class="img-fluid mb-3 w-50" src="https://peppd.bappenas.go.id/media/assets/images/img/logo-kegiatan/koordinasi_pembangunan-min.png" alt="card image" />
                    </div>
                    <p class="card-text text-center text-activity">
                      KOORDINASI PEMBANGUNAN
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </section>
      </div>
      <!-- End Section Activity -->



      <!-- Section Application -->
      <div class="col-md-12 order-6">
        <section class="application">
          Aplikasi
          <hr />
          <div class="card card-application my-3">
            <div class="img-application">
              <img src="https://peppd.bappenas.go.id/media/assets/images/img/penilaian_ppd.png" class="card-img-top" alt="Aplikasi Penilaian PPD" />
              <div class="card-body">
                <p class="card-text text-center">LOGIN SISTEM PENILAIAN PPD</p>
              </div>
              <a href="https://peppd.bappenas.go.id/jumper_ppd/" target="_blank" rel="noopener" class="d-flex justify-content-center">
                <img class="align-self-center" src="https://peppd.bappenas.go.id/media/assets/images/img/External_link_font_awesome.png" alt="Login Sistem Penilaian PPD" height="100" width="100" />
              </a>
            </div>
          </div>
          <div class="card card-application my-3">
            <div class="img-application">
              <img src="https://peppd.bappenas.go.id/media/assets/images/img/aplikasi_pemantauan.png" class="card-img-top" alt="Login Sistem Pemantauan" />
              <div class="card-body">
                <p class="card-text text-center">LOGIN SISTEM PEMANTAUAN</p>
              </div>
              <a href="https://peppd.bappenas.go.id/pemantauan/" target="_blank" rel="noopener" class="d-flex justify-content-center">
                <img class="align-self-center" src="https://peppd.bappenas.go.id/media/assets/images/img/External_link_font_awesome.png" alt="Login Sistem Pemantauan" height="100" width="100" />
              </a>
            </div>
          </div>
        </section>
      </div>
      <!-- End Section Application -->

      <!-- Section Contact Us -->
      <div class="col-md-12 order-7">
        <section class="contact-us">
          Hubungi Kami
          <hr />
          <div class="card my-3">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfcACkyqgiSTD7QrSYHBXxg47xwenTZfi7ofACM598Kjg8Jzw/viewform?usp=pp_url" target="_blank" rel="noopener">
              <img src="https://peppd.bappenas.go.id/media/assets/images/img/Contact-Centre-02.png" class="card-img-top" alt="Aplikasi Penilaian PPD" />
              <div class="card-body">
                <p class="card-text text-center">HUBUNGI KAMI</p>
              </div>
            </a>
          </div>
        </section>
      </div>
      <!-- End Section Contact Us -->

      <!-- Section career -->
      <!-- <div class="col-md-12 order-7">
          <section class="career">
            Karir
            <hr />
            <div class="card my-3">
              <a href="https://peppd.bappenas.go.id/media/karir" target="_blank" rel="noopener">
                <img
                  src="https://peppd.bappenas.go.id/media/assets/images/img/carousel/career1.png"
                  class="card-img-top"
                  alt="Rekrutmen Tenagan Pendukung Analis Ekonomi"
                />
              </a>
              <div class="card-body">
                <hr>
                <a type="button" href="https://peppd.bappenas.go.id/media/assets/images/img/carousel/career1.png" class="btn-download-publication" download="Lowongan_Kerja_Tenagan_Pendukung_Analis_Ekonomi_Bappenas.png"><i class="fa fa-arrow-circle-down"></i> Unduh Brosur</a>
              </div>
            </div>
          </section>
        </div> -->
      <!-- End Section Career -->

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Download <span class="modalNamaDokumen"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formDokumen">
        <div class="modal-body">
          <input type="hidden" class="form-control" id="formId" placeholder="ID" required>
          <div class="form-group">
            <label for="formNama">Nama Lengkap</label>
            <input type="text" class="form-control" id="formNama" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
            <label for="formEmail">Email</label>
            <input type="email" class="form-control" id="formEmail" placeholder="nama@contoh.com" required>
          </div>
          <div class="form-group">
            <label for="formInstansi">Instansi</label>
            <input type="text" class="form-control" id="formInstansi" placeholder="Instansi" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="closeModalBtn" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Unduh</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function openDetailPage(indikator, wilayah) {
    var postData = {
      indikator: indikator,
      wilayah: wilayah
    };

    var form = document.createElement('form');
    form.method = 'POST';
    form.action = 'https://peppd.bappenas.go.id/media/infograph';

    for (var key in postData) {
      if (postData.hasOwnProperty(key)) {
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = key;
        input.value = postData[key];
        form.appendChild(input);
      }
    }
    document.body.appendChild(form);
    form.submit();
  }

  $(document).ready(function() {

    function load_article_data(page) {
      $.ajax({
        url: "https://peppd.bappenas.go.id/media/C_pagesController/article_pagination/" + page,
        method: "GET",
        dataType: "json",
        success: function(data) {
          // console.log(data.pagination_link);
          $('.list_article').html(data.list_article);
          $('.pagination_link').html(data.pagination_link);
        }
      });
    }

    load_article_data(1);

    $(document).on("click", ".pagination li span a", function(event) {
      $(this).append(' <i class="fa fa-spinner fa-spin icon-comment-loading"></i>');
      event.preventDefault();
      var page = $(this).data("ci-pagination-page");
      load_article_data(page);
    })

    $(document).on('click', '.button-detail-infograph', function() {
      var dataId = $(this).attr("data-id");
      var dataLog = "user mengklik info grafis dengan id = " + dataId + " pada halaman home";
      $.ajax({
        type: "POST",
        url: "https://peppd.bappenas.go.id/media/logPortalController/store",
        data: {
          // [csrfName]: csrfHash,
          action: dataLog,
        },
        success: function(result) {
          // console.log(result);
        },
        error: function(result) {
          console.log(result);
        }
      });
    });

    $(document).on('click', '.btn-read-more-article', function() {
      // var csrfName = 'ci_csrf_token';
      // var csrfHash = '';
      var dataId = $(this).attr("data-id");
      var dataLog = "user mengklik article dengan id = " + dataId + " pada halaman home";
      $.ajax({
        type: "POST",
        url: "https://peppd.bappenas.go.id/media/logPortalController/store",
        data: {
          // [csrfName]: csrfHash,
          action: dataLog,
        },
        success: function(result) {
          // console.log(result);
        },
        error: function(result) {
          console.log(result);
        }
      });
    });

    $(document).on('click', '.card-article', function() {
      // var csrfName = 'ci_csrf_token';
      // var csrfHash = '';
      var dataId = $(this).attr("data-id");
      var dataLog = "user mengklik article dengan id = " + dataId + " pada halaman home";
      $.ajax({
        type: "POST",
        url: "https://peppd.bappenas.go.id/media/logPortalController/store",
        data: {
          // [csrfName]: csrfHash,
          action: dataLog,
        },
        success: function(result) {
          // console.log(result);
        },
        error: function(result) {
          console.log(result);
        }
      });
    });
    $(document).on('click', '.btn-download-publication', function() {
      // var csrfName = 'ci_csrf_token';
      // var csrfHash = '';
      var dataId = $(this).attr("data-id");
      var dataLog = "user mengunduh dokumen/file dengan id = " + dataId + " pada halaman home";
      $.ajax({
        type: "POST",
        url: "https://peppd.bappenas.go.id/media/logPortalController/store",
        data: {
          // [csrfName]: csrfHash,
          action: dataLog,
        },
        success: function(result) {
          console.log(result);
        },
        error: function(result) {
          console.log(result);
        }
      });
    });

    $(document).on('click', '.btn-read-publication', function() {
      // var csrfName = 'ci_csrf_token';
      // var csrfHash = '';
      var dataId = $(this).attr("data-id");
      var dataLog = "user menklik dokumen/file dengan id = " + dataId + " pada halaman home";
      $.ajax({
        type: "POST",
        url: "https://peppd.bappenas.go.id/media/logPortalController/store",
        data: {
          // [csrfName]: csrfHash,
          action: dataLog,
        },
        success: function(result) {
          console.log(result);
        },
        error: function(result) {
          console.log(result);
        }
      });
    });


    $(document).on('click', '.btn-download-modal', function() {
      var dataNama = $(this).attr("data-nama");
      var dataId = $(this).attr("data-id");
      $(".modalNamaDokumen").html(dataNama);
      $("#formId").val(dataId);
    });

    $(document).on('submit', '#formDokumen', function(event) {

      event.preventDefault();

      // Optionally, you can get the values from the form fields
      var id = $('#formId').val();
      var namaLengkap = $('#formNama').val();
      var email = $('#formEmail').val();
      var instansi = $('#formInstansi').val();

      // You can now process the data or perform other actions
      // For example, you could send this data via an AJAX request

      $.ajax({
        type: "POST",
        url: "https://peppd.bappenas.go.id/media/logDocDownloadController/store",
        data: {
          nama: namaLengkap,
          email: email,
          instansi: instansi,
          id_dokumen: id,
        },
        success: function(result) {
          var response = JSON.parse(result);
          console.log(response);
          if (response.success) {
            // Reset form and close modal
            $('#formDokumen')[0].reset();
            $('#closeModalBtn').click();

            // Download the file with the desired name
            var downloadLink = response.download_link;
            var fileName = response.file_name;
            var a = document.createElement('a');
            a.href = downloadLink;
            a.download = fileName; // Set the file name for download
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
          } else {
            console.log('Error:', response.error);
          }
        },
        error: function(result) {
          console.log(result);
        }
      });

    });


    // $(document).on('load', '.list_article', function() {
    //   var imageSrc = document
    //     .getElementByClassName('box-img-news')
    //     .style.backgroundImage.replace(/url\((['"])?(.*?)\1\)/gi, '$2')
    //     .split(',')[0];

    //   // I just broke it up on newlines for readability

    //   var image = new Image();
    //   image.src = imageSrc;

    //   image.onload = function() {
    //     var width = image.width,
    //       height = image.height;
    //     alert('width =' + width + ', height = ' + height);
    //   };
    // });

  });
</script><!-- Footer -->
<footer class="text-light text-lg-start mt-4" style="background-color: #1f3984">
  <!-- Grid container -->
  <div class="container-fluid p-4 text-footer" style="width: 70%">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-md-12 col-lg-5">
        <h6 class="text-uppercase">
          DIREKTORAT PEPPD
          <br />KEMENTERIAN PPN/BAPPENAS
        </h6>
        <p>
          Gedung Bappenas Lantai 9 Jl. H.R. Rasuna Said Kuningan, Setiabudi
          Jakarta Selatan 12950
          <br />
          <b>Email : </b><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f2969b86dc8297828296b290938282979c9381dc959ddc9b96">[email&#160;protected]</a>
          <br />
          <!-- <b>Email 2 : </b>ppd@bappenas.go.id -->
          <b>Telp : </b>021-50927413
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-12 col-lg-7 col-footer-2">
        <div class="row row-footer-social-media">
          <ul class="list-unstyled list-inline my-2 text-left">
            <li class="list-inline-item">
              <a href="https://www.bappenas.go.id/id/" target="_blank" rel="noopener" class="text-light">BAPPENAS RI</a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.youtube.com/channel/UCj4_ZZiINMVsvIFh7U76LFg" target="_blank" rel="noopener" class="text-light">
                <i class="fa fa-youtube" aria-hidden="true"></i>
                YOUTUBE
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/dit.peppdbappenas/?igshid=70wk1y0qlcm4" target="_blank" rel="noopener" class="text-light">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                INSTAGRAM
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    PEPPD © 2021 -
    2025 Copyright
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
  const base_url = "https://peppd.bappenas.go.id/media/";
</script>

<script src="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/intro.min.js"></script>
<!-- <script src="https://peppd.bappenas.go.id/media/assets/plugins/owlcarousel2/docs/assets/vendors/jquery-3.7.1.min.js"></script> -->
<script src="https://peppd.bappenas.go.id/media/assets/plugins/owlcarousel2/docs/assets/owlcarousel/owl.carousel.js"></script>


<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>


<script>
  const indonesiaJson = base_url + 'assets/indonesia.json'
</script>
<script src=""></script>
<script>
  (async () => {

    const topology = await fetch(
      indonesiaJson
    ).then(response => response.json());

    // Prepare demo data. The data is joined to map using value of 'hc-key'
    // property by default. See API docs for 'joinBy' for more info on linking
    // data and map.
    const data = [
      ['id-9999', ],
      ['id-1100', ],
      ['id-1200', ],
      ['id-1300', ],
      ['id-1400', ],
      ['id-1500', ],
      ['id-1600', ],
      ['id-1700', ],
      ['id-1800', ],
      ['id-1900', ],
      ['id-2100', ],
      ['id-3100', ],
      ['id-3200', ],
      ['id-3300', ],
      ['id-3400', ],
      ['id-3500', ],
      ['id-3600', ],
      ['id-5100', ],
      ['id-5200', ],
      ['id-5300', ],
      ['id-6100', ],
      ['id-6200', ],
      ['id-6300', ],
      ['id-6400', ],
      ['id-6500', ],
      ['id-7100', ],
      ['id-7200', ],
      ['id-7300', ],
      ['id-7400', ],
      ['id-7500', ],
      ['id-7600', ],
      ['id-8100', ],
      ['id-8200', ],
      ['id-9100', ],
      ['id-9400', ]
    ];

    // Create the chart
    Highcharts.mapChart('container', {
      chart: {
        map: topology
      },

      title: {
        text: ''
      },

      subtitle: {
        text: ''
      },

      mapNavigation: {
        enabled: true,
        buttonOptions: {
          verticalAlign: 'bottom'
        }
      },

      colorAxis: {
        min: 0
      },
      legend: {
        enabled: false // Disable the legend
      },

      series: [{
        data: data,
        name: 'Random data',
        states: {
          hover: {
            color: '#BADA55'
          }
        },
        dataLabels: {
          enabled: false,
          format: '{point.name}'
        }
      }]
    });

  })();
</script>

<script>
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    dots: false,
    margin: 10,
    responsiveClass: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
        loop: true
      },
      600: {
        items: 2,
        loop: true
      },
      1000: {
        items: 3,
        loop: true
      }
    },
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true

  });
  $('.play').on('click', function() {
    owl.trigger('play.owl.autoplay', [1000])
  })
  $('.stop').on('click', function() {
    owl.trigger('stop.owl.autoplay')
  })
</script>
<script>
  $(window).resize(function() {
    if ($(window).width() >= 992) {
      $(".dekstop-screen-lg-8").addClass("col-lg-8");
      $(".dekstop-screen-lg-4").addClass("col-lg-4");
    } else {
      $(".dekstop-screen-lg-8").removeClass("col-lg-8");
      $(".dekstop-screen-lg-4").removeClass("col-lg-4");
    }
  });
</script>


<script>
  window.addEventListener("scroll", (event) => {
    let scrollY = this.scrollY;
    console.log(scrollY);
    if (scrollY >= 860) {
      // console.log("sticky");
      // $("#search-box").css({
      //   "position": "sticky",
      //   "top": "0";
      // });
      document.getElementById("search-box").style.position = "sticky";
      document.getElementById("search-box").style.top = "115px";
      document.getElementById("search-box").style.marginRight = "0";
    } else {
      document.getElementById("search-box").style.position = "fixed";
      document.getElementById("search-box").style.width = "auto";
      document.getElementById("search-box").style.top = "100px";
      document.getElementById("search-box").style.marginRight = "78px";
    }
  });

  // $(document).ready(function() {
  //   $('a[href="https://peppd.bappenas.go.id/media/assets/file_publication/Laporan-EKPD-2023---Provinsi-Papua/26082024_Laporan-EKPD-2023---Provinsi-Papua_0777d5c17d4066b82ab86dff8a46af6f.pdf"]').click(function(event) {
  //     event.preventDefault(); // Menghentikan aksi default (pembukaan link)
  //     window.location.href = 'https://peppd.bappenas.go.id/media/'; // Mengarahkan ke URL baru
  //   });
  // });
</script>
</body>

</html>
