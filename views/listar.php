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
                            <th>Num Alumno</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Fecha Nacimiento</th>
                            <th>Repite</th>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>