<div class="sidebar shadow-sm p-3 bg-body z-3">

    <div class="d-flex w-100 justify-content-end">
        <button class="btn btn-link mb-0 fw-bold fs-3 link-danger link-underline link-underline-opacity-0" id="btn_close_sidebar">x</button>
    </div>

    <div class="sidebar__container d-flex flex-column justify-content-between" style="height: 93%;"> <!-- Sidebar Container -->

        <div class="sidebar__icon">
            <span class="mb-5 fw-bolder fs-4 text-center text-wrap">
                <a href="/" class="link-secondary link-underline link-underline-opacity-0">GuaviareDirectory</a>
            </span>
        </div>
    
        <div class="sidebar__links">
            
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <a href="/dashboard" class="link-sidebar nav-link text-center">Inicio</a>
                <a href="/dashboard/company" class="link-sidebar nav-link text-center">Empresa</a>
                <a href="/dashboard/products" class="link-sidebar nav-link text-center">Productos</a>
                <a href="/dashboard/offers" class="link-sidebar nav-link text-center">Ofertas</a>

            </div>
            
        </div> <!-- Sidebar Container -->


        <div class="sidebar__options">
            <div class="options d-flex justify-content-between">

                <button class="option__settings btn btn-outline-light border border-2">
                    <img src="/public/img/icons/settings_icon.svg" alt="Settings button" style="color: white;">
                </button>

                <button class="option__logout btn btn-outline-light border border-2">
                    <img src="/public/img/icons/logout_icon.svg" alt="Logout Button">
                </button>

            </div>
        </div>

    </div>

</div>