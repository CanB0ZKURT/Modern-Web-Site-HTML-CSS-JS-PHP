<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/gizlidosya-panel.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>E-Mail</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>

  <?php
  
  session_start();

  if($_SESSION["user"]=="")
  {
    echo "<script>window.location.href='cikis.php'</script>";
  }

  else
  {

      include("baglanti.php");

    $sec="Select * From iletisim";

    $sonuc=$baglan->query($sec);

    if($sonuc->num_rows>0)
    {
      while($cek=$sonuc->fetch_assoc())
      {
        echo "
      
        <tr>
          <td>".$cek['adsoyad']."</td>
          <td>".$cek['telefon']."</td>
          <td>".$cek['email']."</td>
          <td>".$cek['konu']."</td>
          <td>".$cek['mesaj']."</td>
        </tr>
      
        ";
      }
    }

    else
    {
      echo "Veri tabanı'nda kayıtlı veri bulunamadı.";
    }

  }

?>

</table>
</body>
</html>