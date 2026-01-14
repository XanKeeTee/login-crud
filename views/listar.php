<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos (MVC)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">Login-Crud</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item d-flex align-items-center me-3">
                        <button class="btn btn-link text-white text-decoration-none p-0 me-2 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#buscadorCollapse" aria-expanded="false" aria-controls="buscadorCollapse" title="Buscar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                        <div class="collapse collapse-horizontal" id="buscadorCollapse">
                            <input type="text" id="buscadorEnVivo" class="form-control form-control-sm" placeholder="Buscar..." style="width: 180px;">
                        </div>
                    </li>
                    <li class="nav-item me-3">
                        <span class="navbar-text text-white">
                            Hola, <strong>
                                <?php
                                echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Invitado';
                                ?>
                            </strong>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?action=logout" class="btn btn-outline-danger btn-sm">
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="bg-white p-4 rounded shadow">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Listado de Alumnos</h2>
                <a href="index.php?action=create" class="btn btn-primary">
                    + Añadir Nuevo Alumno
                </a>
            </div>

            <?php if (isset($_GET['message'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php
                    if ($_GET['message'] == 'created') echo 'Alumno creado correctamente.';
                    if ($_GET['message'] == 'updated') echo 'Alumno actualizado correctamente.';
                    if ($_GET['message'] == 'deleted') echo 'Alumno eliminado correctamente.';
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th onclick="ordenarTabla(0)" style="cursor: pointer;">Num Alumno ↕</th>
                            <th onclick="ordenarTabla(1)" style="cursor: pointer;">Nombre ↕</th>
                            <th onclick="ordenarTabla(2)" style="cursor: pointer;">Apellidos ↕</th>
                            <th onclick="ordenarTabla(3)" style="cursor: pointer;">Email ↕</th>
                            <th onclick="ordenarTabla(4)" style="cursor: pointer;">Fecha Nacimiento ↕</th>
                            <th onclick="ordenarTabla(5)" style="cursor: pointer;">Repite ↕</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $alumno): ?>
                            <tr>
                                <td class="align-middle"><?php echo $alumno['numAlumno']; ?></td>
                                <td class="align-middle"><?php echo htmlspecialchars($alumno['nombre']); ?></td>
                                <td class="align-middle"><?php echo htmlspecialchars($alumno['apellidos']); ?></td>
                                <td class="align-middle"><?php echo htmlspecialchars($alumno['email']); ?></td>
                                <td class="align-middle"><?php echo htmlspecialchars($alumno['fechaNacimiento']); ?></td>
                                <td class="align-middle">
                                    <?php if ($alumno['repite']): ?>
                                        <span class="badge bg-warning text-dark">Sí</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">No</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?action=edit&id=<?php echo $alumno['numAlumno']; ?>" class="btn btn-sm btn-outline-primary">Editar</a>
                                    <a href="index.php?action=delete&id=<?php echo $alumno['numAlumno']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este alumno?');">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputBuscador = document.getElementById('buscadorEnVivo');
            const filasTabla = document.querySelectorAll('tbody tr');

            inputBuscador.addEventListener('keyup', function(e) {
                const texto = e.target.value.toLowerCase();

                filasTabla.forEach(function(fila) {
                    const nombre = fila.children[1].textContent.toLowerCase();
                    const apellidos = fila.children[2].textContent.toLowerCase();
                    const email = fila.children[3].textContent.toLowerCase();

                    if (nombre.includes(texto) || apellidos.includes(texto) || email.includes(texto)) {
                        fila.style.display = '';
                    } else {
                        fila.style.display = 'none';
                    }
                });
            });

            const buscadorCollapse = document.getElementById('buscadorCollapse');
            buscadorCollapse.addEventListener('shown.bs.collapse', function() {
                inputBuscador.focus();
            });
        });
    </script>
    <!-- Script para ordenar -->
    <script>
        function ordenarTabla(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.querySelector("table");
            switching = true;
            dir = "asc";

            while (switching) {
                switching = false;
                rows = table.rows;

                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;

                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];


                    var xContent = x.textContent.toLowerCase();
                    var yContent = y.textContent.toLowerCase();

                    var xNum = parseFloat(xContent);
                    var yNum = parseFloat(yContent);

                    var esNumero = !isNaN(xNum) && !isNaN(yNum);

                    if (dir == "asc") {
                        if (esNumero ? xNum > yNum : xContent > yContent) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (esNumero ? xNum < yNum : xContent < yContent) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }

                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>