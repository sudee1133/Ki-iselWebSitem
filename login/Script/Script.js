
document.addEventListener("DOMContentLoaded", function() {
    // Login formunu seç
    var loginForm = document.getElementById("login-form");

    // Form submit olduğunda çalışacak olan fonksiyon
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Formun submit işlemini engelle

        // Kullanıcı adı ve şifre alanlarını seç
        var usernameInput = document.querySelector(".input-field input[type='text']");
        var passwordInput = document.querySelector(".input-field input[type='password']");

        // Kullanıcı adı ve şifre değerlerini al
        var username = usernameInput.value.trim();
        var password = passwordInput.value.trim();

        // Boş alan kontrolü yap
        if (username === "" || password === "") {
            alert("Kullanıcı adı ve şifre alanları boş bırakılamaz.");
            return;
        }

        // Kullanıcı adının bir e-posta adresi olup olmadığını kontrol et
        if (!isValidEmail(username)) {
            alert("Geçerli bir öğrenci numarası giriniz.");
            return;
        }

        // Şifre kontrolü yap
        if (password !== username.substring(1, 12)) {
            alert("Geçersiz şifre.");
            return;
        }

        // Tüm kontrollerden geçildiyse kullanıcı girişi başarılı mesajı göster
        alert("Hoşgeldiniz " + username + ", login işlemi başarılı!");
    });

    // Verilen string'in e-posta adresi formatına uygun olup olmadığını kontrol eden fonksiyon
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
