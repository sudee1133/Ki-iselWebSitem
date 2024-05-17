<?php
$username='g231210001@sakarya.edu.tr) '
$password='g231210001'
// Formdan gelen kullanıcı adı ve şifreyi al
$username = $_POST['username'];
$password = $_POST['password'];

// Boş alan kontrolü yap
if (empty($username) || empty($password)) {
    header("Location: login.php"); // Kullanıcıyı login sayfasına yönlendir
    exit();
}

// Kullanıcı adının e-posta adresi formatında olup olmadığını kontrol et
if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    echo "Geçerli bir öğrenci numarası giriniz.";
    exit();
}

// Şifrenin kullanıcı adının numara kısmıyla eşleşip eşleşmediğini kontrol et
$studentNumber = explode('@', $username)[0]; // Kullanıcı adından öğrenci numarasını çıkar
if ($password !== $studentNumber) {
    echo "Geçersiz kullanıcı adı veya şifre.";
    exit();
}

// Giriş başarılı ise kullanıcıyı karşıla
echo "Hoşgeldiniz $studentNumber, giriş işlemi başarılı!";
?>
<!doctype html>
<html lang="ar" dir="ltr"
>  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/login.css">
    
    <title>Giriş Sayfası</title>
    </head>
    <body>
<div class="box">
    <div class="container">
        <div class="top-header">
            <form action="login_process.php" method="post" onsubmit="login(event)">
        <header>LOGİN</header>
        </div>
        <br/>
        <div class="input-field">
            <input type="text"class="input" placeholder="Öğrenci No"required>
            
        </div>
        <br/>
        <div class="input-field">
            <input type="password"class="input" placeholder="Şifre"required>
        </div>
        <br/>
        <div class="input-field">
            <input type="submit"class="submit" value="Login">
        </div>
        <br/>

        <div class="bottom">
            <div class="left">
                <input type="checkbox"  id="checkbox">
                <label for="check">Beni Hatırla</label>
            </div>
        </div>
    </form>
    </div>
</div>




<script src="Script.js"></script>
    </body>
</html>
