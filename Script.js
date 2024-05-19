function login(event) {
    var username = document.getElementsByName('username')[0].value;
    var password = document.getElementsByName('password')[0].value;

    if (username.trim() === '' || password.trim() === '') {
        alert('Kullanıcı adı ve şifre alanları boş bırakılamaz.');
        event.preventDefault();
        return false;
    }

    if (!username.includes('@sakarya.edu.tr')) {
        alert('Kullanıcı adı geçerli bir e-posta adresi olmalıdır.');
        event.preventDefault();
        return false;
    }

    return true;
}
