<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">

   <!-- Google Search Console Verification -->
   <meta name="google-site-verification" content="CBiyqhQDiwaMiJnxj6mntcQrzFmmODbCkaxzfUrnk6A" />

   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>BPBD Pemerintah Provinsi Jawa Tengah</title>
   <link rel="icon" type="image/png" href="https://logpal.bpbd.jatengprov.go.id/assets/icons.png">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://logpal.bpbd.jatengprov.go.id/assets/backend/css/all.min.css">
   <link rel="stylesheet" href="https://logpal.bpbd.jatengprov.go.id/assets/backend/css/OverlayScrollbars.css">
   <link rel="stylesheet" href="https://logpal.bpbd.jatengprov.go.id/assets/backend/css/adminlte.css">
   <link rel="stylesheet" href="https://logpal.bpbd.jatengprov.go.id/assets/backend/css/select2.min.css">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">

<div class="login-box"> 
   <div class="card">
      <div class="card-body login-card-body">
         <p class="login-box-msg">Masuk Aplikasi LOGPAL</p>

         <form action="https://logpal.bpbd.jatengprov.go.id/auth" method="post" accept-charset="utf-8">

            <div class="input-group mb-3">
               <!--
               <select name="id_kab" class="form-control js-select2-template" required="">
                  <option value="">=== Pilih Kota / Kabupaten ===</option>
                  <option value=""></option>
               </select>
               -->
            </div>

            <div class="input-group mb-3">
               <input type="text" name="username" class="form-control" placeholder="Username" required autocomplete="off">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-user"></span>
                  </div>
               </div>
            </div>

            <div class="input-group mb-3">
               <input type="password" name="password" class="form-control" id="login_password" placeholder="Password">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>

            <div class="input-group mb-3">
               <div class="w-100">
                  <img src="https://logpal.bpbd.jatengprov.go.id/assets/captcha/1767705687.8584.jpg"
                       style="width: 320px; height: 100px; border: 0;"
                       alt=" " />
               </div>

               <input type="text" name="captcha_word" class="form-control" id="captcha_word" placeholder="Captcha">
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-8">
                  <div class="icheck-primary">
                     <input type="checkbox" id="showpassword" onclick="myFunction()">
                     <label class="showpassword" for="showpassword">Show Password</label>
                  </div>
               </div>

               <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block" id="login">
                     Log In
                  </button>
               </div>
            </div>

         </form>
      </div>
   </div>
</div>

<div class="container-fluid"
     style="position: absolute; top: 530px; right: 0; width: 300px; height: 100px; background-color: white; border-radius: 10px; align-content: center;">
   <table style="font-size: 12pt">
      <tr>
         <td>Helpdesk</td>
         <td> : </td>
         <td> Eky Yanti (085646262629 - WA)</td>
      </tr>
      <tr>
         <td></td>
         <td> : </td>
         <td> Eko Heri (085325360540 - WA)</td>
      </tr>
   </table>
</div>

<script src="https://logpal.bpbd.jatengprov.go.id/assets/backend/js/jquery.js"></script>
<script src="https://logpal.bpbd.jatengprov.go.id/assets/backend/js/bootstrap.bundle.js"></script>
<script src="https://logpal.bpbd.jatengprov.go.id/assets/backend/js/adminlte.js"></script>
<script src="https://logpal.bpbd.jatengprov.go.id/assets/backend/js/select2.full.min.js"></script>

<script type="text/javascript">
   $(document).ready(function() {
      $('.js-select2-template').select2();
   });

   function myFunction() {
      var x = document.getElementById("login_password");
      if (x.type === "password") {
         x.type = "text";
      } else {
         x.type = "password";
      }
   }
</script>

</body>
</html>
