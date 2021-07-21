<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login2.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Output Kuis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #gray;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #black;
        }
    </style>

</head>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Kuis 3 PBP D</a> -->
            <!--   <a class="btn btn-primary" href="#">Sign In</a> -->
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    
                    <h1 class="mb-5">Selamat Datang
                       </h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">

                                <table>
                                    <tr>
                                        <td> NIM</td>
                                        <td> : </td>
                                        <td>672018053</td>
                                    </tr>
                                    <tr>
                                        <td> Nama</td>
                                        <td> : </td>
                                        <td>SAMUEL NUGRAHA</td>
                                    </tr>
                                     <tr>
                                        <td> Fakultas</td>
                                        <td> : </td>
                                        <td>TEKNOLOGI INFORMASI</td>
                                    </tr>
                                     <tr>
                                        <td> Jurusan</td>
                                        <td> : </td>
                                        <td>TEKNIK INFORMATIKA</td>
                                    </tr>
                                      <tr>
                                        <td> Walistudi</td>
                                        <td> : </td>
                                        <td>SRI YULIANTO JOKO PRASETYO,, S.S</td>
                                    </tr>
                                    <tr>
                                        <td>Jam</td>
                                        <td>Ruang</td>
                                        <td>Kode</td>
                                        <td>Matakuliah</td>
                                        <td>SKS A </td>
                                        <td>SKS B</td>
                                        <td>B/U/P</td>
                                        <td>Pengajar</td>
                                    </tr>
                                    <tr>
                                        <td colspan="8">SENIN</td>
                                    </tr>
                                    <tr>
                                        <td>10-13</td>
                                        <td>FTI455</td>
                                        <td>IN315D</td>
                                        <td>PEMROGRAMAN <br>BERORINETASI PLATFORM</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>B</td>
                                        <td>RAYNALDO</td>
                                    </tr>
                                    <tr>
                                        <td>13-16</td>
                                        <td>FTI333</td>
                                        <td>IN312B</td>
                                        <td>KEAMANAN DATA</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>B</td>
                                        <td>ALZ DANNY WOWOR</td>
                                    </tr>
                                     <tr>
                                        <td colspan="8">SELASA</td>
                                    </tr>
                                       <tr>
                                        <td>08-11</td>
                                        <td>FTI431</td>
                                        <td>IN314A</td>
                                        <td>RSNA1</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>B</td>
                                        <td>INDASTRANTI RATNA WIDIASARI</td>
                                    </tr>
                                     <tr>
                                        <td colspan="8">RABU</td>
                                    </tr>
                                       <tr>
                                        <td>13-16</td>
                                        <td>FTI457</td>
                                        <td>IN316B</td>
                                        <td>PEMROGRAMAN LANJUT</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>B</td>
                                        <td>RADIUS TANONE</td>
                                    </tr>
                                       <tr>
                                        <td colspan="8">KAMIS</td>
                                    </tr>
                                       <tr>
                                        <td>10-13</td>
                                        <td>FTI463</td>
                                        <td>IN313A</td>
                                        <td>KEAMANAN JARINGAN</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>B</td>
                                        <td>DIAN WIDIYANTO CHANDRA</td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="transkrip.php">Transkrip Nilai</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="logout2.php">Logout</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Samuel Nugraha 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>