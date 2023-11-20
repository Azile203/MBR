<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Система бронирования такси</title>
    <style>
        body {
            background-color: #8B008B; /* фиолетовый цвет */
            color: white;
        }

        .navbar {
            padding: 10px;
            text-align: center;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
        }

        .register-login {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="navbar">
            <a href="#">Главная</a>
            <a href="#">О нас</a>
            <a href="#">Контакты</a>
            <a href="#">Доступные такси</a>
        </div>

        <div class="register-login">
            <select>
                <option value="registration">Регистрация</option>
                <option value="authorization">Авторизация</option>
            </select>
        </div>

        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
