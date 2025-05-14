<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تم التوثيق بنجاح</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom right, #f5f7fa, #c3cfe2);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .success-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 360px;
            max-width: 90%;
            transition: transform 0.3s;
        }
        .success-card:hover {
            transform: translateY(-5px);
        }
        .checkmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #4CAF50;
            margin: 0 auto 20px;
            position: relative;
            animation: pulse 1.5s infinite;
        }
        .checkmark:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -60%) rotate(45deg);
            width: 25px;
            height: 50px;
            border-bottom: 8px solid white;
            border-right: 8px solid white;
        }
        .message {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }
        .sub-message {
            color: #666;
            font-size: 16px;
            margin-bottom: 30px;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #3e8e41;
        }
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.4);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(76, 175, 80, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(76, 175, 80, 0);
            }
        }
    </style>
</head>
<body>
    <div class="success-card">
        <div class="checkmark"></div>
        <h1 class="message">تم توثيق حسابك بنجاح</h1>
        <p class="sub-message">شكراً لإتمام عملية التوثيق</p>
        <a href="{{url('/')}}" class="button">العودة للرئيسية</a>
    </div>
</body>
</html>
