<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Form'u</title>
    <!-- CSS-Kütüphane ve Font -->
    <link rel="stylesheet" href="CSS/form.css">
    <script src="https://kit.fontawesome.com/5ebcc5475e.js" crossorigin="anonymous"></script>
    <!-- Alttaki el yazı, Üstteki normal.  -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>
        <div id="whitePart">
            <center>
                <hr color="#C7C7C7" id="cizgi">
            </center>
            <b><span id="about">İLETİŞİM</span></b>
            <h3 id="aboutMe">İletişim<span id="kimim"> form'u</span></h3>
        </div>
    <div class="iletisimkapsayici">
        <section id="iletisim">
            <div class="container">
               <h3 id="h3iletisim">İletişim</h3>
               <form action="index.php" method="post">
               <div id="iletisimopak">
               </form>
                   <div id="formgroup">
                       <div class="adres">
                           <div id="leftform">
                               <input type="text" name="isim" placeholder="Ad Soyad"  class="a">
                               <input type="text" name="tel" placeholder="Telefon Numaranız"  class="b" minlength="1" maxlength="11">
                           </div>
                           <div id="rightform">
                               <input type="email" name="mail" placeholder="E-Mail Adresiniz" class="a">
                               <input type="text" name="konu" placeholder="Konu Başlığı" class="b">
                           </div>
                           <textarea name="mesaj" class="texta" cols="30" placeholder="Mesajınız" rows="10" required></textarea>
                           <div class="submitbutton">
                                <input type="submit" value="Gönder" class="submit">
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </section>
    </div>
    <footer id="footer">Created by <b>Can BOZKURT</b> - Tüm hakları saklıdır. &nbsp; &copy; &nbsp; | &nbsp; 2021 </footer>
</body>
</html>
