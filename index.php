<?php include "connection.php"?> 
 
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="formalt">
        <form id="formget" name="form" method="POST" action="login.php">
            <h2 id="head">LOGIN FORM</h2>
            <label>USERNAME:</label>
            <input type="text" name="user"><br><br>
            <label>PASSWORD</label>
            <input type="Password" name="pass"><br><br>
            <input type="submit" id="btn"name="submit" value="log on">

</form>
        </div>   
    </body>
</html>