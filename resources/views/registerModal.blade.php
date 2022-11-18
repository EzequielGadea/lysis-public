<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/icono.ico" />
    <link rel="stylesheet" href="./dist/styles.css" />
    <link rel="stylesheet" href="./dist/styles.css.map" />
    <script src="https://kit.fontawesome.com/d2e8cc781d.js" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.6.1.min.js"></script>
    <script src="./js/openSubscriptionModal.js"></script>
    <script src="./js/openLeaguesAsideLeft.js"></script>
    <script src="./js/changeAsideLeft.js"></script>
    <script src="./js/openPayModal.js"></script>
    <script src="./js/hamburguerMenu.js"></script>
    <script src="./js/openSearchModal.js"></script>
    @livewireStyles
    <title>Lysis | Register</title>
</head>
<body>
    <section class="register-modal">
        <div class="register-modal__header-container">
            <div class="register-modal__header-container__text-group">
                <div class="register-modal__header-container__text-group__title">
                    Registrate
                </div>
                <div class="register-modal__header-container__text-group__text">
                    Es fácil y rápido.
                </div>
            </div>
            <div class="register-modal__header-container__close">
                <a class="register-modal__header-container__close__a" href="">
                    <i class="fa-solid fa-xmark"></i>
                </a>
            </div>
        </div>
        <div class="register-modal__line"></div>
        <form action="#" class="register-modal__register-form">
            <input type="text" name="name" id="nameInput"
                class="register-modal__register-form__user-input --input" placeholder="Nombre">
            <input type="text" name="surname" id="surnameInput"
                class="register-modal__register-form__user-input --input" placeholder="Apellido">
            <input type="email" name="emailRegister" id="emailInputRegister"
                class="register-modal__register-form__email-input --input" placeholder="Correo electronico">
            <input type="password" name="passwordRegister" id="passwordInputRegister"
                class="register-modal__register-form__passwd-input --input" placeholder="Contraseña">
            <input type="password" name="passwordRepeat" id="passwordRepeat"
                class="register-modal__register-form__passwdRepeat-input --input" placeholder="Repetir contraseña">
            <input type="date" name="birthDate" id="birthDate"
                class="register-modal__register-form__passwdRepeat-input --input">

            <div class="register-modal__register-form__bottom-text">
                Al presionar Registrarme usted acepta nuestros terminos <br>
                de uso, politica de privacidad y politica de coockies.
            </div>
            <button type="submit" class="register-modal__register-form__submit --login-btn">Registrarme</button>
        </form>
    </section>
    @livewireScripts
</body>
