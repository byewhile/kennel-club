<? require_once "components/head.php" ?>
<title>Авторизация</title>
</head>

<body class="bg-light">
    <? require_once "components/header.php" ?>
    <main>
        <div class="container py-5">
            <div class="d-flex justify-content-center p-5">
                <div>
                    <div class="text-center mb-5">
                        <i class="fas fa-paw fa-3x text-green mb-3"></i>
                        <h2>Авторизация</h2>
                        <p>Введите свои данные для входа</p>
                    </div>

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email адрес</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Пароль</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="password" id="password" required>
                                <button class="btn bg-white text-black border" style="width: 50px;" type="button" id="togglePassword">
                                    <i class="fas fa-eye" id="eye"></i>
                                </button>
                            </div>
                            <div class="form-text">Ваш пароль должен быть 8-20 символов, содержать буквы и цифры.</div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group">
                                <img src="backend/createCaptcha.php" alt="Капча">
                                <input type="text" name="captcha" maxlength="6" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn w-100">
                                <i class="fas fa-sign-in-alt me-2"></i>Войти
                            </button>
                        </div>

                        <div class="text-center">
                            <p>Нет аккаунта? <span class="text-green" style="cursor: pointer;">Зарегистрироваться</span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script>
        $('#togglePassword').on('click', function() {
            const password = $('#password');
            const icon = $('#eye');

            if (password.attr('type') === 'password') {
                password.attr('type', 'text');
                icon.addClass('fa-eye-slash').removeClass('fa-eye');
            } else {
                password.attr('type', 'password');
                icon.addClass('fa-eye').removeClass('fa-eye-slash');
            }
        });
    </script>
</body>

</html>