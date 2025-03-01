<!DOCTYPE html>
<html lang="ar" dir="rtl" >
<head>
    <!-- basic page needs -->
    <meta charset="utf-8">
    <title>MOKA</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts (مثال) -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- CSS الرئيسي -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body id="top">

    <!-- header -->
    <header>
        <div class="row">
            <div class="top-bar">
                <div class="logo">
                    <a href="index.html">MOKA</a>
                </div>
                <nav class="main-navigation">
                    <ul>
                        <li><a href="#intro">البداية</a></li>
                        <li><a href="#about">حول</a></li>
                        <li><a href="#how-it-works">كيفية الاستخدام</a></li>
                        <li><a href="#faq">الأسئلة الشائعة</a></li>
                        <li><a href="#featured-places">أماكن مميزة</a></li>
                        <li><a href="#team">فريق العمل</a></li>
                        <li><a href="#contact">للتواصل</a></li>
                    </ul>
                </nav>
                <div class="button-section">
                    <a href="{{ url('/login') }}" class="button">تسجيل الدخول / التسجيل</a>
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->

    <!-- intro section -->
    <section id="intro">
        <div class="intro-overlay"></div>
        <div class="intro-content">
            <div class="row">
                <div class="col-twelve">
                    <h5>مرحبا بكم</h5>
                    <h1>
                        يقدم موقعنا خريطة تفاعلية تعرض أفضل الأماكن بناءً على تقييمات الزوار.
                        يمكنك الاستكشاف، التقييم، ومشاركة تجربتك بسهولة!
                    </h1>
                    <a class="button stroke smoothscroll" id="more-info-button" href="#about" title="">
                        لمعرفة المزيد
                    </a>
                    <!-- Move to Map -->
                    <div class="button-Map">
                        <a href="map.html" class="button button-primary" id="to-map-button">إلى الخريطة</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="intro-social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </section>
    <!-- /intro -->

    <!-- about section -->
    <section id="about">
        <div class="row-section-intro">
            <div class="col-twelve">
                <h1>ما نقدمه لك</h1>
                <div class="intro-info">
                    <img src="/Image/intro-bg.jpg" alt="Map" />
                    <p class="lead">
                        نقدم لك خريطة تفاعلية توضح تقييم كل منطقة بناءً على عوامل متعددة،
                        مدعومة بمراجعات حقيقية من المستخدمين.
                        هدفنا هو تسهيل اتخاذ قراراتك وتوفير تجربة استكشاف أكثر وضوحًا وأمانًا.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->

    <!-- How it works -->
    <section id="how-it-works">
        <div class="row">
            <div class="col-twelve">
                <h2>كيفية الاستخدام</h2>
                <p>
                    يمكن للمستخدم تصفح الخريطة التفاعلية للعثور على الأماكن المرغوبة.
                    إليك الخطوات الأساسية:
                </p>
                <ol>
                    <li>إنشاء حساب أو تسجيل الدخول.</li>
                    <li>البحث عن الموقع أو الفئة التي تهمك.</li>
                    <li>مشاهدة التقييمات والتعليقات السابقة.</li>
                    <li>إضافة تقييمك الشخصي ومشاركة تجربتك.</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- /how-it-works -->

    <!-- قسم الإحصائيات (مثال) -->
    <section id="stats" style="text-align:center; padding: 2rem;">
        <div class="row">
            <div class="col-twelve">
                <h2>إحصائياتنا</h2>
                <p>
                    إليكم أبرز الأرقام التي تعبر عن نجاح موقعنا:
                </p>
                <div>
                    <strong>1500+</strong> مكان مسجل
                </div>
                <div>
                    <strong>3000+</strong> تعليق وتقييم
                </div>
                <div>
                    <strong>500+</strong> مستخدم نشط يوميًا
                </div>
            </div>
        </div>
    </section>
    <!-- /stats -->

    <!-- Testimonials - آراء المستخدمين -->
    <section id="testimonials" style="padding: 2rem;">
        <div class="row">
            <div class="col-twelve">
                <h2>آراء مستخدمينا</h2>
                <blockquote>
                    "موقع رائع! ساعدني كثيرًا في اكتشاف أفضل الأماكن في مدينتي."
                    <cite>- أحمد</cite>
                </blockquote>
                <blockquote>
                    "التقييمات والمراجعات ساعدتني في اختيار مطعمي المفضل بشكل أسرع."
                    <cite>- قاسم</cite>
                </blockquote>
            </div>
        </div>
    </section>
    <!-- /testimonials -->

    <!-- FAQ - الأسئلة الشائعة -->
    <section id="faq">
        <div class="row">
            <div class="col-twelve">
                <h2>الأسئلة الشائعة</h2>
                <div>
                    <h3>كيف أقوم بتسجيل الدخول أو إنشاء حساب؟</h3>
                    <p>
                        يمكنك الضغط على "تسجيل الدخول / التسجيل" في أعلى الصفحة،
                        واتباع الخطوات المبسطة لإنشاء حساب جديد أو تسجيل الدخول لحساب موجود.
                    </p>
                </div>
                <div>
                    <h3>كيف أضيف تقييمًا جديدًا؟</h3>
                    <p>
                        بعد اختيار المكان المراد تقييمه على الخريطة،
                        اضغط على زر "إضافة تقييم" واترك تعليقك وتقييمك بالنقاط.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /faq -->

    <!-- Featured Places - أماكن مميزة -->
    <section id="featured-places" style="padding: 2rem;">
        <div class="row">
            <div class="col-twelve">
                <h2>أماكن مميزة</h2>
                <p>إليك بعض الأماكن التي حصلت على أعلى التقييمات من زوارنا:</p>
                <ul>
                    <li>مطعم المذاق الشهي - تقييم 4.8</li>
                    <li>منتزه الأسرة الرائع - تقييم 4.7</li>
                    <li>مركز التسوق الفاخر - تقييم 4.6</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /featured-places -->

    <!-- Meet the Team - فريق العمل -->
    <section id="team">
        <div class="row">
            <div class="col-twelve" style="text-align:center;">
                <h2>فريق العمل</h2>
                <p>تعرف على الأشخاص الذين يقفون وراء هذا المشروع</p>
                <!-- أمثلة لأعضاء الفريق -->
                <div style="display:inline-block; margin:1rem;">
                    <img src="https://via.placeholder.com/100" alt="عضو فريق" style="border-radius:50%;">
                    <h3>عبدالله</h3>
                    <p>المؤسس ومدير المشروع</p>
                </div>
                <div style="display:inline-block; margin:1rem;">
                    <img src="https://via.placeholder.com/100" alt="عضو فريق" style="border-radius:50%;">
                    <h3>علي</h3>
                    <p>المسؤولة عن التصميم وتجربة المستخدم</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /team -->

    <!-- قسم "دعوة لاتخاذ إجراء" (CTA) -->
    <section id="call-to-action" style="padding: 2rem; text-align:center;">
        <div class="row">
            <div class="col-twelve">
                <h2>انضم إلينا الآن!</h2>
                <p>
                    ابدأ رحلتك معنا في استكشاف أفضل الأماكن ومشاركة تجاربك
                    مع مجتمع من المسافرين والمستكشفين من جميع أنحاء العالم.
                </p>
                <a href="login.html" class="button button-primary">سجّل حسابك الآن</a>
            </div>
        </div>
    </section>
    <!-- /call-to-action -->

    <!-- قسم الشركاء (Partners) -->
    <section id="partners" style="padding: 2rem; text-align:center;">
        <div class="row">
            <div class="col-twelve">
                <h2>شركاؤنا</h2>
                <p>نفتخر بالتعاون مع هذه الجهات المميزة:</p>
                <div style="display:flex; justify-content:center; gap:2rem; flex-wrap:wrap;">
                    <img src="https://via.placeholder.com/100x50" alt="شعار شريك" />
                    <img src="https://via.placeholder.com/100x50" alt="شعار شريك" />
                    <img src="https://via.placeholder.com/100x50" alt="شعار شريك" />
                </div>
            </div>
        </div>
    </section>
    <!-- /partners -->

    <!-- قسم "تابعنا" (Stay Connected) -->
    <section id="stay-connected" style="padding: 2rem; text-align:center;">
        <div class="row">
            <div class="col-twelve">
                <h2>تابعنا</h2>
                <p>لا تفوّت أي تحديثات أو فعاليات جديدة.</p>
                <ul class="intro-social" style="justify-content:center; margin-top:1rem;">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /stay-connected -->

    <!-- مثال على إدراج فيديو تعريفي (اختياري) -->
    <section id="intro-video" style="padding: 2rem; text-align:center;">
        <div class="row">
            <div class="col-twelve">
                <h2>فيديو تعريفي</h2>
                <p>شاهد هذا الفيديو القصير للتعرف على أهم ميزات موقعنا:</p>
                <video width="560" height="315" controls style="max-width:100%;">
                    <source src="video/intro-video.mp4" type="video/mp4">
                    متصفحك لا يدعم تشغيل الفيديو بشكل مباشر.
                </video>
            </div>
        </div>
    </section>
    <!-- /intro-video -->

    <!-- contact section (مثال) -->
    <section id="contact" style="padding:2rem; background:#252525; color:#fff; text-align:center;">
        <div class="row">
            <div class="col-twelve">
                <h2>للتواصل</h2>
                <p>تواصل معنا لأي استفسارات أو اقتراحات</p>
                <form class="contact-form" style="max-width:600px; margin:2rem auto; text-align:right;">
                    <label for="name">الاسم</label>
                    <input type="text" id="name" name="name" placeholder="اسمك الكامل" />
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" placeholder="example@email.com" />
                    <label for="message">رسالتك</label>
                    <textarea id="message" name="message" rows="5"></textarea>
                    <button type="submit">إرسال</button>
                </form>
            </div>
        </div>
    </section>
    <!-- /contact -->

    <!-- Footer -->
    <footer>
        <p>جميع الحقوق محفوظة © 2025 - موقع MOKA</p>
    </footer>
    <!-- /footer -->

</body>
</html
