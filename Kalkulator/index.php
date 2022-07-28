<?php require_once "../Bezp.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="container">
<form action="/Wyloguj.php" method="get">
      <div>
        <input type="submit" name="wyloguj" value="Wyloguj" style = "width: 40%; position: absolute; left: 27%; top: -20%; font-size: 20px; padding: 10px 25px; margin: 15px 15px; text-align: center; border-radius: 25px; border: 2px solid #556B2F; background: grey; color: #fff;cursor: pointer;">
     </div>
</form>
      <div id = "result"></div>
      <div class="buttons">
        <div class="button action ac">AC</div>
        <div class="button action">/</div>
        <div class="button action">*</div>
        <div class="button action">&larr;</div>
        <div class="button value">7</div>
        <div class="button value">8</div>
        <div class="button value">9</div>
        <div class="button action">-</div>
        <div class="button value">4</div>
        <div class="button value">5</div>
        <div class="button value">6</div>
        <div class="button action plu">+</div>
        <div class="button value">1</div>
        <div class="button value">2</div>
        <div class="button value">3</div>
        <div class="button value bn-0">0</div>
        <div class="button value">.</div>
        <div class="button action bn-equal">=</div>
    </div>
    <script src="index.js"></script>
  </body>
</html>
