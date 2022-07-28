<?php require_once "../Bezp.php"; ?>

<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href="style.css" type = "text/css">
    <script type="text/javascript" src="wzim.js"></script>
    <title>Budowa serwisów internetowych</title>
  </head>
  <body>
  <div class = "tło">
<form action="/Wyloguj.php" method="get">
      <div>
        <input type="submit" name="wyloguj" value="Wyloguj" style = "width: 6%; position: absolute; left: 46%; margin: 7px 10px;">
     </div>
</form>
    <div class="container">
      <div class="Formularz">
        <form action = "adres" method="get" required>
          <h1>Wypełnij Proszę Formularz</h1>
            <input type="text" id = "Imie" placeholder="Imię">
            <input type="text" placeholder="Nazwisko" id="Nazwisko">
            <p1 id = "Siemano">Data Urodzenia:</p1>
            <input type="Date" placeholder="Data" id="Data">
            <input type="text" placeholder="Miasto" id="Miasto">
            <input type="text" placeholder="Ulica" id="Ulica">
            <input type="text" placeholder="Numer Budynku" id="Numer_budynku">
            <input type="text" placeholder="Numer lokalu" id = "Numer_lokalu">
            <input type="kod_poczt" placeholder="Kod Pocztowy" id="Postal_Code" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}">
          <select name="Woj" id = "Woj">
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
          <p2 id = "p2">Kobieta
          <input type="radio" name="plec" id = "Kobieta">
          Mężczyzna <input type="radio" name="plec" id = "Mezczyzna"></p2>
          <p3 id = "przerwa"></p3>
          <p>Czy posiadasz Prawo Jazdy:
          <input type = "checkbox" name = "prawko" id = "prawko"></p>
          <input type="tel" name="Numer Telefonu" placeholder="Numer Telefonu (+xx xxx-xxx-xxx)" id = "phone_number">
          <textarea name="Uwagi.." id = "Uwagi"></textarea>
          <input type="button" name="p1" onclick="Checking()" value="Wyślij">
          <input type="reset" name="p2" value="Wyczyść">
          <input type="button" name="p3" onclick= "Dodawanko()" value = "OK"></td>
      </div>
    </div>
   </div>
     </div>
</form>
 </body>
</html>
