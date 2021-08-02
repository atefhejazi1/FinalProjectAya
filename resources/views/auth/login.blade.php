<html>

<head>
    <link href="css/stylelogin.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .veen button {
            background-color: #050;
            color: #fff
        }
    </style>
</head>

<body>

    <div class="alert alert-danger" role="alert">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </div>
    <div class="body">
        <div class="veen">
            <div class="rgstr-btn splits">
                <p>
                    <img class="img1" src="images/%D8%B1%D9%88%D8%B6%D8%A9%20%D9%81%D9%84%D8%B3%D8%B7%D9%8A%D9%86-%20%D8%A8%D8%AF%D9%88%D9%86%20%D8%AE%D9%84%D9%81%D9%8A%D8%A9-.png">
                </p>
            </div>
            <div class="wrapper">
                <form id="login" tabindex="500" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3>تسجيل الدخول</h3>
                    <div class="mail">
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus>
                        <label for="email" :value="__('Email')">اسم المستخدم</label>
                    </div>
                    <div class="passwd">
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
                        <label for="password" :value="__('Password')">كلمة المرور</label>
                    </div>

                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forget password - نسيت كلمة المرور') }}
                    </a>
                    @endif
                    <button>
                        {{ __('Log in') }}
                    </button>

                </form>

            </div>
        </div>
    </div>




</body>

</html>