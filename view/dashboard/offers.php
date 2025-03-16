<div class="d-flex align-items-center mb-4 w-100 justify-content-end">
    <a href="/dashboard/offers/create" class="btn btn-success">Agregar Oferta</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Empresa</th>
                    <th>Duración</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Producto de ejemplo</td>
                    <td>Tienda Ejemplo</td>
                    <td>16/03/25 - 31-03/25</td>
                    <td>
                        <a href="/dashboard/offers/edit/1" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/dashboard/offers/delete/1" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <!-- Aquí se iterarán las ofertas dinámicamente -->
            </tbody>
        </table>
    </div>
</div>