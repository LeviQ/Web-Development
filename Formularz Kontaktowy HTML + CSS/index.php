<?php require_once "../Bezp.php"; ?>

<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href="style.css" type = "text/css">
    <title>Budowa serwisów internetowych</title>
  </head>
  <body>
  <div class = "tło">
<form action="/Wyloguj.php" method="get">
      <div>
        <input type="submit" name="wyloguj" value="Wyloguj" style = "width: 8%; position: absolute; left: 45%;  font-size: 20px; padding: 10px 25px; margin: 35px 15px; text-align: center; border-radius: 25px; border: 2px solid #556B2F; background: grey; color: #fff;cursor: pointer;">
     </div>
</form>
    <div class="container">
      <div class="Formularz">
        <form action = "adres" method="get">
          <h1>Wypełnij Proszę Formularz</h1>
            <input type="text" placeholder="Imię">
            <input type="text" placeholder="Nazwisko">
            <input type="text" placeholder="Miasto">
            <input type="text" placeholder="Ulica">
            <input type="number" placeholder="Numer ulicy">
            <input type="numer" placeholder="Numer domu">
          <select name="Miasto">
            <option>Wybierz Województwo</option>
            <option>mazowieckie</option>
            <option>kujawsko-pomorskie</option>
            <option>dolnośląskie</option>
            <option>lubelskie</option>
            <option>łódzkie</option>
            <option>małopolskie</option>
            <option>opolskie</option>
            <option>podkarpackie</option>
            <option>podlaskie</option>
            <option>pomorskie</option>
            <option>śląskie</option>
            <option>świętokrzyskie</option>
            <option>warmińsko-mazurskie</option>
            <option>wielkopolskie</option>
            <option>zachodniopomorskie</option></select>
          <p>Kobieta
          <input type="radio" name="plec" value = "k" >
          Mężczyzna <input type="radio" name="plec" value = "k" ></p>
          <p>Czy posiadasz Prawo Jazdy:
          <input type = "checkbox" name = "prawko" ></p>
          <input type="tel" name="Numer Telefonu" placeholder="Numer Telefonu" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" >
          <textarea name="Uwagi.."></textarea>
          <input type="submit" name="p1" value="Wyślij">
          <input type="reset" name="p2" value="Wyczyść">
          <input type="button" name="p3" value = "OK"></td>
      </div>
    </div>
   </div>
 </body>
</html>
