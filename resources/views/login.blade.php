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
        <!-- نموذج تسجيل الدخول -->
        <div class="form-box login" id="login-form">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>تسجيل دخول</h1>
                <div class="input-box">
                    <input type="text" name="email" placeholder="البريد الإلكتروني" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="كلمة المرور" required>
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

        <!-- نموذج تسجيل حساب جديد -->
        <div class="form-box register" id="register-form">
            <h1>حساب جديد</h1>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="input-box">
                    <input type="text" name="name" placeholder="الأسم الكريم" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="الإيميل" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="كلمة المرور" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
                </div>
                <button type="submit" class="btn">تسجيل حساب</button>
                <p>يمكنك زيارتنا عبر منصات التواصل</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </form>
        </div>

        <!-- لوحة التبديل بين النماذج -->
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>ولك أهلا وسهلا</h1>
                <p>لا تملك حساب؟</p>
                <button class="btn register-btn" onclick="toggleForms()">هيا تعال سجل معنا</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>يا مرحبا فيك</h1>
                <p>تملك حساب بالفعل؟</p>
                <button class="btn login-btn" onclick="toggleForms()">سجل للدخول</button>
            </div>
        </div>
    </div>

    <script src="/js/login.js"></script>
    <script>
        // وظيفة لتبديل النماذج بين تسجيل الدخول والتسجيل
        function toggleForms() {
            var loginForm = document.getElementById('login-form');
            var registerForm = document.getElementById('register-form');
            loginForm.classList.toggle('hidden');
            registerForm.classList.toggle('hidden');
        }
    </script>
</body>
</html>
