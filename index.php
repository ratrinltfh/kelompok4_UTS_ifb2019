<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      /*Navbar*/
      .navbar-nav{
            padding-right: 100px;
        }
      /*About*/
      .font-monospace{
        color: white;
      }
      .judulabout{
        text-align: center;
        color: white;
      }
      /*Faq*/
      .about{
        text-align: center;
        color: black;
      }
      .faq{
          width:1100px;
          margin:0 auto;
          overflow:visible;
        }
        .faq-right h2{
          text-align:center;
          font-family: 'Open Sans', sans-serif;
          font-weight:400;
          text-shadow:2px 2px 2px #f4f4f4;
        }
        .faq-right{
          float:left ;
          width:550px;
        }

        .faq-container{
          width:500px;
          margin:20px auto;
          list-style-type:none;
        }

        .faq-container li{
            position:relative;
            margin:5px 0;
            -webkit-transition:height 1s ease in out;
              -moz-transition:height 1s ease in out;
                    transition:height 1s ease in out;
          }
          .faq-container li input{
            display:none;
          }

          .faq-container li label{
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-size: 16px;
            text-shadow: 1px 1px 1px #666;
            background: #333;
            background: -webkit-linear-gradient(top, #333 1%, #666 100%);
            background: -moz-linear-gradient(top, #333 1%, #666 100%);
            background: linear-gradient(top, #333 1%, #666 100%);
            color: #fff;
            display: block;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px 5px 0 0;
          }
          .faq-container li label:hover{
            background: -webkit-linear-gradient(top, #333 30%, #666 100%);
            background: -moz-linear-gradient(top, #333 30%, #666 100%);
            background: linear-gradient(top, #333 30%, #666 100%);
          }

          .faq-container li div{
            overflow: hidden;
            height:0px;
            padding:5px 10px;
            background:#666;
            background: -webkit-linear-gradient(top, #666 1%, #333 100%);
            background: -moz-linear-gradient(top, #666 1%, #333 100%);
            background: linear-gradient(top, #666 1%, #333 100%);
            position: relative;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            border-radius:0 0 5px 5px;
            color:#f7f7f7;
            font-family: 'Open Sans', sans-serif;
            font-size:13px;
          }
          .faq-container li div p{margin-top:10px}
          .faq-container li input:checked{
            background:#000;
          }
          .faq-container li input:checked ~ div{
            padding-bottom:20px;
          }
          .faq-container li input:checked ~ div.answer{
            height:50px;
          }
          .faq-container li input:checked ~ div.big{
            height:110px;
          }
    </style>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Dime.os</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#catalog">Catalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#faq">FAQ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <section id="home">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/01.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/02.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/03.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/04.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/05.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section class="bg-dark" id="about">
        <div class="container">
          <h1 class="judulabout font-monospace">ABOUT US</h1>
            <img src="./img/aboutus.jpg" alt="">
            <div class="aboutparagraf">
              <p class="font-monospace">
              <b>Dime.Os adalah merek pakaian yang mencekam dan tidak konvensional yang berbasis di Cipanas sejak tahun 2020. Mewakili tidak hanya merek yang lebih halus dan berpikiran maju, kami mencerminkan setiap masalah kami seperti pakaian dan setiap artikel seperti buku yang kami tulis. Didorong oleh pencarian mimpi kita Memberikan layanan dan produk pakaian terbaik kepada setiap pelanggan.</b></p>
            </div>
            </div>
    </section>
    <section class="bg-dark" id="catalog">
        <div class="container">
            <div class="row">
            <div class="col-md-8 mx-auto text-center">
            <h1>Hello World!</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <button type="button" class="btn btn-light btn-lg">This is Button</button>
        </div>
        </div>
    </section>
    <section class="bg-light" id="faq">
      <div class="container">
    <h1 class="about font-monospace">FAQ<hr></h1>
    <div class="faq-right">

        <ul class="faq-container ">

            <li>
              <label for="q1b">Q: Bagaimana cara tahu bahwa barang yang saya cari masih ada stoknya atau sudah habis ?  </label> <input name="question" id="q1b" type="radio" value="">
              <div class="answer">
                <p>Untuk informasi ketersediaan stok, silahkan cari barang tersebut ditempat pencarian yang telah disediakan. Bila ditemukan, klik pada barang tersebut untuk melihat detail info. Pada halaman produk, akan tertera informasi ketersediaan barang tersebut, yaitu "Stok ready". Bila stok habis, maka "Stok ready" akan berisi "Out Of Stock". Pada halaman depan (home) untuk barang yang habis (out of stok) akan tampak pita "Out Of Stock" berwarna ungu pada gambar barangnya. </p>
              </div>
            </li>

            <li>
              <label for="q2b">Q: Saya tidak cocok dengan barangnya, apakah boleh dikembalikan? </label> <input name="question" id="q2b" type="radio" value="">
              <div class="big">
                <p>Barang yang sudah dibeli tidak dapat dikembalikan, karena kami tidak pernah menjual barang second. Harap pelanggan untuk dapat teliti sebelum membeli. </p>
              </div>
            </li>

            <li>
              <label for="q3b">Q: Saya mau ke lokasi Dime.Os untuk melihat barangnya. Tempatnya dimana ?  </label> <input name="question" id="q3b" type="radio" value="" checked="checked">
              <div class="answer">
                <p>Kami ada di Cipanas. Kami memang tidak memiliki galeri offline dan tidak melayani penjualan offline saat ini. Dengan keterbatasan waktu yang ada, kami lebih memilih fokus melayani online saja daripada keduanya tetapi tidak maksimal. </p>
              </div>
            </li>
        </ul>
        </div>
    </div>
    </section>
    <!--Container-->
    <div class="container">
        <!-- Content here -->
    </div>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
