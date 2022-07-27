<?php require_once "../Bezp.php"; ?>

<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href="style.css" type = "text/css">
    <title>Budowa Serwisów Internetowych</title>
  </head>
  <body>

<form action="/Wyloguj.php" method="get">
      <div>
        <input type="submit" name="wyloguj" value="Wyloguj" style = "position: absolute; left: 67%;  font-size: 20px; padding: 10px 25px; margin: 0px 15px; text-align: center; border-radius: 25px; border: 2px solid #556B2F; background: grey; color: #fff;cursor: pointer;">
     </div>
</form>
    <div class="container">
    <div class="tytuł">
    <h1>Galeria Zdjęć z użyciem (div) </h1>
    </div>

    <div class="Galeria">
        <div class="zdjecia">
          <img src="Chorwacja.jpg" alt="Chorwacja">
            <div class = "opis"> Chorwacja </div>
        </div>
        <div class="zdjecia">
          <img src="Cypr.jpg" alt="Cypr">
            <div class = "opis"> Cypr </div>
        </div>
        <div class="zdjecia">
          <img src="Grecja.jpg" alt="Grecja">
            <div class = "opis"> Grecja </div>
        </div>
        <div class="zdjecia">
          <img src="Hiszpania.jpg" alt="Hiszpania">
            <div class = "opis"> Hiszpania </div>
        </div>
        <div class="zdjecia">
          <img src="Niemcy.jpg" alt="Niemcy">
            <div class = "opis"> Niemcy </div>
        </div>
        <div class="zdjecia">
          <img src="Portugalia.jpg" alt="Portugalia">
            <div class = "opis"> Portugalia </div>
        </div>
        <div class="zdjecia">
          <img src="Szwajcaria.jpg" alt="Szwajcaria">
            <div class = "opis"> Szwajcaria </div>
        </div>
        <div class="zdjecia">
          <img src="Turcja.jpg" alt="Turcja">
            <div class = "opis"> Turcja </div>
        </div>
        <div class="zdjecia">
          <img src="Włochy.jpg" alt="Włochy">
            <div class = "opis"> Włochy </div>
        </div>
      </div>
    </div>
  </body>
</html>
