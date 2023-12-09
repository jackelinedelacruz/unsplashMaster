<div class="login">
    <div class="content">
        <div class="contenten-sm">
            <?php include_once __DIR__ . '/../templates/name.php'; ?> <!-- con el /../ sales de la carpeta actual-->

            <form class="form">

                <div class="row">
                    <label for="email">Email</label> <!-- aque ara relacion -->
                    <input type="email" id="email" placeholder="Email" name="email">
                </div>

                <div class="row">
                    <div class="label-justtify">
                        <label for="password">Password</label>
                        <span>
                            <a href="/forgot">Forgot your password?</a>
                        </span>
                    </div>
                    <input type="password" id="password" placeholder="Password" name="password">
                </div>
                <input type="submit" class="boton" value="Login">
            </form>
        </div>
    </div>
</div>