<!doctype html>
<html lang = "pl">
	<head>
		<meta charset = "UTF-8">
		<title>Logowanie</title>
                <style>
                     *{
                       margin: 0;
                       padding: 0;
                      }

                     .container{
                       width: 340px;
                       height: 430px;
                       background: rgba(0, 0, 0, 0.75);
                       color: #fff;
                       padding: 25px 20px;
                       box-sizing: border-box;
                       border-radius: 8px;
                       position: absolute;
                       left: 50%;
                       top: 50%;
                       transform: translate(-50%, -50%);
                       box-shadow: -20px 2px 15px rgba(0,0,0,0.4);
                      }

                      .container input{
                        width: 100%;
                        margin-bottom: 25px;
                      }

                      .container input[type = "text"], input[type = "password"]{
                        background: transparent;
                        border: none;
                        border-bottom: 1px solid black;
                        text-align: center;
                        outline: none;
                        height: 45px;
                        font-size: 18px;
                        color: #ffff;
                      }

                      .container input[type = "submit"]{
                        width: 60%;
                        transform: translate(34%, 10%);
                        border: none;
                        outline: none;
                        height: 35px;
                        font-size: 18px;
                        border-radius: 20px;
                        margin-top: 30px;
                      }

                      .container input[type = "submit"]:hover{
                        background: #585858;
                        cursor: pointer;
                        transition: 0.5s;
                      }

                      h1{
                       text-align: center;
                       font-family: sans-serif;
                       font-size: 23px;
                       margin-bottom: 40px;
                      }

                </style>
	</head>
	<body>
    <div class="container">
        <form action = "Sprawdz.php" method="post">
          <h1>Sign in</h1>
            <input type="text" name = "Username" placeholder="Użytkownik">
            <input type="password" placeholder="Hasło" name ="Password">
            <input type="submit" name="p1" value="Zaloguj">
      </div>
    </div>
   </div>

	</body>
</html>
