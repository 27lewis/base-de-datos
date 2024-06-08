<head>
	<link rel="stylesheet" href="./css/home.css">
</head>
<div class="container is-fluid">
    <h1 class="title">Home</h1>
    <h2 class="subtitle">¡Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!</h2>
    <div class="notification is-primary">
        Esta es tu página de inicio. Aquí puedes encontrar información relevante sobre tu cuenta y las últimas novedades.
    </div>

</div>
