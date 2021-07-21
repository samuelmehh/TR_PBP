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
                    
                    <h1 class="mb-5">TRANSKRIP NILAI
                       </h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">

                                <table>
                                    <tr>
                                        <td>No</td>
                                        <td>Kode</td>
                                        <td>Matakuliah</td>
                                        <td>SKS</td>
                                        <td>Nilai</td>
                                        <td>AK</td>
                                        <td>Tahun Ambil</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>IN111B</td>
                                        <td>MATEMATIKA</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>16</td>
                                        <td>2018-2019/1</td>
                                    </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>IN113A</td>
                                        <td>BAHASA INGGRIS</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>16</td>
                                        <td>2018-2019/1</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>IN112B</td>
                                        <td>PENGANTAR TEKNIK INFORMATIKA</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>16</td>
                                        <td>2018-2019/1</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>IN124F</td>
                                        <td>PEMROGRAMAN</td>
                                        <td>6</td>
                                        <td>A</td>
                                        <td>24</td>
                                        <td>2018-2019/2</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>IN123B</td>
                                        <td>STATISTIK & PROBABILITAS</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>8</td>
                                        <td>2018-2019/2</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>IN122C</td>
                                        <td>PENDIDIKAN PANCASILA</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>8</td>
                                        <td>2018-2019/2</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>IN121B</td>
                                        <td>PENDIDIKAN AGAMA</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>8</td>
                                        <td>2018-2019/2</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>IN133H</td>
                                        <td>SISTEM OPERASI</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>16</td>
                                        <td>2018-2019/3</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>IN134C</td>
                                        <td>SISTEM DIGITAL</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>16</td>
                                        <td>2018-2019/3</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>IN132D</td>
                                        <td>PENDIDIKAN KEWARGANEGARAAN</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>8</td>
                                        <td>2018-2019/3</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>IN131H</td>
                                        <td>BAHASA INDONESIA</td>
                                        <td>2</td>
                                        <td>A</td>
                                        <td>8</td>
                                        <td>2018-2019/3</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>IN213A</td>
                                        <td>KOMPUTASI</td>
                                        <td>3</td>
                                        <td>B</td>
                                        <td>9</td>
                                        <td>2019-2020/1</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>IN211I</td>
                                        <td>JARINGAN KOMPUTER</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12</td>
                                        <td>2019-2020/1</td>
                                    </tr>
                                     <tr>
                                        <td>14</td>
                                        <td>IN212G</td>
                                        <td>SISTEM BASIS DATA 1</td>
                                        <td>6</td>
                                        <td>AB</td>
                                        <td>21</td>
                                        <td>2019-2020/1</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>IN311A</td>
                                        <td>PEMODELAN DAN SIMULASI</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12</td>
                                        <td>2019-2020/1</td>
                                    </tr>
                                     <tr>
                                        <td>16</td>
                                        <td>IN221A</td>
                                        <td>ALGORITMA DAN STRUKTUR DATA</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>16</td>
                                        <td>2019-2020/2</td>
                                    </tr>
                                     <tr>
                                        <td>17</td>
                                        <td>IN223E</td>
                                        <td>ETIKA PROFESI & TECHNOPRENEURSHIP</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>16</td>
                                        <td>2019-2020/2</td>
                                    </tr>
                                     <tr>
                                        <td>18</td>
                                        <td>IN222D</td>
                                        <td>KECERDASAN BUATAN</td>
                                        <td>4</td>
                                        <td>A</td>
                                        <td>16</td>
                                        <td>2019-2020/2</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>IN231H</td>
                                        <td>TEKNOLOGI JARINGAN</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12</td>
                                        <td>2019-2020/3</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>IN233A</td>
                                        <td>REKAYASA PERANGKAT LUNAK</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12</td>
                                        <td>2019-2020/3</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>IN232J</td>
                                        <td>GRAFIKA KOMPUTER</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12</td>
                                        <td>2019-2020/3</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>IN234I</td>
                                        <td>INTERAKSI MANUSIA DAN KOMPUTER</td>
                                        <td>3</td>
                                        <td>A</td>
                                        <td>12</td>
                                        <td>2019-2020/3</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td></td>
                                        <td>75</td>
                                        <td></td>
                                        <td>294</td>
                                        <td></td>
                                    </tr>
                                      <tr>
                                        <td></td>
                                        <td>IPK</td>
                                        <td></td>
                                        <td>3.92</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
              <a href="#">Transkrip Nilai</a>
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