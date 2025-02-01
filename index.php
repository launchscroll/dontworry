<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>Beranda</title>
    <style>
        .text-white {
            color: #000;
        }

        .text-red {
            color: #D24545;
        }

        .text-black {
            color: #000;
        }

        .bg-red {
            background-color: #D24545;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light navbar-light" style="background-color: #fff !important;">
    <div class="container">
        <a class="navbar-brand text-black" href="/">
            <img height="40px" src="https://penerimaan.idu.ac.id/img/logo.png" alt="">
            PMB UNHAN RI
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-black" href="/">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-black" href="#" id="DropdownProdi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Prodi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="DropdownProdi">
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/prodi/vokasi">Vokasi</a></li>
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/prodi/sarjana">Sarjana</a></li>
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/prodi/magister">Magister</a></li>
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/prodi/doktor">Doktor</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-black" href="#" id="DropdownPersyaratan" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Persyaratan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="DropdownPersyaratan">
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/persyaratan/vokasi">Vokasi</a></li>
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/persyaratan/sarjana">Sarjana</a></li>
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/persyaratan/magister">Magister</a></li>
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/persyaratan/doktor">Doktor</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-black" href="#" id="DropdownJadwal" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Jadwal
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="DropdownJadwal">
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/jadwal/vokasi">Vokasi</a></li>
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/jadwal/sarjana">Sarjana</a></li>
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/jadwal/magister">Magister</a></li>
                        <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/jadwal/doktor">Doktor</a></li>
                    </ul>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link text-black" href="https://penerimaan.idu.ac.id/petunjuk">Petunjuk Pendaftaran</a>
                </li> -->

                                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hai, AURORA RUTH PRATICIA SAGALA                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/beranda">Beranda</a></li>
                            <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/changepassword">Ubah Password</a></li>
                            <li><a class="dropdown-item" href="https://penerimaan.idu.ac.id/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                            </ul>
        </div>
    </div>
</nav>
    <div class="container">
		<!-- Heading Row -->
	<div class="row align-items-center my-3">
		<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<!-- <div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/11.jpg" class="d-block w-100" alt="...">
				</div> -->

				<div class="carousel-item active" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/4.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/s1-20251.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/s1-20252.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/s1-20253.jpg" class="d-block w-100" alt="...">
				</div>

				<!-- <div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/5.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/6.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/7.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/8.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/9.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/3.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="3000">
					<img src="https://penerimaan.idu.ac.id/img/sliders/10.jpg" class="d-block w-100" alt="...">
				</div> -->
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

	</div>
	<!-- /.row -->

	<div class="row">
		<div class="col-lg-7">
			<div class="alert text-white bg-red" role="alert">
				<h4 class="alert-heading">PENGUMUMAN</h4>
			</div>
			<div class="row">
															<h4>PENDAFTARAN CALON MAHASISWA BARU PROGRAM SARJANA (S-1) UNIVERSITAS PERTAHANAN RI TA. 2025/2026</h4>
						<div class="small text-info">Admin, 2025-01-13 22:29:42</div>
						<p><p>Pendaftaran Calon Mahasiswa Baru Universitas Pertahanan RI Khusus Program Sarjana (S-1) Dibuka pada Tanggal 1-28 Februari 2025</p></p>
										<div class="d-flex align-items-center">
						
<nav aria-label="Page navigation">
    <ul class="pagination">
        
                    <li class="page-item active">
                <a class="page-link" href="https://penerimaan.idu.ac.id/?page_pengumuman=1">
                    1                </a>
            </li>
        
            </ul>
</nav>					</div>
							</div>
		</div>
		<div class="col-lg-5">
			<div class="alert text-white bg-red" role="alert">
				<h4 class="alert-heading">INFORMASI</h4>
			</div>
			<div class="row mb-3">
				<h2 class="font-weight-light">Penerimaan Mahasiswa Baru</h2>
				<p>Universitas Pertahanan RI memberikan beasiswa kepada putra putri terbaik bangsa.</p>
				<div class="row col-md-4">
					<a class="btn btn-danger" href="create">Buat Akun</a>
				</div>
			</div>
			<hr>
			<div class="row mb-3">
				<h4>Waspada Penipuan</h4>
				<div style="text-align: justify;">
					<ol type="a">
						<li>Hati-hati terhadap penipuan yang mengatasnamakan Universitas Pertahanan RI. Institusi Universitas Pertahanan RI tidak pernah melibatkan pihak lain untuk menghubungi peserta.</li>
						<li>Selama proses Penerimaan Mahasiswa Baru Universitas Pertahanan RI, peserta tidak dipungut biaya apapun.</li>
						<li>Segala bentuk pengumuman akan disampaikan melalui <i>website</i> resmi PMB Universitas Pertahanan RI (https://penerimaan.idu.ac.id) dan <i>email</i> resmi panitia (support.pmb@tik.idu.ac.id).</li>
						</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<h4>Kontak</h4>
				<h5 class="text-danger">
					Panitia Penerimaan Mahasiswa Baru<br />
					Universitas Pertahanan RI
				</h5>
				<address>
					Kawasan IPSC Sentul Bogor Jawa Barat <br />
					No. Hp: 082125777260<br />
					Email: support.pmb@tik.idu.ac.id
				</address>
			</div>
		</div>
	</div>


</div>

    <div class="container my-4">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-8 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary">© 2020 - 2025 Panitia Penerimaan Mahasiswa Baru (PMB) Unhan RI</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <a class="text-body-secondary" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter">
                            <svg id="twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                            </svg>
                        </use>
                    </svg>
                </a>
            </li>
            <li class="ms-3">
                <a class="text-body-secondary" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram">
                            <svg id="instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                            </svg>
                        </use>
                    </svg>
                </a>
            </li>
            <li class="ms-3">
                <a class="text-body-secondary" href="#">
                    <svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook">
                            <svg id="facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                            </svg>
                        </use>
                    </svg>
                </a>
            </li>
        </ul>
    </footer>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
    if (document.getElementById("lanjut-buat-pendaftaran")) {
        document.getElementById("lanjut-buat-pendaftaran").disabled = true;
    }

    function terms_changed(termsCheckBox) {
        if (termsCheckBox.checked) {
            document.getElementById("lanjut-buat-pendaftaran").disabled = false;
        } else {
            document.getElementById("lanjut-buat-pendaftaran").disabled = true;
        }
    }

    function CariAlamatKabupaten(dat) {
        const prov = $(dat).val();

        const data = {
            prov: prov,
        };

        $.ajax({
            type: "POST",
            url: "https://penerimaan.idu.ac.id/cari/kabupaten",
            data: data,
            success: function(res) {
                $("#alamat_kabupaten").html(res);
            }
        });
    };

    function CariAlamatKecamatan(dat) {
        const kec = $(dat).val();
        const data = {
            kec: kec
        };
        $.ajax({
            type: "POST",
            url: "https://penerimaan.idu.ac.id/cari/kecamatan",
            data: data,
            success: function(res) {
                $("#alamat_kecamatan").html(res);
            }
        });

    };

    function CariBidangKeahlihan(dat) {

        const bidang = $(dat).val();
        const data = {
            bidang: bidang
        };

        $.ajax({
            type: "POST",
            url: "https://penerimaan.idu.ac.id/cari/bidang",
            data: data,
            success: function(res) {
                $("#bidang_keahlian").html(res);
            }
        });
    };

    function CariProgramKeahlihan(dat) {
        const program = $(dat).val();
        const data = {
            program: program
        };

        $.ajax({
            type: "POST",
            url: "https://penerimaan.idu.ac.id/cari/program",
            data: data,
            success: function(res) {
                $("#program_keahlian").html(res);
            }
        });
    }


    function CariKompetensiKeahlian(dat) {
        const kompetensi = $(dat).val();
        const data = {
            kompetensi: kompetensi
        };
        $.ajax({
            type: "POST",
            url: "https://penerimaan.idu.ac.id/cari/kompetensi",
            data: data,
            success: function(res) {
                $("#kompetensi_keahlian").html(res);
            }
        });
    }


    document.addEventListener("DOMContentLoaded", function() {
        const kurmerYa = document.getElementById("kurikulum_merdeka_ya");
        const kurmerTidak = document.getElementById("kurikulum_merdeka_tidak");
        const sekolahJenis = document.getElementById("sekolah_jenis");
        const kurmerOptions = document.querySelectorAll(".kurmer_option select");

        // Fungsi untuk menonaktifkan select dan menghapus pilihan
        function toggleSelectState() {
            const isYaSelected = kurmerYa.checked;
            const isSMASelected = sekolahJenis.value === "1";
            const isSMKSelected = sekolahJenis.value === "0";

        if (isSMASelected && isYaSelected) {
                kurmerOptions.forEach(select => {
                    select.disabled = true; // Menonaktifkan semua select
                    select.selectedIndex = 0; // Reset pilihan (opsional)
                });
            } else {
                // Aktifkan kembali select jika SMK dipilih atau jika YA tidak dipilih
                kurmerOptions.forEach(select => {
                    select.disabled = false; // Mengaktifkan semua select
                });
            }
        }

        

        // Event listener untuk perubahan pada radio buttons
        
        kurmerYa.addEventListener("change", toggleSelectState);
        kurmerTidak.addEventListener("change", toggleSelectState);
        sekolahJenis.addEventListener("change", toggleSelectState);

        // Initial check when the page loads
        toggleSelectState();
    });
</script>
    <!-- Disable Paste on Confirmation Email Field -->
    <script>
        window.onload = () => {
            const myInput = document.getElementById('con-email');
            myInput.onpaste = e => e.preventDefault();
        }
    </script>
</body>

</html>
