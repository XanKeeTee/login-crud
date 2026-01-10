<?php

class Alumno
{
    private $conn;
    private $table_name = "alumnos";


    public $numAlumno;
    public $nombre;
    public $apellidos;
    public $email;
    public $fechaNacimiento;
    public $repite;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function read()
    {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY numAlumno ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " SET nombre=:nombre, apellidos=:apellidos, email=:email, fechaNacimiento=:fechaNacimiento, repite=:repite";

        $stmt = $this->conn->prepare($query);

        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->apellidos = htmlspecialchars(strip_tags($this->apellidos));
        $this->email = htmlspecialchars(strip_tags($this->email)); // Limpieza extra recomendada

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":apellidos", $this->apellidos);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":fechaNacimiento", $this->fechaNacimiento);
        $stmt->bindParam(":repite", $this->repite, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function readOne()
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE numAlumno = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->numAlumno);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $this->nombre = $row['nombre'];
            $this->apellidos = $row['apellidos'];
            $this->email = $row['email'];
            $this->fechaNacimiento = $row['fechaNacimiento'];
            $this->repite = $row['repite'];
        }
    }

    public function update()
    {
        $query = "UPDATE " . $this->table_name . " SET nombre=:nombre, apellidos=:apellidos, email=:email, fechaNacimiento=:fechaNacimiento, repite=:repite WHERE numAlumno=:numAlumno";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellidos', $this->apellidos);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(':fechaNacimiento', $this->fechaNacimiento);
        $stmt->bindParam(':repite', $this->repite, PDO::PARAM_INT);
        $stmt->bindParam(':numAlumno', $this->numAlumno);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE numAlumno = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->numAlumno, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
