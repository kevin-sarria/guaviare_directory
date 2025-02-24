<!-- Cards Categories -->
<section class="w-100 bg-body d-flex" style="height: 100vh;">

    <!-- Image Container -->
    <div class="h-100 flex-fill w-100" id="container_image_login">
        <img src="/public/img/recover-account-banner.webp" alt="Login Banner" id="image_login">
    </div>

    <!-- Login Container -->
    <div class="d-flex justify-content-center align-content-center flex-lg-fill w-100 p-3">

        <div class="h-100 d-flex flex-column justify-content-center">

            <h2 class="mb-5 fw-bolder"><a href="/" class="link-secondary link-underline link-underline-opacity-0">GuaviareDirectory</a></h2>

            <h2 class="mb-4 text-primary fw-bolder">Recuperar Cuenta</h2>

            <form method="POST" class="w-75">

                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

                </div>

                <p><a href="/login">Ya tienes cuenta? Inicia Sesion.</a></p>
                <p><a href="/register">No tienes una cuenta? Registrate.</a></p>

                <button type="submit" class="btn btn-primary">Enviar Instrucciones</button>
            </form>
        </div>
    </div>

</section>