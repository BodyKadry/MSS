<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moka</title>
    <link rel="icon" type="image/png" href="images.jpeg">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="container">
        <div class="form-box login">
            <form action="#">
                <h1>تسجيل دخول</h1>
                <div class="input-box">
                    <input type="text" placeholder="الأسم الكريم" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="كلمة المرور" required id="login-password">
                    <i class='bx bxs-lock-alt'></i>

                </div>
                <div class="forgot-link">
                    <a href="#">نسيت كلمة المرور؟</a>
                </div>
                <button type="submit" class="btn">سجل دخول</button>
                <p>يمكنك زيارتنا عبر منصات التواصل</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <form action="#">
                <h1>حساب جديد</h1>
                <div class="input-box">
                    <input type="text" placeholder="الأسم الكريم" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="الإيميل" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="كلمة المرور" required id="register-password">
                    <i class='bx bxs-lock-alt'></i>

                </div>
                <button type="submit" class="btn">تسجيل الدخول</button>
                <p>يمكنك زيارتنا عبر منصات التواصل</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>ولك أهلا وسهلا</h1>
                <p>لا تملك حساب؟</p>
                <button class="btn register-btn">هيا تعال سجل معنا</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>يا مرحبا فيك</h1>
                <p>تملك حساب بالفعل؟</p>
                <button class="btn login-btn">سجل للدخول</button>
            </div>
        </div>
    </div>

    <script src="/js/login.js"></script>
</body>
</html>
