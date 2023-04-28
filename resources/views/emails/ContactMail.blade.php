<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Se ha registrado un nuevo Ticket de soporte</h1>
    
    <p><strong>Tipo de soporte:</strong> {{ $details['tipo'] }}</p>
    <p><strong>Cedula:</strong> {{ $details['cedula'] }}</p>
    <p><strong>Nombre:</strong> {{ $details['nombre'] }}</p>
    <p><strong>Apellidos:</strong> {{ $details['apellido'] }}</p>
    <p><strong>Correo electrónico:</strong> {{ $details['correo'] }}</p>
</body>
</html>