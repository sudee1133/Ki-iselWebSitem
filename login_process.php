<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifre alınıyor
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı adının doğruluğu kontrol ediliyor
    if (strpos($username, '@sakarya.edu.tr') === false) {
        header("Location: login.php");
        exit;
    }

    // Şifrenin doğruluğu kontrol ediliyor
    $studentNumber = substr($username, 0, strpos($username, '@sakarya.edu.tr'));
    if ($password !== $studentNumber) {
        header("Location: login.php");
        exit;
    }

    // Başarılı giriş mesajı
    echo "Hoşgeldiniz $studentNumber";
} else {
    // POST isteği yoksa tekrar giriş yapmaya yönlendir
    header("Location: login.php");
    exit;
}
?>
