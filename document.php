<?php

include('connect.php');

header('Content-Type: text/html;charset=utf-8');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="document.css" />
  <link href="img/school emblem.ico" rel="shortcut icon" />

  <title>Document</title>
</head>

<body>
  <main>
    <header class="sticky-top site-header">
      <div class="relevant-information d-flex flex-row justify-content-end align-items-center px-5">
        <p class="my-0 mx-2 p-0">
          <img src="img/phone.png" class="me-1" /> +886-7-7225529
        </p>
        <p class="my-0 mx-2 p-0">
          <img src="img/envelope2.png" class="me-1" />mozartpili2@yahoo.com.tw
        </p>
        <a href="http://www.cysh.khc.edu.tw/english.php"><img src="img/globall.png" class="informationgloball mx-2" /></a>
        <a href="https://www.youtube.com/@user-bw9de8pk8z/videos"><img src="img/yt.png" class="informationyt mx-2" /></a>

        <a href="https://www.facebook.com/cysh.kh"><img src="img/fbicon.png" class="informationfb mx-2" /></a>
      </div>
      <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container-fluid lg-px-5">
          <a class="navbar-brand d-flex flex-row" href="home.html">
            <img class="m-2" src="img/unnamed.png" style="height: 55px; width: 55px" />
            <span class="mx-1">
              <p>私 立 正 義 高 級 高 中</p>
              <p>Cheng-Yi Senior High School</p>
            </span>
          </a>
          <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex align-items-center justify-content-around">
              <li class="nav-item mx-2 p-0">
                <a class="py-2 text-decoration-none" href="ourschool.html">Our School</a>
              </li>
              <li class="nav-item mx-2 p-0">
                <a class="py-2 text-decoration-none" href="curriculm.php">Curriculum</a>
              </li>
              <li class="nav-item mx-2 p-0">
                <a class="py-2 text-decoration-none" href="studentclub.php">Student Club</a>
              </li>
              <li class="nav-item mx-2 p-0">
                <a class="py-2 text-decoration-none" href="document.php">Documents</a>
              </li>
              <li class="nav-item mx-2 p-0">
                <a class="me-3 py-2 text-decoration-none" href="calendar.php">Calendar</a>
              </li>
              <li class="nav-item mx-2 p-0">
                <a class="py-2 text-decoration-none" href="contact.html">Contact</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/stock.JPG" alt="First slide" />
        </div>
      </div>
      <div class="row p-0 m-0 introduce">
        <p class="p-0 m-0">
          Our Students Won The World Championship Of Robofest 2022
        </p>
      </div>
      <div class="row mx-0 ribbon">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
      </div>
    </div>
    <div class="col-12">
      <div class="row mx-0 py-5 d-flex justify-content-center">
        <span class="d-flex justify-content-center flex-column my-2">
          <p class="d-flex justify-content-center title fw-bold">Documents</p>
        </span>

        <div class="col-10 col-sm-10 col-md-8 col-lg-5 p-2">
          <div class="row flex-column align-items-center PDF-area m-0 py-3">
            <div class="col-10 d-flex justify-content-center justify-content-between align-items-center document px-4 my-2">
              <p class="m-0 p-0 d-flex align-items-center">
                <img src="img/PDF.png" />
                行事曆
              </p>
              <img src="img/download2.png" />
            </div>
            <div class="col-10 d-flex justify-content-center justify-content-between align-items-center document px-4 my-2">
              <p class="m-0 p-0 d-flex align-items-center">
                <img src="img/PDF.png" />
                行事曆
              </p>
              <img src="img/download2.png" />
            </div>

          </div>
        </div>

      </div>
    </div>
  </main>
  <footer class="col-12 d-flex flex-column py-5">
    <div class="row w-100 d-flex align-items-center justify-content-center top">
      <div class="col-sm-12 col-md-3 d-flex justify-content-center Information">
        <ul>
          <li>
            <p>
              <img src="img/phone.png" />
              +886-7-7225529
            </p>
          </li>
          <li>
            <p><img src="img/printer.png" />+886-7-72255211</p>
          </li>
          <li>
            <p>
              <img src="img/locationicon.png" />
              NO.183,Nanjiang&thinsp;St.,FengshanDist.,&thinsp;Kaohsiung&thinsp;City
              830034,Taiwan (R.O.C.)
            </p>
          </li>
        </ul>
      </div>
      <div class="col-sm-12 col-md-2 d-flex flex-row align-items-center justify-content-around community py-2">
        <a href="http://www.cysh.khc.edu.tw/english.php"><img src="img/globall.png" class="communitygloball" /></a>
        <a href="https://www.youtube.com/@user-bw9de8pk8z/videos"><img src="img/yt.png" class="communityyt" /></a>

        <a href="https://www.facebook.com/cysh.kh"><img src="img/fbicon.png" class="communityfb" /></a>
      </div>
    </div>
    <div class="row pt-3 bottom">
      <p>copyright @ Cheng Yi Senior High School. All Rights Reserved</p>
    </div>
  </footer>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="./document.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>