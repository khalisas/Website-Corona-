<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Check Up</title>
        <link rel="icon" href="fav.png" />
    <style media="screen">
    body{
    margin: 0;
    padding: 0;
    background-image: url("../img/halaman1.jpg");
    background-size: cover;
}
        .welcome{
            color: #376b80;
            font-size: 35pt;
            font-weight: 900;
            text-align: center;
        }
        .panel{
            width: 100%;
            max-width: 800px;
            background: #7cdfff;
            position: absolute;
            top:200px;
            left: 100%;
            transform: translate(-50%, -65%);
            padding: 40px 30px;
            box-sizing: border-box;
            border-radius: 2px;
            text-align: center;
            box-shadow: 0 0 4px #376b80;
            font-family: 'Roboto Slab', serif;
        }
        button{
            color: #fff;
            width: 60%;
            padding: 10px;
            border-radius: 20px;
            font-size: 15px;
            margin: 10px 0;
            border: none;
            outline: none;
            cursor: pointer;
        }
        .sign-btn{
            background-color: #ffa3ac;
            width:50%;
        }
        .log-btn{
            background-color: #00c9b1;
            width:50%;
        }
    </style>

</head>
<body>
  <br> <br><br><br><br><br></br></br></br>
    <div class="col-md-6 col-11">
        <div class="panel">
          <h4 style="font-family: Raleway, sans-serif; text-align: center;"><b>CHECK KESEHATAN</b></h4>
          <hr>
          <h4 style="font-family: 'Roboto Slab', serif; text-align: left;">2. Apakah Anda mengalami salah satu dari berikut:</h4>
        <ul style="font-family: 'Lato', sans-serif; font-size: 14px; text-align: left;">
            <li>
                <h6>Nafas yang pendek saat istirahat</h6>
            </li>
            <li>
                <h6>Ketidakmampuan untuk berbaring karena kesulitan bernafas</h6>
            </li>
            <li>
                <h6>Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas</h6>
            </li>
        </ul>
            <button type="button" class="sign-btn" onclick="location.href='hasil2.php';">Ya</button> <br>
            <button type="button" class="log-btn" onclick="location.href='cek3.php';">Tidak</button> <br>
        </div>
    </div>
	<script src="js/main.js"></script>
</body>

</html>
