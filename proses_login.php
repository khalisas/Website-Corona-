<?php
    include 'config.php';
    session_start();

    $username = $_POST ['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM t_user WHERE username = '$username' AND password = '$password'";
    $sql = mysqli_query ($koneksi, $query);
    $cek = mysqli_num_rows($sql);

    if($cek > 0){
        $data = mysqli_fetch_assoc($sql);
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['nama'] = $data['nama'];
            header("Location:http://localhost/corona/index.php");

        }else{
            echo "<h1> Username atau Password anda Salah !! </h1>";
            echo "<div class='form'>
                <h3>
                    <br/> Klik untuk <a href='login.php'>Login lagi</a>
                </h3>
            </div>";
        }
