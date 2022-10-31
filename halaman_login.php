<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-btn" onclick="login()">LOGINO!</button>
        </div>
        <div class="social-icons">
          <img src="img/hp.png">
          <img src="img/yt.png">
          <img src="img/ig.png">
        </div>
        <form id="login" class="input-group" action="proses_login.php" method="post">
          <input type="text" class="input-field" name="username" placeholder="Username" required>
          <input type="password" class="input-field" name="password" placeholder="Password" required>
          <input type="checkbox" class="check-box"><span>Remember Password</span>
          <button type="submit" class=" submit-btn" name="login">Login</button>
        </form>
      </div>

    </div>

    <script>
      var x = document.getElementById("login");
      
      var z = document.getElementById("btn");

      
      function login(){
        x.style.left = "50px";
        z.style.left = "0px";
      }
    </script>
  </body>
</html>

<?php
    include 'config.php';
    if(@$_POST['simpan']){
        $email = @$_POST['nama'];
        $username = @$_POST['username'];
        $Password = @$_POST['password'];
        $pass = md5($Password);
        $level = "3";

        $query = mysqli_query($koneksi, "INSERT INTO `t_user` (email,username,password,id_level)
                    VALUES ('$email', '$username', '$pass', '$level')");
        if($query){
            echo "<div class='form'>
                <h3> Berhasil registerasi akun </h3>
                <br/> Kembali untuk <a href='halaman_login.php'>Login</a>
            </div>";
        }else{
            echo "data gagal di input";
        }
    }else{
        // echo "gagal";
    }
?>
