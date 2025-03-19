<?php session_start(); ?>
<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand link-dark fw-bold" href="/">GuaviareDirectory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active link-body-emphasis fw-normal" aria-current="page" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-body-emphasis fw-normal" href="/categories">Categorías</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link-body-emphasis fw-normal" href="/offers">Ofertas</a>
        </li>

        <?php if (isset($_SESSION["user_id"])): ?>
          <li class="nav-item">
          <a class="nav-link link-body-emphasis fw-normal" href="/logout">Cerrar Sesión</a>
          </li>

          <li class="nav-item">
            <span class="nav-link fw-bold text-dark">Bienvenido, <?= htmlspecialchars($_SESSION["username"]) ?></span>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link link-body-emphasis fw-normal" href="/login">Iniciar sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-body-emphasis fw-normal" href="/register">Registrarse</a>
          </li>
        <?php endif; ?>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-primary" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Perfil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Configuracion</a></li>
            <li><a class="dropdown-item" href="#">Publicar Productos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
          </ul>
        </li> -->