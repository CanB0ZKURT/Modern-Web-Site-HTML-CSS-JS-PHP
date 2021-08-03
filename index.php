<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ana Sayfa</title>
    <!-- CSS-Kütüphane ve Font -->
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/5ebcc5475e.js" crossorigin="anonymous"></script>
    <!-- Alttaki el yazı, Üstteki normal.  -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <h3 id="orangeHeader"><span class="darkmode-ignore">Designer / Front End Developer</span></h3>
        <div class="icons">
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="https://open.spotify.com/playlist/1jyOqClcHBusXtGJiXDIXr"><i class="fab fa-spotify"></i></a>
            <a href="https://github.com/CanB0ZKURT"><i class="fab fa-github-square"></i></a>
        </div>

        <a href="https://www.behance.net/canbozkurt2"><img src="İmages/cb.png" alt="canbozkurt" id="cbLogo"></a>
        
        <nav class="menu vertical">
            <ul>
                <li data-dropdown>
                    <a href="">
                        Menü
                    </a>
                    <div class="dropdown">
                        <ul>
                            <li>
                                <a href="about-me.php">
                                    Hakkımda
                                </a>
                            </li>
                            <li data-dropdown>
                                <a href="#">
                                    Projelerim
                                </a>
                                <div class="dropdown">
                                    <ul>
                                        <li>
                                            <a href="https://github.com/CanB0ZKURT">GitHub</a>
                                        </li>
                                        <li>
                                            <a href="https://sourceforge.net/u/umutbozkurt/profile/">Source Forge</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="communication.php">
                                    İletişim
                                </a>
                            </li>
                            <li>
                                <a href="my-hobbies.php">
                                    Hobilerim
                                </a>
                            </li>
                            <li>
                                <a href="form.php">
                                    İletişim ( Form )
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>

        <div>
            <input type="checkbox" class="checkbox" id="chk" />
            <label class="label" for="chk">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <div class="ball"></div>
            </label>
        </div>        
        
        <!-- SOSYAL PANEL HTML -->
        <div class="social-panel-container">
            <div class="social-panel">
                <p id="canb">Created with by
                    <a target="_blank" href="https://github.com/CanB0ZKURT">Can B.</a></p>
                    <div class="alcaklik">
                <ul>
                    <li>
                        <a href="" target="_blank">
                            <i class="fab fa-discord"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
                    </div>
            </div>
        </div>

        <button class="floating-btn">
            Bana Tıkla
        </button>

        <footer id="footer">Created by <b>Can BOZKURT</b> - Tüm hakları saklıdır. &nbsp; &copy; &nbsp; | &nbsp; 2021 </footer>
        <noscript>Tarayıcınız Java Script desteklemediğinizden dolayı siteyi görüntüleyemiyorsunuz. Google Chrome gibi güncel sitelere geçiş yapınız.</noscript>
    </div>
    <script src="JS/main.js"></script>
</body>
</html>


<?php 

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];

    $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Mesajınız başarılı bir şekilde gönderildi.')</script>";
    }

    else{
        echo "<script>alert('Mesajınız gönderilirken bir hata oluştu. Ana sayfa da ki iletişim kısımın'dan bize ulaşabilirsiniz.')</script>";
    }

}

?>