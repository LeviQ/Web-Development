<?php require_once "../Bezp.php"; ?>

<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Budowa serwisów internetowych</title>
  </head>
  <body>
    <table border = "1" bgcolor = "NavajoWhite" align = "center">
      <caption><strong><Font size = 5>Wypełnij Proszę Formularz</font></strong></caption>
        <form action = "adres" method="get" required>
        <tr>
          <td><strong>Imię:</strong></td><td><input type="text" name="imie" required></td>
        </tr>
        <tr>
          <td><strong>Nazwisko:</strong></td><td><input type="text" name="nazwisko" required></td>
        </tr>
        <tr>
          <td><strong>Miasto:</strong></td><td><input type="text" name="miasto" required></td>
        </tr>
        <tr>
          <td colspan="2" align = "center">
            <p><strong>Wybierz Województwo:
        <select name="Miasto" required>
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
          <option>zachodniopomorskie</option>
        </select></strong></p>
        </td>
        </tr>
        <tr>
          <td><strong>Ulica:</strong></td><td><input type="text" name="ulica" required></td>
        </tr>
        <tr>
          <td>
            <strong>Nr Ulicy:</strong></td><td><input type="number" name="numer" required>
         </td>
        </tr>
        <tr>
        <td><strong>Prawo Jazdy:</strong></td><td><input type = "checkbox" name = "prawko" required></td><br>
        </tr>
        <tr>
        <td><strong>Zaznacz Płeć:</strong> &nbsp; Kobieta<input type="radio" name="plec" value = "k"></td><td> &nbsp; Mężczyzna: <input type="radio" name="plec" value = "M"></td><br>
        </tr>
        <tr>
        <td><strong>Numer Telefonu:</td><td><input type="tel" name="Numer Telefonu" placeholder="312-501-999" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required></td><br><br>
        </tr>
        <tr>
        <td colspan="2"><textarea name="Uwagi.." placeholder = "Uwagi..." rows="10" cols="43"></textarea></td><br>
        </tr>
        <tr>
        <td colspan="2" align = "center"><input type="submit" name="p1" value="Wyślij">
        <input type="reset" name="p2" value="Wyczyść">
        <input type="button" name="p3" value = "OK"></td>
        </tr>
    </form>
    </table>

<form action="/Wyloguj.php" method="get">
      <div>
        <input type="submit" name="wyloguj" value="Wyloguj" style = "position: absolute; left: 46%;  font-size: 20px; padding: 10px 25px; margin: 8px 15px; text-align: center; border-radius: 25px; border: 2px solid #556B2F; background: grey; color: #fff;cursor: pointer;">
     </div>
</form>
  </body>
</html>
	