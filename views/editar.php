<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-0">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">Editar Alumno</h4>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="index.php?action=edit&id=<?php echo $alumno_data->numAlumno; ?>">
                            <input type="hidden" name="numAlumno" value="<?php echo $alumno_data->numAlumno; ?>">

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo htmlspecialchars($alumno_data->nombre); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo htmlspecialchars($alumno_data->apellidos); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento"
                                    value="<?php echo date('Y-m-d', strtotime($alumno_data->fechaNacimiento)); ?>" required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="repite" id="repite" <?php echo $alumno_data->repite ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="repite">¿Repite curso?</label>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" name="update" class="btn btn-primary">Actualizar Alumno</button>
                                <a href="index.php?action=index" class="btn btn-secondary">Volver al listado</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>