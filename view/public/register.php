<!-- Cards Categories -->
<section class="w-100 bg-body d-flex" style="height: 100vh;">

    <!-- Image Container -->
    <div class="h-100 flex-fill w-100" id="container_image_login">
        <img src="/public/img/register-banner.jpg" alt="Login Banner" id="image_login">
    </div>

    <!-- Login Container -->
    <div class="d-flex justify-content-center align-content-center flex-lg-fill w-100 p-3">

        <div class="h-100 d-flex flex-column justify-content-center">

            <h2 class="mb-5 fw-bolder"><a href="/" class="link-secondary link-underline link-underline-opacity-0">GuaviareDirectory</a></h2>

            <h2 class="mb-4 text-primary fw-bolder">Registro</h2>

            <form method="POST" class="w-75">

                <div class="mb-3">
                    <label for="username" class="form-label fw-semibold">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernamelHelp">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <input type="password" class="form-control" id="password" name="paassword" aria-describedby="passwordHelp">
                </div>

                <div class="mb-3">
                    <label for="repeatPassword" class="form-label fw-semibold">Repetir Password</label>
                    <input type="email" class="form-control" id="repeatPassword" name="repeatPassword" aria-describedby="repeatPasswordHelp">
                </div>

                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="termsAndConditions">
                    <label class="form-check-label" for="termsAndConditions" name="termsAndConditions">Aceptar <a href="/terms-&-conditions">Terminos y Condiciones</a></label>
                </div>

                <p class="mb-4"><a href="/login">Ya tienes cuenta? Inicia Sesion.</a></p>
                <p><a href="/recover-account">Has olvidado tu password? Recuperar Cuenta.</a></p>

                <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
        </div>
    </div>

</section>