<!-- Features -->
<div id="features-wrapper" class="register-page">
    <section id="features" class="container">
        <header>
            <h2> <strong>Rejestracja</strong></h2>
        </header>
        <div class="row">
            <div class="4u 12u(mobile)">

            </div>
            <div class="4u 12u(mobile)">
                    <!-- Feature -->
                    <section>
                        <form method="post" action="register/run">
                            <div class="row 50%">
                                <div class="12u 12u(mobile)">
                                    <input class="email-registration" id="email" name="email" required placeholder="E-mail" type="email" />
                                </div>
                            </div>
                            <div class="wrong-email" style="display: none;"><a class="tooltips" href="#">O<span>Email nie poprawny lub zajęty!</span></a></div>
                            <div class="email-correct" style="display: none;"><a class="tooltips" href="#">O<span>Email dostępny.</span></a></div>
                            <div class="row 50%">
                                <div class="12u 12u(mobile)">
                                    <input class="login-registration" id="username" name="username" required placeholder="Nick" type="text" />
                                </div>
                            </div>
                            <div class="row 50%">
                                <div class="12u 12u(mobile)">
                                    <input class="password-registration" name="password" required placeholder="Hasło" type="password" />
                                </div>
                            </div>
                            <div class="wrong-passwd" style="display: none;"><a class="tooltips" href="#">O<span>Hasło musi być dłuższe!</span></a></div>
                            <div class="correct-passwd" style="display: none;"><a class="tooltips" href="#">O<span>Hasło poprawne</span></a></div>
                            <div class="row 50%">
                                <div class="12u 12u(mobile)">
                                    <input name="repeatpass" required placeholder="Powrtórz hasło" type="password" />
                                </div>
                            </div>
                            <div class="row 50%">
                                <div class="12u 12u(mobile)">
                                    <input name="firstname" required placeholder="Imię" type="text" />
                                </div>
                            </div>
                            <div class="row 50%">
                                <div class="12u 12u(mobile)">
                                    <input name="lastname" required placeholder="Nazwisko" type="text" />
                                </div>
                            </div>
                            <div class="row 50%">
                                <div class="6u">
                                    <button type="submit" href="#" class="form-button-submit button">ZAREJESTRUJ</button>
                                </div>
                                <div class="6u login-option-container">
                                    <a href=" <?php echo SITE_ROOT . 'login';?>" class="login-register-page">LOGOWANIE</a>
                                </div>
                            </div>
                        </form>
                    </section>
            </div>
            <div class="4u 12u(mobile)">

            </div>
        </div>
    </section>
</div>