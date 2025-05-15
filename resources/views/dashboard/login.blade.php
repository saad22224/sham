<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="xMeFzk8AzhcEhA83Iy3aFYb7a1ZRfuwpZjCI25O9tNc" />

    <title>تسجيل الدخول - لوحة التحكم</title>
    <!-- Bootstrap RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Cairo -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- Custom CSS -->
        <link rel="shortcut icon" href="\logo.e8f94ee2.svg" type="image/x-icon">
    <title>shamcash</title>
    <style>
        :root {
            --primary-color: #23342E;
            --secondary-color: #23342E;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }

        body {
            font-family: 'Cairo', sans-serif;
            line-height: 1.6;
            background-color: #f7f7f7;
            background-image: linear-gradient(135deg, rgba(35, 52, 46, 0.1) 0%, rgba(35, 52, 46, 0.2) 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .login-container {
            max-width: 450px;
            width: 100%;
            padding: 40px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .login-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-logo i {
            font-size: 60px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .login-logo h1 {
            font-size: 28px;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }

        .login-form .form-control {
            height: 50px;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #e2e2e2;
            transition: all 0.3s;
        }

        .login-form .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(217, 164, 91, 0.25);
        }

        .login-form .input-group-text {
            background-color: transparent;
            border-left: none;
            color: #aaa;
        }

        .login-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(217, 164, 91, 0.3);
        }

        .login-btn:hover {
            background-color: #1a2822;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(35, 52, 46, 0.4);
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .password-toggle {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            display: flex;
            align-items: center;
            padding: 0 15px;
            color: #aaa;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s;
        }

        .password-toggle:hover {
            color: var(--primary-color);
        }

        .form-floating>label {
            right: 0;
            padding: 1rem 0.75rem;
        }

        .form-floating>.form-control {
            padding-right: 0.75rem;
        }

        .input-group-rtl .input-group-text {
            border-right: 1px solid #ced4da;
            border-left: 0;
            border-top-right-radius: 8px !important;
            border-bottom-right-radius: 8px !important;
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }

        .input-group-rtl .form-control {
            border-right: 0;
            border-left: 1px solid #ced4da;
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
            border-top-left-radius: 8px !important;
            border-bottom-left-radius: 8px !important;
        }

        .back-to-site {
            color: var(--secondary-color);
            text-decoration: none;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
        }

        .back-to-site:hover {
            color: #1a2822;
        }

        .back-to-site i {
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="login-container" data-aos="fade-up" data-aos-duration="800">
                    <div class="login-logo">
                        {{-- <i class="fas fa-utensils"></i> --}}
                        <h1>لوحة تحكم الموقع</h1>
                        <p class="text-muted">الرجاء تسجيل الدخول للوصول إلى لوحة التحكم</p>
                    </div>
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

                    <form class="login-form" action="{{ route('admin.login') }}" method="POST">
                        @csrf
                        <div class="mb-4 input-group input-group-rtl">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input name="email" type="text" class="form-control" id="username"
                                placeholder="اسم المستخدم" required>
                        </div>

                        <div class="mb-4 input-group input-group-rtl position-relative">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input name="password" type="password" class="form-control" id="password"
                                placeholder="كلمة المرور" required>
                            <span class="password-toggle" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>

                        <!-- Removed remember me and forgot password as requested -->

                        <button type="submit" class="login-btn mb-4">
                            <i class="fas fa-sign-in-alt me-2"></i> تسجيل الدخول
                        </button>

                        <div class="text-center mt-3">
                            <a href="index.html" class="back-to-site">
                                العودة للموقع الرئيسي <i class="fas fa-home"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Initialize Scripts -->
    <script>
        // Initialize AOS
        AOS.init();

        // Password visibility toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            // Toggle the password field type between 'password' and 'text'
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye icon
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
