<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS/panelgiris.css">
</head>
<body>
<div class="panel">
    <form action="panelgiris.php" method="post" style="max-width:500px;margin:auto">
        <h2>Panel Girişi</h2>
        <div class="input-container">
          <i class="fa fa-user icon"></i>
          <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="usrnm">
        </div>
        
        <div class="input-container">
          <i class="fa fa-key icon"></i>
          <input class="input-field" type="password" placeholder="Şifre" name="psw">
        </div>
      
        <button type="submit" class="btn">Giriş yap</button>
      </form>
</div>
</body>
</html>

<?php 

session_start();

if(isset($_POST["usrnm"], $_POST["psw"]))
{
  
  if($_POST["usrnm"]=="canbozkurt" && $_POST["psw"]==123456.)
  {
    $_SESSION["user"]=$_POST["usrnm"];
    header("location:gizlidosya-panel.php");
  }

  else
  {
    echo "<script>alert('Kullanıcı Adı ve ya Şifreyi yanlış girdin.')</script>";
  }

}

?>