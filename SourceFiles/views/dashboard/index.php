<!-- Features -->
<div id="features-wrapper">
    <section id="features" class="container">
        <header>
            <h2> <strong>Dashboard jeśli jestes zalogowany</strong></h2>
        </header>
        <div class="row">
            <div class="4u 12u(mobile)">

            </div>
            <div class="4u 12u(mobile)">
                <!-- Feature -->
                <section>
                    <form id="randomInsert" action="<?php echo SITE_ROOT;?>dashboard/xhrInsert/" method="post">
                        <div class="row 50%">
                            <div class="12u 12u(mobile)">
                                <input type="text" name="text" />
                            </div>
                        </div>
                        <div class="row 50%">
                            <div class="12u">
                                <button type="submit" href="#" class="form-button-submit button icon fa-clock-o">Dodaj</button>
                            </div>
                        </div>
                    </form>
                </section>
                <div id="listInserts">

                </div>
            </div>
            <div class="4u 12u(mobile)">

            </div>
        </div>
    </section>
</div>

Dashboard ... Logged in only ...

<br>

    <form id="randomInsert" action="<?php echo SITE_ROOT;?>dashboard/xhrInsert/" method="post">
        <input type="text" name="text">
        <input type="submit">
    </form>

    <a href="<?php echo SITE_ROOT; ?>login">Strona główna</a>
    <br />

    <div id="listInserts">

    </div>