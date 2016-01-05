
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="starter-template">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                        <form action="register/run" method="post">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="username" type="text" required name="username" class="form-control login-registration" placeholder="Username" aria-describedby="basic-addon1">
                            </div>
                            <p class="wrong-login">login za krotki lub zajety</p>
                            <p class="login-correct" style="display: none;">login poprawny</p>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" required name="password" class="form-control password-registration" placeholder="Password" aria-describedby="basic-addon1">
                            </div>
                            <p class="wrong-passwd">Hasło zbyt krótkie.</p>
                            <p class="correct-passwd" style="display: none;">Hasło poprawne.</p>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="password" required name="repeatpass" class="form-control" placeholder="Repeat password" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="text" required name="firstname" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-text-background"></i></span>
                                <input type="text" required name="lastname" class="form-control" placeholder="Surname" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group-btn center-block">
                                <input type="submit" style="width: 50px; height: 20px;">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->
