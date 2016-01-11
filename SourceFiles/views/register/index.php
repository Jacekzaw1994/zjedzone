<!-- Features -->
<div id="features-wrapper">
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
                            <p class="wrong-email" style="display: none;">email zajety</p>
                            <p class="email-correct" style="display: none;">email poprawny</p>
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
                            <p class="wrong-passwd" style="display: none;">Hasło zbyt krótkie.</p>
                            <p class="correct-passwd" style="display: none;">Hasło poprawne.</p>
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
                                <div class="12u">
                                    <button type="submit" href="#" class="form-button-submit button icon fa-envelope">ZAREJESTRUJ</button>
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