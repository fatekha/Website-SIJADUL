<?php
  session_start();

  //  'auth' sudah di-set di session
  if (isset($_SESSION['auth'])) {
    if ($_SESSION['auth'] == "auth_mhs.php") {
      header("Location: ./mahasiswa/index.php");
      exit(); //  mengakhiri eksekusi setelah redirection
    } else if($_SESSION['auth'] == "auth_dsn.php") {
      header("Location: ./dosen/index.php");
      exit(); //  mengakhiri eksekusi setelah redirection
    }
  }
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>Login</title>
</head>
<body>

  <div class="cotn_principal">
    <div class="cont_centrar">

      <div class="cont_login">
        <div class="cont_info_log_sign_up">
          <div class="col_md_login">
            <div class="cont_ba_opcitiy">
              <h4>MAHASISWA</h4>
              <p></p>
              <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
            </div>
          </div>
          <div class="col_md_sign_up">
            <div class="cont_ba_opcitiy">
              <h4>DOSEN</h4>
              <p></p>
              <button class="btn_sign_up" onclick="cambiar_sign_up()">LOGIN</button>
            </div>
          </div>
        </div>

        <div class="cont_back_info">
          <div class="cont_img_back_grey">
            <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
          </div>
        </div>

        <div class="cont_forms">
          <div class="cont_img_back_">
            <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
          </div>
          <div class="cont_form_login">
            <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons"></i></a>
            <h2>LOGIN</h2>
            <form action="./auth_mhs.php" method="GET">
              <input type="text" name="user" placeholder="Username" />
              <input type="password" name="pass" placeholder="Password" />
              <button class="btn_login" type="submit">LOGIN</button>
            </form>
          </div>

          <div class="cont_form_sign_up">
            <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons"></i></a>
            <h2>LOGIN</h2>
            <form action="./auth_dsn.php" method="GET">
              <input type="text" name="user" placeholder="NIDN" />
              <input type="password" name="pass" placeholder="Password" />
              <button class="btn_sign_up" type="submit">LOGIN</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function cambiar_login() {
      document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
      document.querySelector('.cont_form_login').style.display = "block";
      document.querySelector('.cont_form_sign_up').style.opacity = "0";               

      setTimeout(function() {
        document.querySelector('.cont_form_login').style.opacity = "1"; 
      }, 400);  

      setTimeout(function() {    
        document.querySelector('.cont_form_sign_up').style.display = "none";
      }, 200);  
    }

    function cambiar_sign_up(at) {
      document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
      document.querySelector('.cont_form_sign_up').style.display = "block";
      document.querySelector('.cont_form_login').style.opacity = "0";

      setTimeout(function() {
        document.querySelector('.cont_form_sign_up').style.opacity = "1";
      }, 100);  

      setTimeout(function() {   
        document.querySelector('.cont_form_login').style.display = "none";
      }, 400);  
    }

    function ocultar_login_sign_up() {
      document.querySelector('.cont_forms').className = "cont_forms";  
      document.querySelector('.cont_form_sign_up').style.opacity = "0";               
      document.querySelector('.cont_form_login').style.opacity = "0"; 

      setTimeout(function() {
        document.querySelector('.cont_form_sign_up').style.display = "none";
        document.querySelector('.cont_form_login').style.display = "none";
      }, 500);  
    }
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>