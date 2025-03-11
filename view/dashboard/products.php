<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-primary">Productos</h2>
    <a href="/dashboard/products/create" class="btn btn-success">Agregar Producto</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Producto de ejemplo</td>
                    <td>$100.00</td>
                    <td>
                        <a href="/dashboard/products/edit/1" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/dashboard/products/delete/1" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <!-- Aquí se iterarán los productos dinámicamente -->
            </tbody>
        </table>
    </div>
</div>
