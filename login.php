<?php include "connection.php"?>
<?php
 session_start();
 if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $sql="select * from form where username='$username' and password='$password'";
    $result= mysqli_query($conn,$sql);
    $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count= mysqli_num_rows($result);
   
    if($count==1){
        $_SESSION['username'] = $username;

        header("Location:welcome.php");

    }
    else{
        echo '<script>
        window.location.href="index.php";
        alert("login failed. invalid username or passwors!!!")
        </script>';
    }
}
    ?>