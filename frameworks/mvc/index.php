    <?php
    
	require_once "config/config.php";
	require_once "routes/routes.php";
	require_once "config/database.php";
	require_once "controllers/UsuarioController.php";

if(isset($_GET['controller'])){
		
    $controlador = cargarControlador($_GET['controller']);
    
    if(isset($_GET['action'])){
        if(isset($_GET['id'])){
            cargarAccion($controlador, $_GET['action'], $_GET['id']);
            } else {
            cargarAccion($controlador, $_GET['action']);
        }
        } else {
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
    
    } else {
    
    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    $accionTmp = ACCION_PRINCIPAL;
    $controlador->$accionTmp();
}
?>

