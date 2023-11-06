<?php
include '../model/db.php';

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  $stmt = $conexion->prepare("SELECT nombre, apellido, correo, telefono, cita FROM psicologos WHERE id_psicol = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode([
      'nombreCompleto' => $row['nombre'] . " " . $row['apellido'],
      'correo' => $row['correo'],
      'telefono' => $row['telefono'],
      'cita' => $row['cita']
    ]);
  } else {
    echo json_encode(['error' => 'No se encontró el psicólogo']);
  }

  $stmt->close();
  $conexion->close();
} else {
  echo json_encode(['error' => 'Id no especificado']);
}
