<?php 
if (isset($_GET['pagina'])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 'login';
}

/* retorna erros do banco*/
ini_set('display_errors', 1);
error_reporting(E_ALL);

switch ($pagina) {
    case "home":
        /*require_once "app/controllers/EmprestimoController.php";
        $controller = new EmprestimoController();
        $dados = $controller->listarEmprestimoGrafico(); 
        $topLeitores = $controller->listarLeitoresComMaisAtrasos();*/
        include("app/views/home.php"); 
        break;

    default:
        include("app/views/home.php");
        break;
}
?>
