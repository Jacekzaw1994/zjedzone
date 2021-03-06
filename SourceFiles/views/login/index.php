<!-- Features -->
<div id="features-wrapper">
    <section id="features" class="container">
        <header>
            <h2>Zaloguj się aby mieć <strong>Więcej opcji</strong>!</h2>
        </header>
        <div class="row">
            <div class="4u 12u(mobile)">

            </div>
            <div class="4u 12u(mobile)">
                <?php if($this->someoneIsLoggedIn == 1){ ?>
                    <div>ZALOGOWANO</div>
                <?php }else{
                ?>
                <!-- Feature -->
                <section>
                    <form method="post" action="login/run">
                        <div class="row 50%">
                            <div class="12u 12u(mobile)">
                                <input name="email" placeholder="E-mail" type="email" />
                            </div>
                        </div>
                        <div class="row 50%">
                            <div class="12u 12u(mobile)">
                                <input name="password" placeholder="Hasło" type="password" />
                            </div>
                        </div>
                        <div class="row 50%">
                            <div class="6u">
                                <button type="submit" href="#" class="form-button-submit button">ZALOGUJ</button>
                            </div>
                            <div class="6u register-option-container">
                                <a href=" <?php echo SITE_ROOT . 'register';?>" class="register-login-page">REJESTRACJA</a>
                            </div>
                        </div>
                    </form>
                </section>
                <?php
                } ?>

            </div>
            <div class="4u 12u(mobile)">

            </div>
        </div>
    </section>
</div>
