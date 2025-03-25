<!-- Cards Categories -->
<section class="w-100 bg-body d-flex" style="height: 100vh;">

    <!-- Image Container -->
    <div class="h-100 flex-fill w-100" id="container_image_login">
        <img src="/public/img/login-banner.jpg" alt="Login Banner" id="image_login">
    </div>

    <!-- Login Container -->
    <div class="d-flex justify-content-center align-content-center flex-lg-fill w-100 p-3">
        <div class="h-100 d-flex flex-column justify-content-center">
            <h2 class="mb-5 fw-bolder"><a href="/" class="link-secondary link-underline link-underline-opacity-0">GuaviareDirectory</a></h2>
            <h2 class="mb-4 text-primary fw-bolder">Iniciar Sesión</h2>

            <!-- Mostrar errores si existen -->
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" class="w-75">
                <div class="mb-4">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($email ?? '') ?>" aria-describedby="emailHelp">
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <p><a href="/recover-account">¿Has olvidado tu password? Recuperar Cuenta.</a></p>
                <p><a href="/register">¿No tienes una cuenta? Regístrate.</a></p>

                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</section>