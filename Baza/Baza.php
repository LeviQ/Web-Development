<?php require_once "../Bezp.php"; ?>

<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
<title>Baza produktów</title>
                <style>
                     *{
                       margin: 0;
                       padding: 0;
                       
                      }

                     .container{
                       width: 600px;
                       height: 530px;
                       background: #4682B4;
                       color: #fff;
                       padding: 25px 20px;
                       box-sizing: border-box;
                       border-radius: 8px;
                       position: absolute;
                       left: 50%;
                       top: 50%;
                       transform: translate(-50%, -70%);
                       
                      }

                      .container input{
                        width: 100%;
                        margin-bottom: 25px;
                      }

                      .container input[type = "text"], input[type = "date"]{
                        background: white;
                        border: none;
                        border-radius: 8px;
                        text-align: center;
                        outline: none;
                        height: 45px;
                        font-size: 18px;
                        color: black;
                      }

                      .container input[type = "submit"]{
                        width: 60%;
                        transform: translate(34%, 10%);
                        background: green;
                        border: none;
                        outline: none;
                        height: 35px;
                        font-size: 18px;
                        border-radius: 20px;
                        margin-top: 30px;
                      }

                      .container input[type = "submit"]:hover{
                        background: #006400;
                        cursor: pointer;
                        transition: 0.5s;
                        
                      }

                      .produkty-tabelka input[type="submit"]{
                        justify-content: left;
                        background: #CD5C5C;
                        cursor: pointer;
                        width: 30%;
                        border: none;
                        outline: none;
                        height: 35px;
                        font-size: 14px;
                        border-radius: 20px;
                        
                        
                      }

                      .produkty-tabelka input[type="submit"]:hover{
                        background: #FF0000;
                        cursor: pointer;
                        transition: 0.5s;
                        
                      }

                      
                      .produkty{
                      width: 80%;
                      padding: 5px;
                      text-align: center;
                      position: absolute;
                      left: 10%;
                      top: 75%;
                      }

                      .produkty td{
                      width: 280px;
                      height: 50px;
                      background: #4682B4;
                      font-family: sans-serif;
                      border-spacing: 10em;
                      background:#4682B4;
                      text-align: center;
                      font-size: 18px;
                      color: #ffff;

                      }

                      
                      h1{
                       text-align: center;
                       font-family: sans-serif;
                       font-size: 23px;
                       margin-bottom: 40px;
                      }

                      h2{
                       text-align: center;
                       font-family: sans-serif;
                       font-size: 18px;
                       margin-bottom: 20px;
                      }

                      .kodzik{
                       width: 100%;
                       height: 30px;
                       text-align: center;
                       font-size: 30px;
                       position: absolute;
                       left: 530px;
                       margin: -30px 10px;
                      }


                      ::-webkit-input-placeholder {
                      color: black;
                      }

                </style>
</head>

<body>

<?php

       

    $conn = new mysqli("127.0.0.1:3306","Alex113","Aleksander123","alex113");

    if(isset($_POST["p1"]) && $_POST["p1"] == "Dodaj Produkt")
    {
        $nazwa = $_POST["nazwa"];
        $opis = $_POST["opis"];
        $data = $_POST["data"];
        $ilosc = $_POST["ilosc"];
        if($nazwa != "")
        {
          $sql = "insert into student (id,nazwa,opis,ilosc,data) values(null,'$nazwa','$opis','$ilosc','$data')";
          $wynik = $conn->query($sql);
        }
    }


    if(isset($_POST["kasuj"]) && $_POST["kasuj"] == "KASUJ")
    {
        $id = $_POST["id"];
        $sql = "delete from student Where id = $id";
        $wynik = $conn-> query($sql);
       
    }

    $sql = "select * from student";
    $wynik = $conn->query($sql);

?>


<div class="container">
      <form action="/Wyloguj.php" method="get">
       <div>
         <input type="submit" name="wyloguj" value="Wyloguj" style = "width: 25%; position: absolute; left: 140%; margin: -70px 10px;">
       </div>
      <div class="kodzik">
       <a href="kodzik.php.txt" class="button">👨‍💻</a>
      </div>   
      </form>
        <form action = "Baza.php" method="post">
          <h1>Dodaj Nowy Produkt</h1>
            <input type="text" name = "nazwa" placeholder="Nazwa Produktu">
            <input type="text" name ="opis" placeholder="Opis Produktu">
            <input type="text" name ="ilosc" placeholder="Ilość">
          <h2>Data Ważności Produktu</h2>
            <input type="date" name ="data" placeholder="Data spożycia">
            <input type="submit" name="p1" value="Dodaj Produkt">
</div>

<div class = "produkty">

 <table class = "produkty-tabelka">

       <tr>

         <td style="color: black; font-weight: bold"> ID Produktu </td>
         <td style="color: black; font-weight: bold"> Nazwa Produktu </td>
         <td style="color: black; font-weight: bold"> Opis Produktu </td>
         <td style="color: black; font-weight: bold"> Liczba w Magazynie </td>
         <td style="color: black; font-weight: bold"> Data Spożycia </td>
         <td style="color: black; font-weight: bold"> Działanie </td>
        
       </tr>

       <?php while($row = $wynik -> fetch_assoc()){ ?> 
                    
         <tr>
            <?php echo ("<form action ='Baza.php' method = 'post'>"); ?>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["nazwa"]; ?></td>
            <td><?php echo $row["opis"]; ?></td>
            <td><?php echo $row["ilosc"]; ?></td>
            <td><?php echo $row["data"]; ?></td>
            <td><?php echo ("<input type='submit' name='kasuj' value='KASUJ'>"); ?>
                <?php echo ("<input type='hidden' name='id' value= '".$row["id"]."'>");?></td>
            <?php echo ("</form>"); ?>
         </tr>
       <?php } ?> 
         
 </table>
</div>

</body>
</html>
      
		